Twig Extension
==============

A Twig extension is provided with this bundle, it gives two functions and a test:

Functions
---------

The function ``parse_url`` gives URL parts.

.. code-block:: jinja

    {% set url = 'http://user:pass@www.pref.okinawa.jp:8080/path/to/page.html?query=string#fragment' %}

    {{ parse_url(url).scheme }} {# -> http #}
    {{ parse_url(url).user }} {# -> user #}
    {{ parse_url(url).pass }} {# -> pass #}
    {{ parse_url(url).host }} {# -> www.pref.okinawa.jp #}
    {{ parse_url(url).subdomain }} {# -> www #}
    {{ parse_url(url).registerableDomain }} {# -> pref.okinawa.jp #}
    {{ parse_url(url).publicSuffix }} {# -> okinawa.jp #}
    {{ parse_url(url).port }} {# -> 8080 #}
    {{ parse_url(url).path }} {# -> /path/to/page.html #}
    {{ parse_url(url).query }} {# -> query=string #}
    {{ parse_url(url).fragment }} {# -> fragment #}

The function ``parse_host`` gives domain parts.

.. code-block:: jinja

    {% set host = 'www.pref.okinawa.jp' %}

    {{ parse_host(host).host }} {# -> www.pref.okinawa.jp #}
    {{ parse_host(host).subdomain }} {# -> www #}
    {{ parse_host(host).registerableDomain }} {# -> pref.okinawa.jp #}
    {{ parse_host(host).publicSuffix }} {# -> okinawa.jp #}

Tests
-----

The test ``valid suffix`` checks if a domain has a valid suffix.

.. code-block:: jinja

    {{ 'www.example.com' is valid suffix ? 'ok' : 'ko' }} {# -> ok #}
    {{ 'www.example.invaliddomain' is valid suffix ? 'ok' : 'ko' }} {# -> ko #}
