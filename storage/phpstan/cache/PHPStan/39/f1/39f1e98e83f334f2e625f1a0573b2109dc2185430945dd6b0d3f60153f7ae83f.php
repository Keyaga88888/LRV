<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Models\SalaryMechanism
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-fbe3246924a6b0698eb0338164f2b387ce399ad60765f2490dfb825ffbca828a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php',
      ),
    ),
    'namespace' => 'Modules\\Salary\\App\\Models',
    'name' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
    'shortName' => 'SalaryMechanism',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 79,
    'endLine' => 257,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      1 => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'salary_mechanisms\'',
          'attributes' => 
          array (
            'startLine' => 110,
            'endLine' => 110,
            'startTokenPos' => 108,
            'startFilePos' => 1950,
            'endTokenPos' => 108,
            'endFilePos' => 1968,
          ),
        ),
        'docComment' => '/**
 * ======================================================
 * TABLE NAME
 * ======================================================
 *
 * mapping:
 *
 * salary_mechanisms
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'user_id\', \'basic_salary\', \'allowance\', \'bonus\', \'insurance_deduction\', \'tax_deduction\', \'overtime_salary\', \'late_penalty\', \'performance_score\', \'note\', \'salary_month\']',
          'attributes' => 
          array (
            'startLine' => 123,
            'endLine' => 135,
            'startTokenPos' => 119,
            'startFilePos' => 2272,
            'endTokenPos' => 154,
            'endFilePos' => 2535,
          ),
        ),
        'docComment' => '/**
 * ======================================================
 * MASS ASSIGNMENT
 * ======================================================
 *
 * cho phép:
 *
 * SalaryMechanism::create(...)
 *
 * SalaryMechanism::update(...)
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logAttributes' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'name' => 'logAttributes',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'basic_salary\', \'bonus\']',
          'attributes' => 
          array (
            'startLine' => 178,
            'endLine' => 181,
            'startTokenPos' => 238,
            'startFilePos' => 3608,
            'endTokenPos' => 246,
            'endFilePos' => 3655,
          ),
        ),
        'docComment' => '/**
 * ======================================================
 * AUTO LOG FIELD
 * ======================================================
 *
 * chỉ log 2 field này
 *
 * nếu dùng kiểu log cũ
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 178,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logName' => 
      array (
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'name' => 'logName',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'salary\'',
          'attributes' => 
          array (
            'startLine' => 186,
            'endLine' => 186,
            'startTokenPos' => 259,
            'startFilePos' => 3729,
            'endTokenPos' => 259,
            'endFilePos' => 3736,
          ),
        ),
        'docComment' => '/**
 * tên nhóm log
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 186,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 41,
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
      'getActivitylogOptions' => 
      array (
        'name' => 'getActivitylogOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Spatie\\Activitylog\\Support\\LogOptions',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * ======================================================
 * ACTIVITY LOG
 * ======================================================
 *
 * package:
 *
 * spatie/laravel-activitylog
 *
 * activity_log table
 */',
        'startLine' => 148,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Models',
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'currentClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'aliasName' => NULL,
      ),
      'getDescriptionForEvent' => 
      array (
        'name' => 'getDescriptionForEvent',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 44,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * mô tả event
 */',
        'startLine' => 191,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Models',
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'currentClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
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
 * RELATIONSHIP
 * ======================================================
 *
 * salary_mechanisms.user_id
 *      ↓
 * users.id
 *
 * belongsTo
 */',
        'startLine' => 207,
        'endLine' => 212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Models',
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'currentClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'aliasName' => NULL,
      ),
      'getTotalSalaryAttribute' => 
      array (
        'name' => 'getTotalSalaryAttribute',
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
 * ACCESSOR
 * ======================================================
 *
 * virtual field:
 *
 * total_salary
 *
 *
 * dùng:
 *
 * $salary->total_salary
 *
 * ở:
 *
 * Controller
 *
 * Export
 *
 * Listener
 *
 * API
 *
 * Blade
 */',
        'startLine' => 240,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Salary\\App\\Models',
        'declaringClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'implementingClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        'currentClassName' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
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