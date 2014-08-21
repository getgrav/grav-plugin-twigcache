<?php
namespace Grav\Plugin;

use Grav\Common\Twig;
use Grav\Common\Plugin;

use Asm89\Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter;
use Asm89\Twig\CacheExtension\CacheStrategy\LifetimeCacheStrategy;
use Asm89\Twig\CacheExtension\Extension as CacheExtension;

class TwigCachePlugin extends Plugin
{
    /**
     * @var bool
     */
    protected $active = false;

    /**
     * @var Uri
     */
    protected $uri;

    /**
     * @var array
     */
    protected $filters = array();

    /**
     * @return array
     */
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }

    /**
     * Activate plugin if path matches to the configured one.
     */
    public function onPluginsInitialized()
    {
        if (file_exists($file = __DIR__.'/vendor/autoload.php')) {
            $autoload = require_once $file;
        } else {
            throw new RuntimeException('Cannot load Twig Cache Extensions');
        }
    }

    public function onTwigExtensions()
    {
        $cacheDriver = $this->grav['cache']->getCacheDriver();
        $cacheProvider  = new DoctrineCacheAdapter($cacheDriver);
        $cacheStrategy  = new LifetimeCacheStrategy($cacheProvider);
        $cacheExtension = new CacheExtension($cacheStrategy);

        $this->grav['twig']->twig->addExtension($cacheExtension);
    }

}
