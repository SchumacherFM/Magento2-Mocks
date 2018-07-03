Magento2-Mocks
============

This Magento2 module provides mock classes when you have physically removed
unneeded modules with dependencies.

Magento2-Mocks does not work out of the box. You must adjust your root composer.json file.

For a full How-to, please read my blog post: [https://cyrillschumacher.com/projects/2018-07-01-magento2-mocks/](https://cyrillschumacher.com/projects/2018-07-01-magento2-mocks/)

*Warning:* If you install this module, it automatically assumes that you 
want to remove `Magento\Msrp` module. See files `Mocks/etc/di.xml` and `Mocks/Setup/InstallData.php`.

Installation via Composer
------------

Add the following to the require section of your Magento 2 `composer.json` file

    "schumacherfm/mage2-mocks": "X.Y.Z"

additionally add the following in the repository section

        "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/SchumacherFM/Magento2-Mocks.git"
        }
    ]
    
run `composer update`

add the following to `app/etc/config.php`

    'SchumacherFM_Mocks'=>1

The module will be later available on [https://packagist.org/](https://packagist.org/).

Compatibility
-------------

- Magento >= 2
- php >= 7.0.0

Support / Contribution
----------------------

Report a bug using the issue tracker or send us a pull request.

Instead of forking I can add you as a Collaborator IF you really intend to
develop on this module. Just ask :-)

For versioning have a look at [Semantic Versioning 2.0.0](http://semver.org/)

History
-------

#### 0.0.1

- Initial release

License
-------

OSL-3.0, AFL-3.0

Author
------

[Cyrill Schumacher](https://cyrillschumacher.com)

[My pgp public key](https://www.schumacher.fm/cyrill.asc)
