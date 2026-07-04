<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\User\App\Models\User
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-0fc01ca321b503ec262adde4f07ed7b177f0bbc502c83dbd0c0d5dccef521c90',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\User\\App\\Models\\User',
        'filename' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
      ),
    ),
    'namespace' => 'Modules\\User\\App\\Models',
    'name' => 'Modules\\User\\App\\Models\\User',
    'shortName' => 'User',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property-read Part|null $part
 * @property-read Position|null $position
 * @property-read Team|null $team
 * @property-read TypeAccount|null $typeAccount
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 201,
    'endLine' => 273,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Auth\\User',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
    ),
    'traitClassNames' => 
    array (
      0 => 'Laravel\\Sanctum\\HasApiTokens',
      1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      2 => 'Spatie\\Permission\\Traits\\HasRoles',
      3 => 'Illuminate\\Auth\\MustVerifyEmail',
      4 => 'Illuminate\\Notifications\\Notifiable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'fillable' => 
      array (
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'thumbnail\', \'name\', \'email\', \'password\', \'birthday\', \'sex\', \'part_id\', \'position_id\', \'type_work\', \'team_id\', \'phone\', \'address\', \'status\', \'start_day\', \'end_day\', \'type_account_id\']',
          'attributes' => 
          array (
            'startLine' => 209,
            'endLine' => 226,
            'startTokenPos' => 436,
            'startFilePos' => 5862,
            'endTokenPos' => 486,
            'endFilePos' => 6180,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 209,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hidden' => 
      array (
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'name' => 'hidden',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'password\', \'remember_token\']',
          'attributes' => 
          array (
            'startLine' => 228,
            'endLine' => 231,
            'startTokenPos' => 495,
            'startFilePos' => 6208,
            'endTokenPos' => 503,
            'endFilePos' => 6260,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 228,
        'endLine' => 231,
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
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'email_verified_at\' => \'datetime\', \'password\' => \'hashed\']',
          'attributes' => 
          array (
            'startLine' => 233,
            'endLine' => 236,
            'startTokenPos' => 512,
            'startFilePos' => 6287,
            'endTokenPos' => 528,
            'endFilePos' => 6368,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 233,
        'endLine' => 236,
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
      'part' => 
      array (
        'name' => 'part',
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
        'docComment' => NULL,
        'startLine' => 238,
        'endLine' => 241,
        'startColumn' => 3,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\User\\App\\Models',
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'currentClassName' => 'Modules\\User\\App\\Models\\User',
        'aliasName' => NULL,
      ),
      'position' => 
      array (
        'name' => 'position',
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
        'docComment' => NULL,
        'startLine' => 243,
        'endLine' => 246,
        'startColumn' => 3,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\User\\App\\Models',
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'currentClassName' => 'Modules\\User\\App\\Models\\User',
        'aliasName' => NULL,
      ),
      'team' => 
      array (
        'name' => 'team',
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
        'docComment' => NULL,
        'startLine' => 248,
        'endLine' => 251,
        'startColumn' => 1,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\User\\App\\Models',
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'currentClassName' => 'Modules\\User\\App\\Models\\User',
        'aliasName' => NULL,
      ),
      'typeAccount' => 
      array (
        'name' => 'typeAccount',
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
        'docComment' => NULL,
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 1,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\User\\App\\Models',
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'currentClassName' => 'Modules\\User\\App\\Models\\User',
        'aliasName' => NULL,
      ),
      'attendances' => 
      array (
        'name' => 'attendances',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Modules\\User\\App\\Models\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 258,
        'endLine' => 264,
        'startColumn' => 1,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\User\\App\\Models',
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'currentClassName' => 'Modules\\User\\App\\Models\\User',
        'aliasName' => NULL,
      ),
      'salaryMechanisms' => 
      array (
        'name' => 'salaryMechanisms',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Modules\\User\\App\\Models\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 266,
        'endLine' => 272,
        'startColumn' => 1,
        'endColumn' => 1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\User\\App\\Models',
        'declaringClassName' => 'Modules\\User\\App\\Models\\User',
        'implementingClassName' => 'Modules\\User\\App\\Models\\User',
        'currentClassName' => 'Modules\\User\\App\\Models\\User',
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