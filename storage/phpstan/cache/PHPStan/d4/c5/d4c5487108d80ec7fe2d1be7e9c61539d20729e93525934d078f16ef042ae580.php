<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Attendance\App\Jobs\AttendanceDailySummaryJob
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-65dd11a463525c7854757bc35e764bd674c64ceda123e14ecfb34a4899f78cce',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php',
      ),
    ),
    'namespace' => 'Modules\\Attendance\\App\\Jobs',
    'name' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
    'shortName' => 'AttendanceDailySummaryJob',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 81,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Foundation\\Queue\\Queueable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'tries' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'implementingClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'name' => 'tries',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '3',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 16,
            'startTokenPos' => 60,
            'startFilePos' => 428,
            'endTokenPos' => 60,
            'endFilePos' => 428,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timeout' => 
      array (
        'declaringClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'implementingClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'name' => 'timeout',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '120',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 71,
            'startFilePos' => 458,
            'endTokenPos' => 71,
            'endFilePos' => 460,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 30,
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
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 20,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Jobs',
        'declaringClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'implementingClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'currentClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'service' => 
          array (
            'name' => 'service',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Attendance\\App\\Services\\AttendanceSummaryService',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 9,
            'endColumn' => 41,
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
        'docComment' => NULL,
        'startLine' => 25,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Jobs',
        'declaringClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'implementingClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'currentClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'aliasName' => NULL,
      ),
      'failed' => 
      array (
        'name' => 'failed',
        'parameters' => 
        array (
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 9,
            'endColumn' => 29,
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
        'docComment' => NULL,
        'startLine' => 62,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Jobs',
        'declaringClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'implementingClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'currentClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'aliasName' => NULL,
      ),
      'tags' => 
      array (
        'name' => 'tags',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 74,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Attendance\\App\\Jobs',
        'declaringClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'implementingClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        'currentClassName' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
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