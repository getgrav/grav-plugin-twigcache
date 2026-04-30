# v1.4.0
## 04/29/2026

1. [](#bugfix)
    * Fixed PHP 8.1+ deprecation notice — explicit string casts where `null` was being passed to string-typed function arguments.

1. [](#improved)
    * Updated bundled `asm89/twig-cache-extension` classes to use Twig namespaced class names (`Twig\Token`, `Twig\Environment`, etc.) instead of the legacy `Twig_X` aliases. Now compatible with Twig 1.26+, Twig 2.x, and Twig 3.x — meaning the plugin works on Grav 1.7 and Grav 2.0 from a single codebase.

# v1.3.0
## 01/17/2017

1. [](#new)
    * Updated cache extension to 1.3.2

# v1.2.0
## 11/30/2014

1. [](#new)
    * ChangeLog started...
