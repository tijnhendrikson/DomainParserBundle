Console Commands
================

This bundle provides two commands:

Domain parsing
--------------

The domain parsing command shows the parts of an URL.

.. code-block:: bash

    $ console domain-parser:parse http://u:p@www.pref.okinawa.jp:81/page.html?q=s#f

This command will give the output:

.. code-block:: text

    Parsed: http://u:p@www.pref.okinawa.jp:81/page.html?q=s#f
     scheme: http
     user: u
     pass: p
     host: www.pref.okinawa.jp
     subdomain: www
     registerableDomain: pref.okinawa.jp
     publicSuffix: okinawa.jp
     port: 81
     path: /page.html
     query: q=s
     fragment: f

it also allows the ``--host-only`` option:

.. code-block:: bash

    $ console domain-parser:parse --host-only http://u:p@www.pref.okinawa.jp:81/path

with the output:

.. code-block:: text

    Parsed: www.pref.okinawa.jp
     subdomain: www
     registerableDomain: pref.okinawa.jp
     publicSuffix: okinawa.jp
     host: www.pref.okinawa.jp

Parser list update
------------------

To update the list of provided domains from `publicsuffix.org`_ use:

.. code-block:: bash

    $ console domain-parser:update

and if everything goes well you'll see the output:

.. code-block:: text

    Updating public suffix list... done

.. _`publicsuffix.org`: https://publicsuffix.org/
