Validator Constraints
=====================

A validator constraint is provided, ``IsSuffixValid`` checks if a domain or an
URL has a valid suffix (if the value isn't null or blank).

Basic Usage
-----------

Annotations:

.. code-block:: php

    // src/AppBundle/Entity/Link.php
    namespace AppBundle\Entity;

    use EmanueleMinotto\DomainParserBundle\Validator\Constraints\IsSuffixValid;

    class Link
    {
        /**
         * @IsSuffixValid
         */
         protected $host;
    }

YAML:

.. code-block:: yaml

    # src/AppBundle/Resources/config/validation.yml
    AppBundle\Entity\Link:
        properties:
            host:
                - EmanueleMinotto\DomainParserBundle\Validator\Constraints\IsSuffixValid: ~

XML:

.. code-block:: xml

    <!-- src/AppBundle/Resources/config/validation.xml -->
    <?xml version="1.0" encoding="UTF-8" ?>
    <constraint-mapping xmlns="http://symfony.com/schema/dic/constraint-mapping"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://symfony.com/schema/dic/constraint-mapping http://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd">

        <class name="AppBundle\Entity\Link">
            <property name="host">
                <constraint name="EmanueleMinotto\DomainParserBundle\Validator\Constraints\IsSuffixValid" />
            </property>
        </class>
    </constraint-mapping>

PHP:

.. code-block:: php

    // src/AppBundle/Entity/Link.php
    namespace AppBundle\Entity;

    use Symfony\Component\Validator\Mapping\ClassMetadata;
    use EmanueleMinotto\DomainParserBundle\Validator\Constraints\IsSuffixValid;

    class Link
    {
        public static function loadValidatorMetadata(ClassMetadata $metadata)
        {
            $metadata->addPropertyConstraint('host', new IsSuffixValid());
        }
    }

Options
-------

message
~~~~~~~

**type**: ``string`` **default**: ``The suffix "%suffix%" is invalid.``

This message is shown if the domain doesn't have a valid suffix.
