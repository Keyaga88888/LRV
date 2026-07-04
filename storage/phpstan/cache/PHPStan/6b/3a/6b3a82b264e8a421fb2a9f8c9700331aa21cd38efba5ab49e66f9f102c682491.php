<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Listeners\LogSalaryActivity
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-8e417a37ce24fda566da9ef80b428be8ebb40662605695057bf4bb4fe8ada1dc',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php',
      ),
    ),
    'namespace' => 'Modules\\Salary\\App\\Listeners',
    'name' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
    'shortName' => 'LogSalaryActivity',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 104,
    'endLine' => 273,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Queue\\InteractsWithQueue',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'queue' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'implementingClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'name' => 'queue',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'salary\'',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 134,
            'startTokenPos' => 61,
            'startFilePos' => 2572,
            'endTokenPos' => 61,
            'endFilePos' => 2579,
          ),
        ),
        'docComment' => '/**
 * ======================================================
 * Queue Name
 * ======================================================
 *
 * jobs sẽ vào queue:
 *
 * salary
 *
 * chạy:
 *
 * php artisan queue:work --queue=salary
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 29,
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
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 28,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * ======================================================
 * HANDLE
 * ======================================================
 *
 * Laravel tự động gọi
 * khi queue worker xử lý job.
 *
 * Tham số:
 *
 * SalaryUpdated $event
 *
 * chính là object được truyền từ:
 *
 * event(
 *     new SalaryUpdated(...)
 * );
 */',
        'startLine' => 154,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Listeners',
        'declaringClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'implementingClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'currentClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'aliasName' => NULL,
      ),
      'failed' => 
      array (
        'name' => 'failed',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 9,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 261,
            'endLine' => 261,
            'startColumn' => 9,
            'endColumn' => 29,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * ======================================================
 * FAILED
 * ======================================================
 *
 * Laravel tự gọi khi:
 *
 * handle()
 * throw Exception
 *
 * hoặc queue fail
 *
 * dữ liệu sẽ ghi:
 *
 * laravel.log
 */',
        'startLine' => 259,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Listeners',
        'declaringClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'implementingClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
        'currentClassName' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
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