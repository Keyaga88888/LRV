<?php declare(strict_types = 1);

// osfsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/CollectionDataTable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Yajra\DataTables\CollectionDataTable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-da527c57aecc00bf9682c5580b93026cfcef42904ad7aa6d0b8794d2bfc4a227-8.4.21-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Yajra\\DataTables\\CollectionDataTable',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/CollectionDataTable.php',
      ),
    ),
    'namespace' => 'Yajra\\DataTables',
    'name' => 'Yajra\\DataTables\\CollectionDataTable',
    'shortName' => 'CollectionDataTable',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 339,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Yajra\\DataTables\\DataTableAbstract',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'original' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'name' => 'original',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * Collection object.
 *
 * @var Collection<array-key, array>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'offset' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'name' => 'offset',
        'modifiers' => 4,
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
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 86,
            'startFilePos' => 655,
            'endTokenPos' => 86,
            'endFilePos' => 655,
          ),
        ),
        'docComment' => '/**
 * The offset of the first record in the full dataset.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'collection' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'name' => 'collection',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 33,
        'endColumn' => 61,
        'isPromoted' => true,
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
          'collection' => 
          array (
            'name' => 'collection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Support\\Collection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 33,
            'endColumn' => 61,
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
 * CollectionEngine constructor.
 *
 * @param  Collection<array-key, array>  $collection
 */',
        'startLine' => 35,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'serialize' => 
      array (
        'name' => 'serialize',
        'parameters' => 
        array (
          'collection' => 
          array (
            'name' => 'collection',
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 34,
            'endColumn' => 50,
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
 * Serialize collection.
 */',
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'canCreate' => 
      array (
        'name' => 'canCreate',
        'parameters' => 
        array (
          'source' => 
          array (
            'name' => 'source',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 38,
            'endColumn' => 44,
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
 * @param  mixed  $source
 * @return bool
 */',
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
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
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 35,
            'endColumn' => 41,
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
 * @param  AnonymousResourceCollection|array|Collection<array-key, array>  $source
 * @return static
 */',
        'startLine' => 68,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
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
 * Count results.
 */',
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'columnSearch' => 
      array (
        'name' => 'columnSearch',
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
 * Perform column search.
 */',
        'startLine' => 88,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'paging' => 
      array (
        'name' => 'paging',
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
 * Perform pagination.
 */',
        'startLine' => 132,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'mDataSupport' => 
          array (
            'name' => 'mDataSupport',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 740,
                'startFilePos' => 3881,
                'endTokenPos' => 740,
                'endFilePos' => 3884,
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 26,
            'endColumn' => 50,
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
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Organizes works.
 *
 * @throws Exception
 */',
        'startLine' => 145,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'results' => 
      array (
        'name' => 'results',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get results.
 *
 * @return Collection<array-key, array>
 */',
        'startLine' => 176,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'revertIndexColumn' => 
      array (
        'name' => 'revertIndexColumn',
        'parameters' => 
        array (
          'mDataSupport' => 
          array (
            'name' => 'mDataSupport',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 186,
            'endLine' => 186,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Revert transformed DT_RowIndex back to its original values.
 *
 * @param  bool  $mDataSupport
 */',
        'startLine' => 186,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'getIndexColumnEdits' => 
      array (
        'name' => 'getIndexColumnEdits',
        'parameters' => 
        array (
          'indexColumn' => 
          array (
            'name' => 'indexColumn',
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
            'startLine' => 212,
            'endLine' => 212,
            'startColumn' => 42,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get edit templates/callbacks registered for the index column.
 */',
        'startLine' => 212,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'setOffset' => 
      array (
        'name' => 'setOffset',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
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
            'startLine' => 231,
            'endLine' => 231,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define the offset of the first item of the collection with respect to
 * the FULL dataset the collection was sliced from. It effectively allows the
 * collection to be "pre-sliced".
 *
 * @return static
 */',
        'startLine' => 231,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
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
            'startLine' => 241,
            'endLine' => 241,
            'startColumn' => 37,
            'endColumn' => 51,
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
        'startLine' => 241,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
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
        'startLine' => 271,
        'endLine' => 289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'getSorter' => 
      array (
        'name' => 'getSorter',
        'parameters' => 
        array (
          'criteria' => 
          array (
            'name' => 'criteria',
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
            'startLine' => 294,
            'endLine' => 294,
            'startColumn' => 34,
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
            'name' => 'Closure',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get array sorter closure.
 */',
        'startLine' => 294,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'aliasName' => NULL,
      ),
      'resolveCallbackParameter' => 
      array (
        'name' => 'resolveCallbackParameter',
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
 * Resolve callback parameter instance.
 *
 * @return array<int|string, mixed>
 */',
        'startLine' => 335,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\CollectionDataTable',
        'currentClassName' => 'Yajra\\DataTables\\CollectionDataTable',
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