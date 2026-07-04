<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Http\Controllers\SalaryController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-533521addca5cb40752727899d29e298d61fcf4b95910fb0c03bf5205374b5f5',
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
    'endLine' => 591,
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
        'endLine' => 101,
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
        'startLine' => 110,
        'endLine' => 269,
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
            'startLine' => 486,
            'endLine' => 486,
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
        'startLine' => 486,
        'endLine' => 503,
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
            'startLine' => 524,
            'endLine' => 524,
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
            'startLine' => 525,
            'endLine' => 525,
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
            'startLine' => 526,
            'endLine' => 526,
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
        'startLine' => 523,
        'endLine' => 537,
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
            'startLine' => 562,
            'endLine' => 562,
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
            'startLine' => 563,
            'endLine' => 563,
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
        'startLine' => 561,
        'endLine' => 570,
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
        'startLine' => 584,
        'endLine' => 590,
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