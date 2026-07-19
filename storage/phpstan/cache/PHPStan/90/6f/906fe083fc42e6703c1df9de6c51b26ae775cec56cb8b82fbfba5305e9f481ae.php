<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Attendance\App\Providers\EventServiceProvider
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-dd2ed9f1dd0d94b07ec5fcae28f40f099c15293185ff1ae14d80a895d1c99c93',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
      ),
    ),
    'namespace' => 'Modules\\Attendance\\App\\Providers',
    'name' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
    'shortName' => 'EventServiceProvider',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 61,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
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
      'listen' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'implementingClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'name' => 'listen',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Modules\\Attendance\\App\\Events\\AttendanceCreated::class => [\\Modules\\Attendance\\App\\Listeners\\AttendanceLogListener::class, \\Modules\\Attendance\\App\\Listeners\\CalculateAttendanceSalary::class, \\Modules\\Attendance\\App\\Listeners\\SendAttendanceNotification::class, \\Modules\\Attendance\\App\\Listeners\\WriteAttendanceLog::class]]',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 35,
            'startTokenPos' => 71,
            'startFilePos' => 871,
            'endTokenPos' => 104,
            'endFilePos' => 1106,
          ),
        ),
        'docComment' => '/**
 * The event handler mappings for the application.
 *
 * @var array<string, array<int, string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'shouldDiscoverEvents' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'implementingClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'name' => 'shouldDiscoverEvents',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 117,
            'startFilePos' => 1244,
            'endTokenPos' => 117,
            'endFilePos' => 1247,
          ),
        ),
        'docComment' => '/**
 * Indicates if events should be discovered.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'policies' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'implementingClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'name' => 'policies',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Modules\\Attendance\\App\\Models\\Attendance::class => \\Modules\\Attendance\\App\\Policies\\AttendancePolicy::class]',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 60,
            'startTokenPos' => 166,
            'startFilePos' => 1563,
            'endTokenPos' => 179,
            'endFilePos' => 1625,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 60,
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
      'configureEmailVerification' => 
      array (
        'name' => 'configureEmailVerification',
        'parameters' => 
        array (
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
 * Configure the proper event listeners for email verification.
 */',
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Modules\\Attendance\\App\\Providers',
        'declaringClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'implementingClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'currentClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'aliasName' => NULL,
      ),
      'boot' => 
      array (
        'name' => 'boot',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 49,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Providers',
        'declaringClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'implementingClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
        'currentClassName' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
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