<?php declare(strict_types = 1);

// osfsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../zircote/swagger-php/src/Annotations/AbstractAnnotation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-OpenApi\Annotations\AbstractAnnotation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-36d3baa1e871d509dbac02dc3cc65cc0049cd1c0de9ba877eeccc303565301c5-8.4.21-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../zircote/swagger-php/src/Annotations/AbstractAnnotation.php',
      ),
    ),
    'namespace' => 'OpenApi\\Annotations',
    'name' => 'OpenApi\\Annotations\\AbstractAnnotation',
    'shortName' => 'AbstractAnnotation',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * The openapi annotation base class.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 712,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'JsonSerializable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'x' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => 'x',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\OpenApi\\Generator::UNDEFINED',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 72,
            'startFilePos' => 791,
            'endTokenPos' => 74,
            'endFilePos' => 810,
          ),
        ),
        'docComment' => '/**
 * While the OpenAPI Specification tries to accommodate most use cases, additional data can be added to extend the specification at certain points.
 * For further details see https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.1.0.md#specificationExtensions
 * The keys inside the array will be prefixed with <code>x-</code>.
 *
 * @var array<string,mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'attachables' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => 'attachables',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\OpenApi\\Generator::UNDEFINED',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 85,
            'startFilePos' => 999,
            'endTokenPos' => 87,
            'endFilePos' => 1018,
          ),
        ),
        'docComment' => '/**
 * Arbitrary attachables for this annotation.
 * These will be ignored but can be used for custom processing.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_context' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_context',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'OpenApi\\Context',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_unmerged' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_unmerged',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 105,
            'startFilePos' => 1191,
            'endTokenPos' => 106,
            'endFilePos' => 1192,
          ),
        ),
        'docComment' => '/**
 * Annotations that couldn\'t be merged by mapping or postprocessing.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_required' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_required',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 119,
            'startFilePos' => 1405,
            'endTokenPos' => 120,
            'endFilePos' => 1406,
          ),
        ),
        'docComment' => '/**
 * The properties which are required by [the spec](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.1.0.md).
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_types' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_types',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 133,
            'startFilePos' => 1879,
            'endTokenPos' => 134,
            'endFilePos' => 1880,
          ),
        ),
        'docComment' => '/**
 * Specify the type of the property.
 *
 * Examples:
 *   \'name\' => \'string\'         // a string
 *   \'required\' => \'boolean\',   // true or false
 *   \'tags\' => \'[string]\',      // string array
 *   \'in\' => ["query", "header", "path", "formData", "body"] // must be one on these
 *   \'oneOf\' => [Schema::class] // array of schema objects.
 *
 * @var array<string,string|array<string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_nested' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_nested',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 78,
            'endLine' => 78,
            'startTokenPos' => 147,
            'startFilePos' => 2415,
            'endTokenPos' => 148,
            'endFilePos' => 2416,
          ),
        ),
        'docComment' => '/**
 * Declarative mapping of Annotation types to properties.
 *
 * Examples:
 *   Info::class => \'info\',                // Set @OA\\Info annotation as the info property.
 *   Parameter::class => [\'parameters\'],   // Append @OA\\Parameter annotations the parameters list.
 *   PathItem::class => [\'paths\', \'path\'], // Add @OA\\PathItem annotation to the `paths` map and use `path` as key.
 *
 * @var array<class-string<AbstractAnnotation>,string|array<string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_parents' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_parents',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 161,
            'startFilePos' => 2597,
            'endTokenPos' => 162,
            'endFilePos' => 2598,
          ),
        ),
        'docComment' => '/**
 * Reverse mapping of $_nested with the allowed parent annotations.
 *
 * @var array<class-string<AbstractAnnotation>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_blacklist' => 
      array (
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'name' => '_blacklist',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'_context\', \'_unmerged\', \'_analysis\', \'attachables\']',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 175,
            'startFilePos' => 2744,
            'endTokenPos' => 186,
            'endFilePos' => 2796,
          ),
        ),
        'docComment' => '/**
 * Properties that are blacklisted from the JSON output.
 *
 * @var array<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 86,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'properties' => 
          array (
            'name' => 'properties',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 94,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'merge' => 
      array (
        'name' => 'merge',
        'parameters' => 
        array (
          'annotations' => 
          array (
            'name' => 'annotations',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 27,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ignore' => 
          array (
            'name' => 'ignore',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 153,
                'endLine' => 153,
                'startTokenPos' => 690,
                'startFilePos' => 5297,
                'endTokenPos' => 690,
                'endFilePos' => 5301,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 47,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge given annotations to their mapped properties configured in static::$_nested.
 *
 * Annotations that couldn\'t be merged are added to the _unmerged array.
 *
 * @param list<AbstractAnnotation> $annotations
 * @param bool                     $ignore      Ignore unmerged annotations
 *
 * @return list<AbstractAnnotation> The unmerged annotations
 */',
        'startLine' => 153,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'mergeProperties' => 
      array (
        'name' => 'mergeProperties',
        'parameters' => 
        array (
          'object' => 
          array (
            'name' => 'object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge the properties from the given object into this annotation.
 * Prevents overwriting properties that are already configured.
 *
 * @param object $object
 */',
        'startLine' => 194,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'toYaml' => 
      array (
        'name' => 'toYaml',
        'parameters' => 
        array (
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 231,
                'endLine' => 231,
                'startTokenPos' => 1291,
                'startFilePos' => 8378,
                'endTokenPos' => 1291,
                'endFilePos' => 8381,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'int',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 231,
            'endLine' => 231,
            'startColumn' => 28,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generate the documentation in YAML format.
 *
 * @param int-mask-of<Yaml::PARSE_*>|null $flags A bit field of PARSE_* constants to customize the YAML parser behavior
 */',
        'startLine' => 231,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'toJson' => 
      array (
        'name' => 'toJson',
        'parameters' => 
        array (
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 243,
                'endLine' => 243,
                'startTokenPos' => 1372,
                'startFilePos' => 8734,
                'endTokenPos' => 1372,
                'endFilePos' => 8737,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'int',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 28,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generate the documentation in JSON format.
 */',
        'startLine' => 243,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      '__debugInfo' => 
      array (
        'name' => '__debugInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 252,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'stdClass',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 264,
        'endLine' => 417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'validateValueType' => 
      array (
        'name' => 'validateValueType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 54,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate a given value against a `_$type` definition.
 */',
        'startLine' => 422,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'analysis' => 
          array (
            'name' => 'analysis',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 464,
                'endLine' => 464,
                'startTokenPos' => 3287,
                'startFilePos' => 16689,
                'endTokenPos' => 3287,
                'endFilePos' => 16692,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'OpenApi\\Analysis',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 30,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'version' => 
          array (
            'name' => 'version',
            'default' => 
            array (
              'code' => '\\OpenApi\\Annotations\\OpenApi::DEFAULT_VERSION',
              'attributes' => 
              array (
                'startLine' => 464,
                'endLine' => 464,
                'startTokenPos' => 3296,
                'startFilePos' => 16713,
                'endTokenPos' => 3298,
                'endFilePos' => 16736,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 58,
            'endColumn' => 99,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'context' => 
          array (
            'name' => 'context',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 464,
                'endLine' => 464,
                'startTokenPos' => 3308,
                'startFilePos' => 16758,
                'endTokenPos' => 3308,
                'endFilePos' => 16761,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'object',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 102,
            'endColumn' => 124,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 464,
        'endLine' => 584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'identity' => 
      array (
        'name' => 'identity',
        'parameters' => 
        array (
          'properties' => 
          array (
            'name' => 'properties',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 592,
                'endLine' => 592,
                'startTokenPos' => 4825,
                'startFilePos' => 23386,
                'endTokenPos' => 4825,
                'endFilePos' => 23389,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 592,
            'endLine' => 592,
            'startColumn' => 30,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return a simple string representation of the annotation.
 *
 * @param array|null $properties the properties to include in the string representation
 * @example "@OA\\Response(response=200)"
 */',
        'startLine' => 592,
        'endLine' => 618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'matchNested' => 
      array (
        'name' => 'matchNested',
        'parameters' => 
        array (
          'other' => 
          array (
            'name' => 'other',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if <code>$other</code> can be nested, and if so, return details about where/how.
 *
 * @param AbstractAnnotation $other the other annotation
 *
 * @return null|object key/value object or <code>null</code>
 */',
        'startLine' => 627,
        'endLine' => 634,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'getRoot' => 
      array (
        'name' => 'getRoot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the root annotation.
 *
 * This is used for resolving type equality and nesting rules to allow those rules to also work for custom,
 * derived annotation classes.
 *
 * @return class-string the root annotation class in the <code>OpenApi\\\\Annotations</code> namespace
 */',
        'startLine' => 644,
        'endLine' => 655,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'isRoot' => 
      array (
        'name' => 'isRoot',
        'parameters' => 
        array (
          'thisClass' => 
          array (
            'name' => 'thisClass',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 662,
            'endLine' => 662,
            'startColumn' => 28,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Match the annotation root.
 *
 * @param class-string $thisClass the root class to match
 */',
        'startLine' => 662,
        'endLine' => 665,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'nested' => 
      array (
        'name' => 'nested',
        'parameters' => 
        array (
          'annotation' => 
          array (
            'name' => 'annotation',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'OpenApi\\Annotations\\AbstractAnnotation',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 670,
            'endLine' => 670,
            'startColumn' => 31,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'nestedContext' => 
          array (
            'name' => 'nestedContext',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'OpenApi\\Context',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 670,
            'endLine' => 670,
            'startColumn' => 63,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Wrap the context with a reference to the annotation it is nested in.
 */',
        'startLine' => 670,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'combine' => 
      array (
        'name' => 'combine',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 679,
            'endLine' => 679,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 679,
        'endLine' => 691,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
      'shorten' => 
      array (
        'name' => 'shorten',
        'parameters' => 
        array (
          'classes' => 
          array (
            'name' => 'classes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 700,
            'endLine' => 700,
            'startColumn' => 39,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Shorten class name(s).
 *
 * @param array|object|string $classes Class(es) to shorten
 *
 * @return string|list<string> One or more shortened class names
 */',
        'startLine' => 700,
        'endLine' => 711,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'OpenApi\\Annotations',
        'declaringClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'implementingClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'currentClassName' => 'OpenApi\\Annotations\\AbstractAnnotation',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));