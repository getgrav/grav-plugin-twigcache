# Grav TwigCache Plugin

`TwigCache` is a [Grav](http://github.com/getgrav/grav) plugin that allows you to wrap portions of your Twig output in `cache` tags to cache specific ****long-running** or **expensive** twig processes.  The Grav TwigCache plugin is made possible by the [asm89/twig-cache-extension](https://github.com/asm89/twig-cache-extension) Twig extension.

# Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `twigcache`.

You should now have all the plugin files under

	/your/site/grav/user/plugins/twigcache

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Usage

The `twigcache` plugin doesn't require any configuration. The moment you install it, it is ready to use. It uses the same cache mechanism that Grav is using, so it automatically stores the result data in `APC`, `XCache`, `WinCache`, `memcache`, `FileSystem`, etc.

To take advantage of the plugin you should wrap your ****long-running** or **expensive** twig processes in the `cache` tags:

```
{% cache 'github_api_stars' 600 %}
Grav currently has: <b>{{ github.client.api('repo').show('getgrav', 'grav')['stargazers_count'] }}</b> stargazers
{% endcache %}
```

* The `github_api_stars` identifier is cache name and should be unique.
* The `600` value is the number of seconds to cache the content
* The content between the `cache` tags will be cached accordingly


