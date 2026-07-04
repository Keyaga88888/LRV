<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Http\Controllers\SalaryController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-ad277fb3ccf88733f9baf4e4bf31d5ce3adb4d62940d575d81324b4ac638e30e',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
      ),
    ),
    'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
    'name' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
    'shortName' => 'SalaryController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * CONTROLLER: SalaryController
 * -----------------------------------------
 * 📌 Đây là ENTRY POINT từ:
 *
 * Blade (index.blade.php)
 *   ↓ AJAX / Route
 * Controller
 *   ↓
 * Service / Model / Repository
 *
 * 👉 Vai trò:
 * - trả view
 * - xử lý AJAX DataTable
 * - CRUD salary
 * - export Excel
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 73,
    'endLine' => 588,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'App\\Http\\Controllers\\Controller',
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
      'index' => 
      array (
        'name' => 'index',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * GET: /salary
 * -----------------------------------------
 * 📌 Trả giao diện chính (Blade)
 */',
        'startLine' => 80,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'implementingClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'currentClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'aliasName' => NULL,
      ),
      'data' => 
      array (
        'name' => 'data',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * GET: /salary/data
 * -----------------------------------------
 * 📌 API cho DataTables server-side
 *
 * Blade DataTable gọi AJAX vào đây
 */',
        'startLine' => 107,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'implementingClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'currentClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'aliasName' => NULL,
      ),
      'store' => 
      array (
        'name' => 'store',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 483,
            'endLine' => 483,
            'startColumn' => 27,
            'endColumn' => 53,
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
 * POST: /salary/store
 * -----------------------------------------
 * 📌 tạo salary mới
 */',
        'startLine' => 483,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'implementingClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'currentClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 521,
            'endLine' => 521,
            'startColumn' => 9,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 522,
            'endLine' => 522,
            'startColumn' => 9,
            'endColumn' => 11,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'service' => 
          array (
            'name' => 'service',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Services\\SalaryService',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 523,
            'endLine' => 523,
            'startColumn' => 9,
            'endColumn' => 30,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * POST: /salary/update/{id}
 * -----------------------------------------
 * 📌 update salary
 */',
        'startLine' => 520,
        'endLine' => 534,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'implementingClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'currentClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'aliasName' => NULL,
      ),
      'destroy' => 
      array (
        'name' => 'destroy',
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
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 9,
            'endColumn' => 11,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'service' => 
          array (
            'name' => 'service',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Services\\SalaryService',
                'isIdentifier' => false,
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
            'startColumn' => 9,
            'endColumn' => 30,
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
 * POST: /salary/delete/{id}
 * -----------------------------------------
 * 📌 xoá salary
 */',
        'startLine' => 558,
        'endLine' => 567,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'implementingClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'currentClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'aliasName' => NULL,
      ),
      'export' => 
      array (
        'name' => 'export',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * GET: /salary/export
 * -----------------------------------------
 * 📌 export Excel
 */',
        'startLine' => 581,
        'endLine' => 587,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'implementingClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
        'currentClassName' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
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