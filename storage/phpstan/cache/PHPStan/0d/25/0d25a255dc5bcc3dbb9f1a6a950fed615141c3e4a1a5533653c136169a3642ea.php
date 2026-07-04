<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdated.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Events\SalaryUpdated
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-38b422580ddee6d8f02331832f57336e9b04fd8853ff9525696969c4025d9067',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdated.php',
      ),
    ),
    'namespace' => 'Modules\\Salary\\App\\Events',
    'name' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
    'shortName' => 'SalaryUpdated',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * ==========================================================
 * EVENT: SalaryUpdated
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Event chỉ dùng để PHÁT TÍN HIỆU.
 *
 * Nó KHÔNG xử lý nghiệp vụ.
 *
 * Ví dụ:
 *
 * Service
 *    ↓
 * event(new SalaryUpdated())
 *    ↓
 * Listener nhận tín hiệu
 *    ↓
 * xử lý log / mail / queue / websocket
 *
 *
 * FILE GỌI TỚI:
 * ----------------------------------------------------------
 * Modules/Salary/App/Services/SalaryService.php
 *
 *
 * FILE NHẬN EVENT:
 * ----------------------------------------------------------
 * Modules/Salary/App/Listeners/LogSalaryActivity.php
 *
 *
 * FLOW:
 * ----------------------------------------------------------
 * SalaryService
 *      ↓
 * SalaryUpdated Event
 *      ↓
 * Queue
 *      ↓
 * LogSalaryActivity Listener
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 53,
    'endLine' => 97,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Queue\\SerializesModels',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'salary' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'implementingClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'name' => 'salary',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * salary object
 *
 * ví dụ:
 * SalaryMechanism model
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'action' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'implementingClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'name' => 'action',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * action hiện tại:
 *
 * created
 * updated
 * deleted
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 19,
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
          'salary' => 
          array (
            'name' => 'salary',
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
            'startColumn' => 9,
            'endColumn' => 15,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => 
            array (
              'code' => '\'updated\'',
              'attributes' => 
              array (
                'startLine' => 83,
                'endLine' => 83,
                'startTokenPos' => 59,
                'startFilePos' => 1618,
                'endTokenPos' => 59,
                'endFilePos' => 1626,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 9,
            'endColumn' => 27,
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
 * constructor chạy khi:
 *
 * event(new SalaryUpdated(...))
 *
 * được gọi.
 */',
        'startLine' => 81,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Events',
        'declaringClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'implementingClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
        'currentClassName' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
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