Configuration Reference
=======================

.. code-block:: yaml

    # app/config/config.yml
    domain_parser:
        cache_dir:    ~ # Directory where text and php versions of list will be cached
        http_adapter: ~ # HTTP adapter (must implement \Pdp\HttpAdapter\HttpAdapterInterface)
