<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Salary\App\Models\SalaryMechanism
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-680535c9e5747d88135cd221766ef5f113e3a2908f6e8e4679e1ced37d60fd6c',
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
    'startLine' => 80,
    'endLine' => 252,
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
            'startLine' => 111,
            'endLine' => 111,
            'startTokenPos' => 113,
            'startFilePos' => 2004,
            'endTokenPos' => 113,
            'endFilePos' => 2022,
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
        'startLine' => 111,
        'endLine' => 111,
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
            'startLine' => 124,
            'endLine' => 136,
            'startTokenPos' => 124,
            'startFilePos' => 2326,
            'endTokenPos' => 159,
            'endFilePos' => 2589,
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
        'startLine' => 124,
        'endLine' => 136,
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
            'startLine' => 179,
            'endLine' => 182,
            'startTokenPos' => 243,
            'startFilePos' => 3662,
            'endTokenPos' => 251,
            'endFilePos' => 3709,
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
        'startLine' => 179,
        'endLine' => 182,
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
            'startLine' => 187,
            'endLine' => 187,
            'startTokenPos' => 264,
            'startFilePos' => 3783,
            'endTokenPos' => 264,
            'endFilePos' => 3790,
          ),
        ),
        'docComment' => '/**
 * tên nhóm log
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 187,
        'endLine' => 187,
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
        'startLine' => 149,
        'endLine' => 168,
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
            'startLine' => 192,
            'endLine' => 192,
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
        'startLine' => 192,
        'endLine' => 195,
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
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
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
        'startLine' => 208,
        'endLine' => 213,
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
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'float',
            'isIdentifier' => true,
          ),
        ),
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
        'startLine' => 241,
        'endLine' => 251,
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