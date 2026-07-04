<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Repositories\SalaryRepository
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-330e522caf73ec5462040818b33e04989a6911f0fe335f95e4ab3522bc986203',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php',
      ),
    ),
    'namespace' => 'Modules\\Salary\\App\\Repositories',
    'name' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
    'shortName' => 'SalaryRepository',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * ==========================================================
 * REPOSITORY
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Toàn bộ thao tác DB.
 *
 * Service KHÔNG query DB.
 *
 * Controller KHÔNG query DB.
 *
 * Chỉ Repository được query DB.
 *
 *
 * FLOW:
 *
 * Controller
 *      ↓
 * Service
 *      ↓
 * Repository
 *      ↓
 * Model
 *      ↓
 * MySQL
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 93,
    'endLine' => 158,
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
      'getDataForTable' => 
      array (
        'name' => 'getDataForTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * ======================================================
 * DATATABLE QUERY
 * ======================================================
 *
 * dùng cho:
 *
 * SalaryService
 *      ↓
 * DataTable
 */',
        'startLine' => 106,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Repositories',
        'declaringClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'implementingClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'currentClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
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
            'startLine' => 119,
            'endLine' => 119,
            'startColumn' => 28,
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
 * ======================================================
 * CREATE
 * ======================================================
 */',
        'startLine' => 119,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Repositories',
        'declaringClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'implementingClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'currentClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 28,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 33,
            'endColumn' => 43,
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
 * ======================================================
 * UPDATE
 * ======================================================
 */',
        'startLine' => 134,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Repositories',
        'declaringClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'implementingClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'currentClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'aliasName' => NULL,
      ),
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 26,
            'endColumn' => 28,
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
 * ======================================================
 * FIND
 * ======================================================
 */',
        'startLine' => 144,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Repositories',
        'declaringClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'implementingClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'currentClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 28,
            'endColumn' => 30,
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
 * ======================================================
 * DELETE
 * ======================================================
 */',
        'startLine' => 154,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Repositories',
        'declaringClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'implementingClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        'currentClassName' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
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