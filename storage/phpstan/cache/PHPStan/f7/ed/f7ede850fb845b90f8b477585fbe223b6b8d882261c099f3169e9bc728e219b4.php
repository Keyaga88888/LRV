<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Attendance\App\Models\Attendance
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-efae4dd3f69d18849eee4f001a8a8cbd6bc4175808ad4d266e99d06cd6ea3753',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php',
      ),
    ),
    'namespace' => 'Modules\\Attendance\\App\\Models',
    'name' => 'Modules\\Attendance\\App\\Models\\Attendance',
    'shortName' => 'Attendance',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 104,
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
      'fillable' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'company_id\', \'user_id\', \'work_date\', \'check_in\', \'check_out\', \'late_minutes\', \'work_hours\', \'overtime_hours\', \'status\', \'approval_status\', \'approved_at\', \'approved_by\']',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 40,
            'startTokenPos' => 68,
            'startFilePos' => 486,
            'endTokenPos' => 106,
            'endFilePos' => 767,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'work_date\' => \'date\', \'check_in\' => \'datetime\', \'check_out\' => \'datetime\']',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 49,
            'startTokenPos' => 115,
            'startFilePos' => 794,
            'endTokenPos' => 138,
            'endFilePos' => 903,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 6,
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
        'docComment' => NULL,
        'startLine' => 51,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Models',
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'currentClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'aliasName' => NULL,
      ),
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
        'docComment' => NULL,
        'startLine' => 63,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Models',
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'currentClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'aliasName' => NULL,
      ),
      'scopeToday' => 
      array (
        'name' => 'scopeToday',
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
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 32,
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
        'docComment' => NULL,
        'startLine' => 85,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Models',
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'currentClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'aliasName' => NULL,
      ),
      'newFactory' => 
      array (
        'name' => 'newFactory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 93,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Modules\\Attendance\\App\\Models',
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'currentClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'aliasName' => NULL,
      ),
      'booted' => 
      array (
        'name' => 'booted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 98,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Modules\\Attendance\\App\\Models',
        'declaringClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'implementingClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
        'currentClassName' => 'Modules\\Attendance\\App\\Models\\Attendance',
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