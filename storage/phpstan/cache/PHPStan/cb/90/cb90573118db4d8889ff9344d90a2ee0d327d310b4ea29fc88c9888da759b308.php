<?php declare(strict_types = 1);

// osfsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/EloquentDataTable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Yajra\DataTables\EloquentDataTable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4ca6e1e328f7e734bc9cda791d15cf1128da4cf0409d25cbe5e979ddbbca47e2-8.4.21-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Yajra\\DataTables\\EloquentDataTable',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle/src/EloquentDataTable.php',
      ),
    ),
    'namespace' => 'Yajra\\DataTables',
    'name' => 'Yajra\\DataTables\\EloquentDataTable',
    'shortName' => 'EloquentDataTable',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property EloquentBuilder $query
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 315,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Yajra\\DataTables\\QueryDataTable',
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
      'enableEagerJoinAliases' => 
      array (
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'name' => 'enableEagerJoinAliases',
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
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 78,
            'startFilePos' => 900,
            'endTokenPos' => 78,
            'endFilePos' => 904,
          ),
        ),
        'docComment' => '/**
 * Flag to enable the generation of unique table aliases on eagerly loaded join columns.
 * You may want to enable it if you encounter a "Not unique table/alias" error when performing a search or applying ordering.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 51,
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
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
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
                      'name' => 'Illuminate\\Database\\Eloquent\\Model',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
                      'isIdentifier' => false,
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
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 33,
            'endColumn' => 60,
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
 * EloquentEngine constructor.
 */',
        'startLine' => 29,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
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
            'startLine' => 47,
            'endLine' => 47,
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
 * Can the DataTable engine be created with these parameters.
 *
 * @param  mixed  $source
 */',
        'startLine' => 47,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'addColumns' => 
      array (
        'name' => 'addColumns',
        'parameters' => 
        array (
          'names' => 
          array (
            'name' => 'names',
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
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
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 223,
                'startFilePos' => 1742,
                'endTokenPos' => 223,
                'endFilePos' => 1746,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add columns in collection.
 *
 * @param  bool|int  $order
 * @return $this
 */',
        'startLine' => 58,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
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
        'startLine' => 74,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'compileQuerySearch' => 
      array (
        'name' => 'compileQuerySearch',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 51,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 67,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'or\'',
              'attributes' => 
              array (
                'startLine' => 82,
                'endLine' => 82,
                'startTokenPos' => 371,
                'startFilePos' => 2390,
                'endTokenPos' => 371,
                'endFilePos' => 2393,
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 84,
            'endColumn' => 105,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'nested' => 
          array (
            'name' => 'nested',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 82,
                'endLine' => 82,
                'startTokenPos' => 380,
                'startFilePos' => 2411,
                'endTokenPos' => 380,
                'endFilePos' => 2415,
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
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 108,
            'endColumn' => 127,
            'parameterIndex' => 4,
            'isOptional' => true,
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
 * {@inheritDoc}
 */',
        'startLine' => 82,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'isNotEagerLoaded' => 
      array (
        'name' => 'isNotEagerLoaded',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 41,
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
        'docComment' => '/**
 * Check if a relation was not used on eager loading.
 *
 * @param  string  $relation
 * @return bool
 */',
        'startLine' => 137,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'isMorphRelation' => 
      array (
        'name' => 'isMorphRelation',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 40,
            'endColumn' => 48,
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
 * Check if a relation is a morphed one or not.
 *
 * @param  string  $relation
 * @return bool
 */',
        'startLine' => 150,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'resolveRelationColumn' => 
      array (
        'name' => 'resolveRelationColumn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
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
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 46,
            'endColumn' => 59,
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
 * {@inheritDoc}
 *
 * @throws Exception
 */',
        'startLine' => 168,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'joinEagerLoadedColumn' => 
      array (
        'name' => 'joinEagerLoadedColumn',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relationColumn' => 
          array (
            'name' => 'relationColumn',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 190,
            'endLine' => 190,
            'startColumn' => 57,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Join eager loaded relation and get the related column name.
 *
 * @param  string  $relation
 * @param  string  $relationColumn
 * @return string
 *
 * @throws Exception
 */',
        'startLine' => 190,
        'endLine' => 280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'enableEagerJoinAliases' => 
      array (
        'name' => 'enableEagerJoinAliases',
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
 * Enable the generation of unique table aliases on eagerly loaded join columns.
 * You may want to enable it if you encounter a "Not unique table/alias" error when performing a search or applying ordering.
 *
 * @return $this
 */',
        'startLine' => 288,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'aliasName' => NULL,
      ),
      'performJoin' => 
      array (
        'name' => 'performJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreign' => 
          array (
            'name' => 'foreign',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 44,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'left\'',
              'attributes' => 
              array (
                'startLine' => 303,
                'endLine' => 303,
                'startTokenPos' => 1984,
                'startFilePos' => 10779,
                'endTokenPos' => 1984,
                'endFilePos' => 10784,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 62,
            'endColumn' => 75,
            'parameterIndex' => 3,
            'isOptional' => true,
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
 * Perform join query.
 *
 * @param  string  $table
 * @param  string  $foreign
 * @param  string  $other
 * @param  string  $type
 */',
        'startLine' => 303,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Yajra\\DataTables',
        'declaringClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'implementingClassName' => 'Yajra\\DataTables\\EloquentDataTable',
        'currentClassName' => 'Yajra\\DataTables\\EloquentDataTable',
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