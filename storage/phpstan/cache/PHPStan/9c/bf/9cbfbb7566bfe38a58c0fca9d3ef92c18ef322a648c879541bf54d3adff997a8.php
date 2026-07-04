<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\User\App\Models\User
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-94c088403fbcb76df3cce30a210779acd81a806d09e0b6818cf2629df15a90a3',
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
    'startLine' => 198,
    'endLine' => 270,
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
            'startLine' => 206,
            'endLine' => 223,
            'startTokenPos' => 421,
            'startFilePos' => 5767,
            'endTokenPos' => 471,
            'endFilePos' => 6085,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 206,
        'endLine' => 223,
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
            'startLine' => 225,
            'endLine' => 228,
            'startTokenPos' => 480,
            'startFilePos' => 6113,
            'endTokenPos' => 488,
            'endFilePos' => 6165,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 225,
        'endLine' => 228,
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
            'startLine' => 230,
            'endLine' => 233,
            'startTokenPos' => 497,
            'startFilePos' => 6192,
            'endTokenPos' => 513,
            'endFilePos' => 6273,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 230,
        'endLine' => 233,
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
        'startLine' => 235,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
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
        'startLine' => 240,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 5,
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
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
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
        'startLine' => 250,
        'endLine' => 253,
        'startColumn' => 5,
        'endColumn' => 5,
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
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 255,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 5,
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
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 263,
        'endLine' => 269,
        'startColumn' => 5,
        'endColumn' => 5,
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