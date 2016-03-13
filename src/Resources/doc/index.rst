Domain Parser Bundle
====================

Symfony Bundle for `jeremykendall/php-domain-parser`_.

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

.. code:: bash

    $ composer require emanueleminotto/twig-cache-bundle

This command requires you to have `Composer`_ installed globally, as explained in the `installation chapter`_ of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the ``app/AppKernel.php`` file of your project:

.. code:: php

    // app/AppKernel.php

    // ...
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                // ...

                new EmanueleMinotto\DomainParserBundle\DomainParserBundle(),
            );
        }
    }

Readings:

-  `Configuration Reference`_

.. _jeremykendall/php-domain-parser: https://github.com/jeremykendall/php-domain-parser
.. _Composer: https://getcomposer.org/
.. _installation chapter: https://getcomposer.org/doc/00-intro.md
.. _Configuration Reference: https://github.com/EmanueleMinotto/DomainParserBundle/tree/master/Resources/doc/configuration-reference.rst

License
-------

This bundle is under the MIT license. See the complete license in the
bundle:

::

    Resources/meta/LICENSE
