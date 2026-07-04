<?php declare(strict_types = 1);

// osfsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/DataTableAbstract.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Yajra\DataTables\DataTableAbstract
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-75d78f06fab1b84eb7d7a234b452ca9b873e74445f095d4b720168033e71bb14-8.4.21-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Yajra\\DataTables\\DataTableAbstract',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/DataTableAbstract.php',
      ),
    ),
    'namespace' => 'Yajra\\DataTables',
    'name' => 'Yajra\\DataTables\\DataTableAbstract',
    'shortName' => 'DataTableAbstract',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * @method static setTransformer($transformer)
 * @method static setSerializer($transformer)
 *
 * @property-read mixed $transformer
 * @property-read mixed $serializer
 *
 * @see https://github.com/yajra/laravel-datatables-fractal for transformer related methods.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 1035,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Yajra\\DataTables\\Contracts\\DataTable',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'request' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'request',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Yajra\\DataTables\\Utilities\\Request',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * DataTables Request object.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logger' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'logger',
        'modifiers' => 2,
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
                  'name' => 'Psr\\Log\\LoggerInterface',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 99,
            'startFilePos' => 921,
            'endTokenPos' => 99,
            'endFilePos' => 924,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'columns' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'columns',
        'modifiers' => 2,
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
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 113,
            'startFilePos' => 1015,
            'endTokenPos' => 114,
            'endFilePos' => 1016,
          ),
        ),
        'docComment' => '/**
 * Array of result columns/fields.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'columnDef' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'columnDef',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[\'index\' => false, \'ignore_getters\' => false, \'append\' => [], \'edit\' => [], \'filter\' => [], \'order\' => [], \'only\' => null, \'hidden\' => [], \'visible\' => []]',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 55,
            'startTokenPos' => 127,
            'startFilePos' => 1148,
            'endTokenPos' => 198,
            'endFilePos' => 1381,
          ),
        ),
        'docComment' => '/**
 * DT columns definitions container (add/edit/remove/filter/order/escape).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'extraColumns' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'extraColumns',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 211,
            'startFilePos' => 1465,
            'endTokenPos' => 212,
            'endFilePos' => 1466,
          ),
        ),
        'docComment' => '/**
 * Extra/Added columns.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'totalRecords' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'totalRecords',
        'modifiers' => 2,
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 226,
            'startFilePos' => 1543,
            'endTokenPos' => 226,
            'endFilePos' => 1546,
          ),
        ),
        'docComment' => '/**
 * Total records.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filteredRecords' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'filteredRecords',
        'modifiers' => 2,
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 240,
            'startFilePos' => 1635,
            'endTokenPos' => 240,
            'endFilePos' => 1638,
          ),
        ),
        'docComment' => '/**
 * Total filtered records.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'skipTotalRecords' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'skipTotalRecords',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 253,
            'startFilePos' => 1764,
            'endTokenPos' => 253,
            'endFilePos' => 1768,
          ),
        ),
        'docComment' => '/**
 * Flag to check if the total records count should be skipped.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoFilter' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'autoFilter',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 266,
            'startFilePos' => 1846,
            'endTokenPos' => 266,
            'endFilePos' => 1849,
          ),
        ),
        'docComment' => '/**
 * Auto-filter flag.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filterCallback' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'filterCallback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 277,
            'startFilePos' => 1972,
            'endTokenPos' => 277,
            'endFilePos' => 1975,
          ),
        ),
        'docComment' => '/**
 * Callback to override global search.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'templates' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'templates',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[\'DT_RowId\' => \'\', \'DT_RowClass\' => \'\', \'DT_RowData\' => [], \'DT_RowAttr\' => []]',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 97,
            'startTokenPos' => 290,
            'startFilePos' => 2063,
            'endTokenPos' => 322,
            'endFilePos' => 2180,
          ),
        ),
        'docComment' => '/**
 * DT row templates container.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'orderCallback' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'orderCallback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 104,
            'endLine' => 104,
            'startTokenPos' => 333,
            'startFilePos' => 2297,
            'endTokenPos' => 333,
            'endFilePos' => 2300,
          ),
        ),
        'docComment' => '/**
 * Custom ordering callback.
 *
 * @var callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'skipPaging' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'skipPaging',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 109,
            'endLine' => 109,
            'startTokenPos' => 346,
            'startFilePos' => 2387,
            'endTokenPos' => 346,
            'endFilePos' => 2391,
          ),
        ),
        'docComment' => '/**
 * Skip pagination as needed.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'appends' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'appends',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 114,
            'endLine' => 114,
            'startTokenPos' => 359,
            'startFilePos' => 2491,
            'endTokenPos' => 360,
            'endFilePos' => 2492,
          ),
        ),
        'docComment' => '/**
 * Array of data to append on json response.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'config',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Yajra\\DataTables\\Utilities\\Config',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'serializer' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'serializer',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'searchPanes' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'searchPanes',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 120,
            'endLine' => 120,
            'startTokenPos' => 385,
            'startFilePos' => 2606,
            'endTokenPos' => 386,
            'endFilePos' => 2607,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transformer' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'transformer',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'editOnlySelectedColumns' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'editOnlySelectedColumns',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 124,
            'endLine' => 124,
            'startTokenPos' => 404,
            'startFilePos' => 2692,
            'endTokenPos' => 404,
            'endFilePos' => 2696,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 52,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'minSearchLength' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'name' => 'minSearchLength',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 415,
            'startFilePos' => 2737,
            'endTokenPos' => 415,
            'endFilePos' => 2737,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 39,
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
      'canCreate' => 
      array (
        'name' => 'canCreate',
        'parameters' => 
        array (
          'source' => 
          array (
            'name' => 'source',
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
            'startLine' => 133,
            'endLine' => 133,
            'startColumn' => 38,
            'endColumn' => 50,
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
 * Can the DataTable engine be created with these parameters.
 *
 * @return bool
 */',
        'startLine' => 133,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'source' => 
          array (
            'name' => 'source',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Factory method, create and return an instance for the DataTable engine.
 *
 * @return static
 */',
        'startLine' => 143,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'formatColumn' => 
      array (
        'name' => 'formatColumn',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'formatter' => 
          array (
            'name' => 'formatter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 44,
            'endColumn' => 53,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param  string|array  $columns
 * @param  string|callable|Formatter  $formatter
 * @return $this
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
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'addColumn' => 
      array (
        'name' => 'addColumn',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 31,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'content' => 
          array (
            'name' => 'content',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'order' => 
          array (
            'name' => 'order',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 196,
                'endLine' => 196,
                'startTokenPos' => 707,
                'startFilePos' => 4475,
                'endTokenPos' => 707,
                'endFilePos' => 4479,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 48,
            'endColumn' => 61,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add column in collection.
 *
 * @param  string  $name
 * @param  string|callable|Formatter  $content
 * @param  bool|int  $order
 * @return $this
 */',
        'startLine' => 196,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'addIndexColumn' => 
      array (
        'name' => 'addIndexColumn',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add DT row index column on response.
 *
 * @return $this
 */',
        'startLine' => 210,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'ignoreGetters' => 
      array (
        'name' => 'ignoreGetters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prevent the getters Mutators to be applied when converting a collection
 * of the Models into the final JSON.
 *
 * @return $this
 */',
        'startLine' => 223,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'editColumn' => 
      array (
        'name' => 'editColumn',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'content' => 
          array (
            'name' => 'content',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 39,
            'endColumn' => 46,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Edit column\'s content.
 *
 * @param  string  $name
 * @param  string|callable  $content
 * @return $this
 */',
        'startLine' => 237,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'removeColumn' => 
      array (
        'name' => 'removeColumn',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove column from collection.
 *
 * @return $this
 */',
        'startLine' => 255,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'getColumnsDefinition' => 
      array (
        'name' => 'getColumnsDefinition',
        'parameters' => 
        array (
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
 * Get columns definition.
 */',
        'startLine' => 266,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'only' => 
      array (
        'name' => 'only',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 279,
                'endLine' => 279,
                'startTokenPos' => 1123,
                'startFilePos' => 6556,
                'endTokenPos' => 1124,
                'endFilePos' => 6557,
              ),
            ),
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
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 26,
            'endColumn' => 44,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get only selected columns in response.
 *
 * @return $this
 */',
        'startLine' => 279,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'escapeColumns' => 
      array (
        'name' => 'escapeColumns',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '\'*\'',
              'attributes' => 
              array (
                'startLine' => 292,
                'endLine' => 292,
                'startTokenPos' => 1163,
                'startFilePos' => 6817,
                'endTokenPos' => 1163,
                'endFilePos' => 6819,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 292,
            'endLine' => 292,
            'startColumn' => 35,
            'endColumn' => 48,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Declare columns to escape values.
 *
 * @param  string|array  $columns
 * @return $this
 */',
        'startLine' => 292,
        'endLine' => 297,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'makeHidden' => 
      array (
        'name' => 'makeHidden',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 304,
                'endLine' => 304,
                'startTokenPos' => 1204,
                'startFilePos' => 7053,
                'endTokenPos' => 1205,
                'endFilePos' => 7054,
              ),
            ),
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
            'startLine' => 304,
            'endLine' => 304,
            'startColumn' => 32,
            'endColumn' => 53,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a makeHidden() to the row object.
 *
 * @return $this
 */',
        'startLine' => 304,
        'endLine' => 310,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'makeVisible' => 
      array (
        'name' => 'makeVisible',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 317,
                'endLine' => 317,
                'startTokenPos' => 1275,
                'startFilePos' => 7393,
                'endTokenPos' => 1276,
                'endFilePos' => 7394,
              ),
            ),
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
            'startLine' => 317,
            'endLine' => 317,
            'startColumn' => 33,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a makeVisible() to the row object.
 *
 * @return $this
 */',
        'startLine' => 317,
        'endLine' => 323,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'rawColumns' => 
      array (
        'name' => 'rawColumns',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'merge' => 
          array (
            'name' => 'merge',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 332,
                'endLine' => 332,
                'startTokenPos' => 1349,
                'startFilePos' => 7820,
                'endTokenPos' => 1349,
                'endFilePos' => 7824,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 48,
            'endColumn' => 61,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set columns that should not be escaped.
 * Optionally merge the defaults from config.
 *
 * @param  bool  $merge
 * @return $this
 */',
        'startLine' => 332,
        'endLine' => 344,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setRowClass' => 
      array (
        'name' => 'setRowClass',
        'parameters' => 
        array (
          'content' => 
          array (
            'name' => 'content',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 33,
            'endColumn' => 40,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets DT_RowClass template.
 * result: <tr class="output_from_your_template">.
 *
 * @param  string|callable  $content
 * @return $this
 */',
        'startLine' => 353,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setRowId' => 
      array (
        'name' => 'setRowId',
        'parameters' => 
        array (
          'content' => 
          array (
            'name' => 'content',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 30,
            'endColumn' => 37,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets DT_RowId template.
 * result: <tr id="output_from_your_template">.
 *
 * @param  string|callable  $content
 * @return $this
 */',
        'startLine' => 367,
        'endLine' => 372,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setRowData' => 
      array (
        'name' => 'setRowData',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 379,
            'endLine' => 379,
            'startColumn' => 32,
            'endColumn' => 42,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set DT_RowData templates.
 *
 * @return $this
 */',
        'startLine' => 379,
        'endLine' => 384,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'addRowData' => 
      array (
        'name' => 'addRowData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 393,
            'endLine' => 393,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 393,
            'endLine' => 393,
            'startColumn' => 38,
            'endColumn' => 43,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add DT_RowData template.
 *
 * @param  string  $key
 * @param  string|callable  $value
 * @return $this
 */',
        'startLine' => 393,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setRowAttr' => 
      array (
        'name' => 'setRowAttr',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 406,
            'endLine' => 406,
            'startColumn' => 32,
            'endColumn' => 42,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set DT_RowAttr templates.
 * result: <tr attr1="attr1" attr2="attr2">.
 *
 * @return $this
 */',
        'startLine' => 406,
        'endLine' => 411,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'addRowAttr' => 
      array (
        'name' => 'addRowAttr',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 420,
            'endLine' => 420,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 420,
            'endLine' => 420,
            'startColumn' => 38,
            'endColumn' => 43,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add DT_RowAttr template.
 *
 * @param  string  $key
 * @param  string|callable  $value
 * @return $this
 */',
        'startLine' => 420,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'with' => 
      array (
        'name' => 'with',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 432,
                'endLine' => 432,
                'startTokenPos' => 1674,
                'startFilePos' => 9944,
                'endTokenPos' => 1674,
                'endFilePos' => 9945,
              ),
            ),
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 38,
            'endColumn' => 54,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Append data on json response.
 *
 * @return $this
 */',
        'startLine' => 432,
        'endLine' => 443,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'withQuery' => 
      array (
        'name' => 'withQuery',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 450,
            'endLine' => 450,
            'startColumn' => 31,
            'endColumn' => 41,
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
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 450,
            'endLine' => 450,
            'startColumn' => 44,
            'endColumn' => 58,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add with query callback value on response.
 *
 * @return $this
 */',
        'startLine' => 450,
        'endLine' => 455,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'order' => 
      array (
        'name' => 'order',
        'parameters' => 
        array (
          'closure' => 
          array (
            'name' => 'closure',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 462,
            'endLine' => 462,
            'startColumn' => 27,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Override default ordering method with a closure callback.
 *
 * @return $this
 */',
        'startLine' => 462,
        'endLine' => 467,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'blacklist' => 
      array (
        'name' => 'blacklist',
        'parameters' => 
        array (
          'blacklist' => 
          array (
            'name' => 'blacklist',
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
            'startLine' => 474,
            'endLine' => 474,
            'startColumn' => 31,
            'endColumn' => 46,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update list of columns that is not allowed for search/sort.
 *
 * @return $this
 */',
        'startLine' => 474,
        'endLine' => 479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'whitelist' => 
      array (
        'name' => 'whitelist',
        'parameters' => 
        array (
          'whitelist' => 
          array (
            'name' => 'whitelist',
            'default' => 
            array (
              'code' => '\'*\'',
              'attributes' => 
              array (
                'startLine' => 486,
                'endLine' => 486,
                'startTokenPos' => 1890,
                'startFilePos' => 11158,
                'endTokenPos' => 1890,
                'endFilePos' => 11160,
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
                      'name' => 'string',
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
            'startLine' => 486,
            'endLine' => 486,
            'startColumn' => 31,
            'endColumn' => 59,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update list of columns that is allowed for search/sort.
 *
 * @return $this
 */',
        'startLine' => 486,
        'endLine' => 491,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'smart' => 
      array (
        'name' => 'smart',
        'parameters' => 
        array (
          'state' => 
          array (
            'name' => 'state',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 498,
                'endLine' => 498,
                'startTokenPos' => 1931,
                'startFilePos' => 11386,
                'endTokenPos' => 1931,
                'endFilePos' => 11389,
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
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 27,
            'endColumn' => 44,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set smart search config at runtime.
 *
 * @return $this
 */',
        'startLine' => 498,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'startsWithSearch' => 
      array (
        'name' => 'startsWithSearch',
        'parameters' => 
        array (
          'state' => 
          array (
            'name' => 'state',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 510,
                'endLine' => 510,
                'startTokenPos' => 1973,
                'startFilePos' => 11643,
                'endTokenPos' => 1973,
                'endFilePos' => 11646,
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
            'startLine' => 510,
            'endLine' => 510,
            'startColumn' => 38,
            'endColumn' => 55,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set starts_with search config at runtime.
 *
 * @return $this
 */',
        'startLine' => 510,
        'endLine' => 515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setMultiTerm' => 
      array (
        'name' => 'setMultiTerm',
        'parameters' => 
        array (
          'multiTerm' => 
          array (
            'name' => 'multiTerm',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 522,
                'endLine' => 522,
                'startTokenPos' => 2015,
                'startFilePos' => 11905,
                'endTokenPos' => 2015,
                'endFilePos' => 11908,
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
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 34,
            'endColumn' => 55,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set multi_term search config at runtime.
 *
 * @return $this
 */',
        'startLine' => 522,
        'endLine' => 527,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setTotalRecords' => 
      array (
        'name' => 'setTotalRecords',
        'parameters' => 
        array (
          'total' => 
          array (
            'name' => 'total',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 534,
            'endLine' => 534,
            'startColumn' => 37,
            'endColumn' => 46,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set total records manually.
 *
 * @return $this
 */',
        'startLine' => 534,
        'endLine' => 539,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'skipTotalRecords' => 
      array (
        'name' => 'skipTotalRecords',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Skip total records and set the recordsTotal equals to recordsFiltered.
 * This will improve the performance by skipping the total count query.
 *
 * @return $this
 */',
        'startLine' => 547,
        'endLine' => 553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setFilteredRecords' => 
      array (
        'name' => 'setFilteredRecords',
        'parameters' => 
        array (
          'total' => 
          array (
            'name' => 'total',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 560,
            'endLine' => 560,
            'startColumn' => 40,
            'endColumn' => 49,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set filtered records manually.
 *
 * @return $this
 */',
        'startLine' => 560,
        'endLine' => 565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'skipPaging' => 
      array (
        'name' => 'skipPaging',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Skip pagination as needed.
 *
 * @return $this
 */',
        'startLine' => 572,
        'endLine' => 577,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'skipAutoFilter' => 
      array (
        'name' => 'skipAutoFilter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Skip auto filtering as needed.
 *
 * @return $this
 */',
        'startLine' => 584,
        'endLine' => 589,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'pushToBlacklist' => 
      array (
        'name' => 'pushToBlacklist',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 597,
            'endLine' => 597,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push a new column name to blacklist.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 597,
        'endLine' => 604,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'isBlacklisted' => 
      array (
        'name' => 'isBlacklisted',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 611,
            'endLine' => 611,
            'startColumn' => 38,
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
 * Check if column is blacklisted.
 *
 * @param  string  $column
 */',
        'startLine' => 611,
        'endLine' => 624,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'ordering' => 
      array (
        'name' => 'ordering',
        'parameters' => 
        array (
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
 * Perform sorting of columns.
 */',
        'startLine' => 629,
        'endLine' => 636,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'resolveCallbackParameter' => 
      array (
        'name' => 'resolveCallbackParameter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve callback parameter instance.
 *
 * @return array<int|string, mixed>
 */',
        'startLine' => 643,
        'endLine' => 643,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'defaultOrdering' => 
      array (
        'name' => 'defaultOrdering',
        'parameters' => 
        array (
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
 * Perform default query orderBy clause.
 */',
        'startLine' => 648,
        'endLine' => 648,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'filter' => 
      array (
        'name' => 'filter',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 656,
            'endLine' => 656,
            'startColumn' => 28,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'globalSearch' => 
          array (
            'name' => 'globalSearch',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 656,
                'endLine' => 656,
                'startTokenPos' => 2465,
                'startFilePos' => 14735,
                'endTokenPos' => 2465,
                'endFilePos' => 14739,
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
            'startLine' => 656,
            'endLine' => 656,
            'startColumn' => 48,
            'endColumn' => 73,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set auto filter off and run your own filter.
 * Overrides global search.
 *
 * @return $this
 */',
        'startLine' => 656,
        'endLine' => 662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'toJson' => 
      array (
        'name' => 'toJson',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 670,
                'endLine' => 670,
                'startTokenPos' => 2510,
                'startFilePos' => 15042,
                'endTokenPos' => 2510,
                'endFilePos' => 15042,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 670,
            'endLine' => 670,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the object to its JSON representation.
 *
 * @param  int  $options
 * @return JsonResponse
 */',
        'startLine' => 670,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'searchPane' => 
      array (
        'name' => 'searchPane',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'builder' => 
          array (
            'name' => 'builder',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 685,
                'endLine' => 685,
                'startTokenPos' => 2572,
                'startFilePos' => 15390,
                'endTokenPos' => 2572,
                'endFilePos' => 15393,
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
                      'name' => 'callable',
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
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 57,
            'endColumn' => 81,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a search pane options on response.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 685,
        'endLine' => 697,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
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
 * Convert instance to array.
 */',
        'startLine' => 702,
        'endLine' => 705,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'totalCount' => 
      array (
        'name' => 'totalCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Count total items.
 */',
        'startLine' => 710,
        'endLine' => 713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'editOnlySelectedColumns' => 
      array (
        'name' => 'editOnlySelectedColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 715,
        'endLine' => 720,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'filterRecords' => 
      array (
        'name' => 'filterRecords',
        'parameters' => 
        array (
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
 * Perform necessary filters.
 */',
        'startLine' => 725,
        'endLine' => 739,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'columnControlSearch' => 
      array (
        'name' => 'columnControlSearch',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 741,
        'endLine' => 744,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'filtering' => 
      array (
        'name' => 'filtering',
        'parameters' => 
        array (
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
 * Perform global search.
 */',
        'startLine' => 749,
        'endLine' => 760,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'smartGlobalSearch' => 
      array (
        'name' => 'smartGlobalSearch',
        'parameters' => 
        array (
          'keyword' => 
          array (
            'name' => 'keyword',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 768,
            'endLine' => 768,
            'startColumn' => 42,
            'endColumn' => 49,
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
 * Perform multi-term search by splitting keyword into
 * individual words and searches for each of them.
 *
 * @param  string  $keyword
 */',
        'startLine' => 768,
        'endLine' => 775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'globalSearch' => 
      array (
        'name' => 'globalSearch',
        'parameters' => 
        array (
          'keyword' => 
          array (
            'name' => 'keyword',
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
            'startLine' => 780,
            'endLine' => 780,
            'startColumn' => 46,
            'endColumn' => 60,
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
 * Perform global search for the given keyword.
 */',
        'startLine' => 780,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'searchPanesSearch' => 
      array (
        'name' => 'searchPanesSearch',
        'parameters' => 
        array (
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
 * Perform search using search pane values.
 */',
        'startLine' => 785,
        'endLine' => 788,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'filteredCount' => 
      array (
        'name' => 'filteredCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Count filtered items.
 */',
        'startLine' => 793,
        'endLine' => 796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
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
 * Apply pagination.
 */',
        'startLine' => 801,
        'endLine' => 806,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'transform' => 
      array (
        'name' => 'transform',
        'parameters' => 
        array (
          'results' => 
          array (
            'name' => 'results',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 814,
            'endLine' => 814,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'processed' => 
          array (
            'name' => 'processed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 814,
            'endLine' => 814,
            'startColumn' => 44,
            'endColumn' => 53,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Transform output.
 *
 * @param  iterable  $results
 * @param  array  $processed
 */',
        'startLine' => 814,
        'endLine' => 825,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'processResults' => 
      array (
        'name' => 'processResults',
        'parameters' => 
        array (
          'results' => 
          array (
            'name' => 'results',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 835,
            'endLine' => 835,
            'startColumn' => 39,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'object' => 
          array (
            'name' => 'object',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 835,
                'endLine' => 835,
                'startTokenPos' => 3222,
                'startFilePos' => 18922,
                'endTokenPos' => 3222,
                'endFilePos' => 18926,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 835,
            'endLine' => 835,
            'startColumn' => 49,
            'endColumn' => 63,
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
 * Get processed data.
 *
 * @param  iterable  $results
 * @param  bool  $object
 *
 * @throws \\Exception
 */',
        'startLine' => 835,
        'endLine' => 845,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 850,
            'endLine' => 850,
            'startColumn' => 31,
            'endColumn' => 41,
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
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Render json response.
 */',
        'startLine' => 850,
        'endLine' => 873,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'attachAppends' => 
      array (
        'name' => 'attachAppends',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 878,
            'endLine' => 878,
            'startColumn' => 38,
            'endColumn' => 48,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attach custom with meta on response.
 */',
        'startLine' => 878,
        'endLine' => 881,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'showDebugger' => 
      array (
        'name' => 'showDebugger',
        'parameters' => 
        array (
          'output' => 
          array (
            'name' => 'output',
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
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 37,
            'endColumn' => 49,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Append debug parameters on output.
 */',
        'startLine' => 886,
        'endLine' => 891,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'errorResponse' => 
      array (
        'name' => 'errorResponse',
        'parameters' => 
        array (
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Exception',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 898,
            'endLine' => 898,
            'startColumn' => 38,
            'endColumn' => 58,
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
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return an error json response.
 *
 * @throws Exceptions\\Exception|\\Exception
 */',
        'startLine' => 898,
        'endLine' => 917,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'getLogger' => 
      array (
        'name' => 'getLogger',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get monolog/logger instance.
 *
 * @return LoggerInterface
 */',
        'startLine' => 924,
        'endLine' => 929,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setLogger' => 
      array (
        'name' => 'setLogger',
        'parameters' => 
        array (
          'logger' => 
          array (
            'name' => 'logger',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Log\\LoggerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 936,
            'endLine' => 936,
            'startColumn' => 31,
            'endColumn' => 53,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set monolog/logger instance.
 *
 * @return $this
 */',
        'startLine' => 936,
        'endLine' => 941,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'setupKeyword' => 
      array (
        'name' => 'setupKeyword',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 946,
            'endLine' => 946,
            'startColumn' => 37,
            'endColumn' => 49,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Setup search keyword.
 */',
        'startLine' => 946,
        'endLine' => 959,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'getColumnName' => 
      array (
        'name' => 'getColumnName',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 964,
            'endLine' => 964,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'wantsAlias' => 
          array (
            'name' => 'wantsAlias',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 964,
                'endLine' => 964,
                'startTokenPos' => 3890,
                'startFilePos' => 22218,
                'endTokenPos' => 3890,
                'endFilePos' => 22222,
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
            'startLine' => 964,
            'endLine' => 964,
            'startColumn' => 50,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'string',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get column name to be used for filtering and sorting.
 */',
        'startLine' => 964,
        'endLine' => 992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'getColumnNameByIndex' => 
      array (
        'name' => 'getColumnNameByIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 997,
            'endLine' => 997,
            'startColumn' => 45,
            'endColumn' => 54,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get column name by order column index.
 */',
        'startLine' => 997,
        'endLine' => 1004,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'getPrimaryKeyName' => 
      array (
        'name' => 'getPrimaryKeyName',
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
 * If column name could not be resolved then use primary key.
 */',
        'startLine' => 1009,
        'endLine' => 1012,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'minSearchLength' => 
      array (
        'name' => 'minSearchLength',
        'parameters' => 
        array (
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1014,
            'endLine' => 1014,
            'startColumn' => 37,
            'endColumn' => 47,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1014,
        'endLine' => 1019,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'aliasName' => NULL,
      ),
      'validateMinLengthSearch' => 
      array (
        'name' => 'validateMinLengthSearch',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 1021,
        'endLine' => 1034,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'implementingClassName' => 'Yajra\\DataTables\\DataTableAbstract',
        'currentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
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