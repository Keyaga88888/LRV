<?php declare(strict_types = 1);

// osfsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/Contracts/DataTable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Yajra\DataTables\Contracts\DataTable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5fb325eb58dd1ccc028050abb7dd525bd87e076d1f3c82377b1bc03908a335a4-8.4.21-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/Contracts/DataTable.php',
      ),
    ),
    'namespace' => 'Yajra\\DataTables\\Contracts',
    'name' => 'Yajra\\DataTables\\Contracts\\DataTable',
    'shortName' => 'DataTable',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 59,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
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
    ),
    'immediateMethods' => 
    array (
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
 * @return Collection<int, \\stdClass>|Collection<array-key, array>
 */',
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
            'startLine' => 33,
            'endLine' => 33,
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
                'startLine' => 33,
                'endLine' => 33,
                'startTokenPos' => 84,
                'startFilePos' => 648,
                'endTokenPos' => 84,
                'endFilePos' => 652,
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
            'startLine' => 33,
            'endLine' => 33,
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
 * @return static
 */',
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 81,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 161,
                'startFilePos' => 1094,
                'endTokenPos' => 161,
                'endFilePos' => 1097,
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
            'startLine' => 58,
            'endLine' => 58,
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
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables\\Contracts',
        'declaringClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'implementingClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
        'currentClassName' => 'Yajra\\DataTables\\Contracts\\DataTable',
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