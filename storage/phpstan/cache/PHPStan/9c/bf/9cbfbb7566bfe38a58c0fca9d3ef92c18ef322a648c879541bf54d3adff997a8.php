<?php declare(strict_types = 1);

// odsl-/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\User\App\Models\User
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.4.21-9bf1fa0ab468c35a1c7b3f4562cb90d0a1b09bdf3c5b6c5836c2a2487111706f',
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
 * @property int $id
 * @property string $name
 * @property string $email
 * @property int $company_id
 * @property-read Part|null $part
 * @property-read Position|null $position
 * @property-read Team|null $team
 * @property-read TypeAccount|null $typeAccount
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 202,
    'endLine' => 274,
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
            'startLine' => 210,
            'endLine' => 227,
            'startTokenPos' => 421,
            'startFilePos' => 5870,
            'endTokenPos' => 471,
            'endFilePos' => 6188,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 210,
        'endLine' => 227,
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
            'startLine' => 229,
            'endLine' => 232,
            'startTokenPos' => 480,
            'startFilePos' => 6216,
            'endTokenPos' => 488,
            'endFilePos' => 6268,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 229,
        'endLine' => 232,
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
            'startLine' => 234,
            'endLine' => 237,
            'startTokenPos' => 497,
            'startFilePos' => 6295,
            'endTokenPos' => 513,
            'endFilePos' => 6376,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 234,
        'endLine' => 237,
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
        'startLine' => 239,
        'endLine' => 242,
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
        'startLine' => 244,
        'endLine' => 247,
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
        'startLine' => 249,
        'endLine' => 252,
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
        'startLine' => 254,
        'endLine' => 257,
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
        'startLine' => 259,
        'endLine' => 265,
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
        'startLine' => 267,
        'endLine' => 273,
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