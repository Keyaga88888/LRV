<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Services\SalaryService
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-5d98af527645bd107f1479a6f548a63f3303c1ae8340864a1ec2b75028127a83',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php',
      ),
    ),
    'namespace' => 'Modules\\Salary\\App\\Services',
    'name' => 'Modules\\Salary\\App\\Services\\SalaryService',
    'shortName' => 'SalaryService',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * ==========================================================
 * SERVICE LAYER
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Chứa Business Logic.
 *
 * Controller KHÔNG làm việc trực tiếp với DB.
 *
 * Controller
 *      ↓
 * Service
 *      ↓
 * Repository
 *      ↓
 * Database
 *
 *
 * TẠI SAO CẦN SERVICE ?
 * ----------------------------------------------------------
 * Nếu mai:
 *
 * - gửi mail
 * - queue
 * - websocket
 * - cache
 * - AI
 * - audit log
 *
 * Controller không cần sửa.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 53,
    'endLine' => 213,
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
      'repo' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'name' => 'repo',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 9,
        'endColumn' => 40,
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
          'repo' => 
          array (
            'name' => 'repo',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 61,
            'endLine' => 61,
            'startColumn' => 9,
            'endColumn' => 40,
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
 * Dependency Injection
 *
 * Laravel tự inject Repository.
 */',
        'startLine' => 60,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Services',
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'currentClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'aliasName' => NULL,
      ),
      'getDataTable' => 
      array (
        'name' => 'getDataTable',
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
 * DATATABLE CACHE
 * ======================================================
 *
 * Controller gọi:
 *
 * SalaryService
 *      ↓
 * getDataTable()
 *      ↓
 * Cache
 *      ↓
 * Repository
 */',
        'startLine' => 79,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Services',
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'currentClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'aliasName' => NULL,
      ),
      'store' => 
      array (
        'name' => 'store',
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
            'startColumn' => 27,
            'endColumn' => 37,
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
 * STORE
 * ======================================================
 *
 * NHẬN TỪ:
 *
 * SalaryController@store
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
 * DB
 *      ↓
 * Clear Cache
 *      ↓
 * Event
 *      ↓
 * Queue
 *      ↓
 * Listener
 */',
        'startLine' => 119,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Services',
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'currentClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
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
            'startLine' => 148,
            'endLine' => 148,
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
            'startLine' => 148,
            'endLine' => 148,
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
        'startLine' => 148,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Services',
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'currentClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
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
            'startLine' => 180,
            'endLine' => 180,
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
        'startLine' => 180,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Services',
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'currentClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
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
            'startLine' => 190,
            'endLine' => 190,
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
        'startLine' => 190,
        'endLine' => 212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Services',
        'declaringClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'implementingClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
        'currentClassName' => 'Modules\\Salary\\App\\Services\\SalaryService',
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