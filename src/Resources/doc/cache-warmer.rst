Cache Warmer
============

By default the domains list is refreshed during cache warming, you can exclude
it using the ``--no-optional-warmers`` or the ``--no-warmup`` options.

.. code-block:: bash

    $ console cache:clear --no-optional-warmers

For more information about cache warmup read `Symfony2 cache warmup explained`_.

.. _`Symfony2 cache warmup explained`: http://blog.whiteoctober.co.uk/2014/02/25/symfony2-cache-warmup-explained/
