<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1783131224,
	'meta' => array (
  'cacheVersion' => 'v13-packageDependencies',
  'phpstanVersion' => '2.2.4',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80421,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, level: 5, paths: [/Users/lahoathanh/Desktop/laravel/keyagatwo/app, /Users/lahoathanh/Desktop/laravel/keyagatwo/Modules], tmpDir: /Users/lahoathanh/Desktop/laravel/keyagatwo/storage/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app',
    1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/lahoathanh/Desktop/laravel/keyagatwo/composer.lock' => '1ba55b2aa285ccc63f3ba5c7309dd3955d353180669eeab7ca2a7fef2c70ac85',
  ),
  'composerInstalled' => 
  array (
    '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'amphp/amp' => 
        array (
          'pretty_version' => 'v3.1.2',
          'version' => '3.1.2.0',
          'reference' => '2f3ebed5a4f663968a0590dbb7654a8b32cb63cb',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/amp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/byte-stream' => 
        array (
          'pretty_version' => 'v2.1.2',
          'version' => '2.1.2.0',
          'reference' => '55a6bd071aec26fa2a3e002618c20c35e3df1b46',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/byte-stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/cache' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => '46912e387e6aa94933b61ea1ead9cf7540b7797c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/dns' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '78eb3db5fc69bf2fc0cb503c4fcba667bc223c71',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/parallel' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '37f5b2754fadc229c00f9416bd68fb8d04529a81',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/parallel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/parser' => 
        array (
          'pretty_version' => 'v1.1.1',
          'version' => '1.1.1.0',
          'reference' => '3cf1f8b32a0171d4b1bed93d25617637a77cded7',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/pipeline' => 
        array (
          'pretty_version' => 'v1.2.5',
          'version' => '1.2.5.0',
          'reference' => '92f121dde31cd1d89d5d0f9eba64ac40271b236e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/pipeline',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/process' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => '583959df17d00304ad7b0b32285373f985935643',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/serialization' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => 'fdf2834d78cebb0205fb2672676c1b1eb84371f0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/serialization',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/socket' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'dadb63c5d3179fd83803e29dfeac27350e619314',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'amphp/sync' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '217097b785130d77cfcc58ff583cf26cd1770bf1',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../amphp/sync',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'balping/json-raw-encoder' => 
        array (
          'pretty_version' => 'v1.0.2',
          'version' => '1.0.2.0',
          'reference' => '9338e193f84dbea33edcb1cb82baea328afadefb',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../balping/json-raw-encoder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'barryvdh/laravel-dompdf' => 
        array (
          'pretty_version' => 'v3.1.2',
          'version' => '3.1.2.0',
          'reference' => 'ee3b72b19ccdf57d0243116ecb2b90261344dedc',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../barryvdh/laravel-dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.20.0',
          'version' => '7.20.0.0',
          'reference' => '81c80677c9ec0ed4ef16b246167f11dec81a6e3d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'clue/redis-protocol' => 
        array (
          'pretty_version' => 'v0.3.2',
          'version' => '0.3.2.0',
          'reference' => '6f565332f5531b7722d1e9c445314b91862f6d6c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../clue/redis-protocol',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'clue/redis-react' => 
        array (
          'pretty_version' => 'v2.8.0',
          'version' => '2.8.0.0',
          'reference' => '84569198dfd5564977d2ae6a32de4beb5a24bdca',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../clue/redis-react',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'consoletvs/charts' => 
        array (
          'pretty_version' => '6.9.0',
          'version' => '6.9.0.0',
          'reference' => '7f8a39703ad70cac1b471b27275d2ffc4494e7e5',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../consoletvs/charts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'danog/advanced-json-rpc' => 
        array (
          'pretty_version' => 'v3.2.3',
          'version' => '3.2.3.0',
          'reference' => 'ae703ea7b4811797a10590b6078de05b3b33dd91',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../danog/advanced-json-rpc',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'darkaonline/l5-swagger' => 
        array (
          'pretty_version' => '11.1.0',
          'version' => '11.1.0.0',
          'reference' => '110b59478c9417c13794cef62a82b019433d642a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../darkaonline/l5-swagger',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'daverandom/libdns' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'b84c94e8fe6b7ee4aecfe121bfe3b6177d303c8a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../daverandom/libdns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dnoegel/php-xdg-base-dir' => 
        array (
          'pretty_version' => 'v0.1.1',
          'version' => '0.1.1.0',
          'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../dnoegel/php-xdg-base-dir',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/dompdf' => 
        array (
          'pretty_version' => 'v3.1.5',
          'version' => '3.1.5.0',
          'reference' => 'f11ead23a8a76d0ff9bbc6c7c8fd7e05ca328496',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../dompdf/dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/php-font-lib' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'a6e9a688a2a80016ac080b97be73d3e10c444c9a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../dompdf/php-font-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/php-svg-lib' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '8259ffb930817e72b1ff1caef5d226501f3dfeb1',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../dompdf/php-svg-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'evenement/evenement' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '0a16b0d71ab13284339abb99d9d2bd813640efbc',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../evenement/evenement',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ezyang/htmlpurifier' => 
        array (
          'pretty_version' => 'v4.19.0',
          'version' => '4.19.0.0',
          'reference' => 'b287d2a16aceffbf6e0295559b39662612b77fcf',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../ezyang/htmlpurifier',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'felixfbecker/language-server-protocol' => 
        array (
          'pretty_version' => 'v1.5.3',
          'version' => '1.5.3.0',
          'reference' => 'a9e113dbc7d849e35b8776da39edaf4313b7b6c9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../felixfbecker/language-server-protocol',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'felixfbecker/php-advanced-json-rpc' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '^3',
          ),
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.4',
          'version' => '7.10.4.0',
          'reference' => 'aec528da477062d3af11f51e6b33402be233b21f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '09e8a212562fb1fb6a512c4156ed71525969d6c2',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.10.1',
          'version' => '2.10.1.0',
          'reference' => '73ab136360b5dfd858006eae9795e8fe43c80361',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.6',
          'version' => '1.0.6.0',
          'reference' => 'eef7f87bab6f204eba3c39224d8075c70c637946',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.11.2',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kelunik/certificate' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '7e00d498c264d5eb4f78c69f41c8bd6719c0199e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../kelunik/certificate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.10.0',
          'version' => '3.10.0.0',
          'reference' => '2970f83398154178a739609c244577267c7ee8eb',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/agent-detector' => 
        array (
          'pretty_version' => 'v2.0.2',
          'version' => '2.0.2.0',
          'reference' => '90694b9256099591cf9e55d08c18ba7a00bf099f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/boost' => 
        array (
          'pretty_version' => 'v2.4.8',
          'version' => '2.4.8.0',
          'reference' => 'd11d720cf9537f8d236a11d973e99563a598ec9c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/boost',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/breeze' => 
        array (
          'pretty_version' => 'v2.4.2',
          'version' => '2.4.2.0',
          'reference' => '4f20e7b2cc8d25daa85d8647241a89c8e0930305',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/breeze',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v13.11.2',
          'version' => '13.11.2.0',
          'reference' => '4148042bf6ee01edd05408f1f66d91b231f85c25',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/horizon' => 
        array (
          'pretty_version' => 'v5.47.2',
          'version' => '5.47.2.0',
          'reference' => 'a6ac142293ad02db4d7cccb961dd32f56ef1462d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/horizon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/mcp' => 
        array (
          'pretty_version' => 'v0.7.0',
          'version' => '0.7.0.0',
          'reference' => '3513b4feca5f1678be4d2261dcfa8e456436d02a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/mcp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.6',
          'version' => '1.2.6.0',
          'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pao' => 
        array (
          'pretty_version' => 'v1.0.6',
          'version' => '1.0.6.0',
          'reference' => '02f62a64c2b60af44a418ee490fee193590d8269',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/pao',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.3',
          'version' => '1.29.3.0',
          'reference' => 'da1d1111a6aa2e082d2a388b194afe1ba0a05d14',
          'type' => 'project',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.18',
          'version' => '0.3.18.0',
          'reference' => 'a19af51bb144bf87f08397921fa619f85c7d4e72',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/reverb' => 
        array (
          'pretty_version' => 'v1.10.2',
          'version' => '1.10.2.0',
          'reference' => '43a5c0a99b1aaba33dc32f97fcf51f182dd8c8ac',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/reverb',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/roster' => 
        array (
          'pretty_version' => 'v0.5.1',
          'version' => '0.5.1.0',
          'reference' => '5089de7615f72f78e831590ff9d0435fed0102bb',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/roster',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.3.2',
          'version' => '4.3.2.0',
          'reference' => '2a9bccc18e9907808e0018dd15fa643937886b1e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sentinel' => 
        array (
          'pretty_version' => 'v1.1.0',
          'version' => '1.1.0.0',
          'reference' => '972d9885d9d14312a118e9565c4e6ecc5e751ea1',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/sentinel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.13',
          'version' => '2.0.13.0',
          'reference' => 'b566ee0dd251f3c4078bed003a7ce015f5ea6dce',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '4faba77764bd33411735936acdf30446d058c78b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.2',
          'version' => '2.8.2.0',
          'reference' => '59fb075d2101740c337c7216e3f32b36c204218b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.34.0',
          'version' => '3.34.0.0',
          'reference' => '2daaac3b0d4c83ea7ed5d8586e786f5d00f3540e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maatwebsite/excel' => 
        array (
          'pretty_version' => '3.1.69',
          'version' => '3.1.69.0',
          'reference' => 'ae5d65b7c9a2fac43bff4d44f796ac95d7a8e760',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../maatwebsite/excel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maennchen/zipstream-php' => 
        array (
          'pretty_version' => '3.2.2',
          'version' => '3.2.2.0',
          'reference' => '77bebeb4c6c340bb3c11c843b2cffd8bbfde4d5e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../maennchen/zipstream-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'markbaker/complex' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../markbaker/complex',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'markbaker/matrix' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '728434227fe21be27ff6d86621a1b13107a2562c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../markbaker/matrix',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'fcf91eb64359852f00d921887b219479b4f21251',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.4',
          'version' => '3.11.4.0',
          'reference' => 'e890471a3494740f7d9326d72ce6a8c559ffee60',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'netresearch/jsonmapper' => 
        array (
          'pretty_version' => 'v5.0.1',
          'version' => '5.0.1.0',
          'reference' => '980674efdda65913492d29a8fd51c82270dd37bb',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../netresearch/jsonmapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.4',
          'version' => '4.1.4.0',
          'reference' => '7da6c396d7ebe142bc857c20479d5e70a5e1aac7',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.4',
          'version' => '8.9.4.0',
          'reference' => '716af8f95a470e9094cfca09ed897b023be191a5',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nwidart/laravel-modules' => 
        array (
          'pretty_version' => 'v13.0.0',
          'version' => '13.0.0.0',
          'reference' => '6aa5461e57ac89d0dc8377cdda074c10487f92f9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../nwidart/laravel-modules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.7.0',
          'version' => '4.7.0.0',
          'reference' => '2fc75cfcf03c041c804778fa894282234adc3c66',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.2',
          'version' => '4.0.2.0',
          'reference' => '3fb0d02a91b9da504b139dc7ab2a31efb7c3215c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => '3057a36669ff11416cc0dc2b521b3aec58c488d0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoffice/phpspreadsheet' => 
        array (
          'pretty_version' => '1.30.4',
          'version' => '1.30.4.0',
          'reference' => '02970383cc12e7bf0bc0707ea6e2e8ed23a7aec9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpoffice/phpspreadsheet',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.4',
          'version' => '2.2.4.0',
          'reference' => 'f0fe3fb03bb53ce68cc2416785b260e62226ec27',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.6',
          'version' => '12.5.6.0',
          'reference' => '876099a072646c7745f673d7aeab5382c4439691',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.24',
          'version' => '12.5.24.0',
          'reference' => 'd75dd30597caa80e72fad2ef7904601a30ef1046',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'predis/predis' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '5c996db191ee2d9bafe651f454b1fca16754271b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../predis/predis',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psalm/psalm' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '6.16.1',
          ),
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1 || 2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
            1 => '1.0|2.0|3.0',
            2 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.23',
          'version' => '0.12.23.0',
          'reference' => '4dcc0f08047d52bbde475eda481146fd8e27e1a4',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pusher/pusher-php-server' => 
        array (
          'pretty_version' => '7.2.8',
          'version' => '7.2.8.0',
          'reference' => '4aa139ed2a2a805cd265449b691198beee1309d2',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../pusher/pusher-php-server',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'radebatz/type-info-extras' => 
        array (
          'pretty_version' => '1.0.7',
          'version' => '1.0.7.0',
          'reference' => '95a524a74a61648b44e355cb33d38db4b17ef5ce',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../radebatz/type-info-extras',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ratchet/rfc6455' => 
        array (
          'pretty_version' => 'v0.4.1',
          'version' => '0.4.1.0',
          'reference' => '9b05f371219cbaf9748b505f139617dd0715592b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../ratchet/rfc6455',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/cache' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd47c472b64aa5608225f47965a484b75c7817d5b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/dns' => 
        array (
          'pretty_version' => 'v1.14.0',
          'version' => '1.14.0.0',
          'reference' => '7562c05391f42701c1fccf189c8225fece1cd7c3',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/event-loop' => 
        array (
          'pretty_version' => 'v1.6.0',
          'version' => '1.6.0.0',
          'reference' => 'ba276bda6083df7e0050fd9b33f66ad7a4ac747a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '23444f53a813a3296c1368bb104793ce8d88f04a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/promise-timer' => 
        array (
          'pretty_version' => 'v1.11.0',
          'version' => '1.11.0.0',
          'reference' => '4f70306ed66b8b44768941ca7f142092600fafc1',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/promise-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/socket' => 
        array (
          'pretty_version' => 'v1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'ef5b17b81f6f60504c539313f94f2d826c5faa08',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'react/stream' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '1e5b0acb8fe55143b5b426817155190eb6f5b18d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../react/stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'revolt/event-loop' => 
        array (
          'pretty_version' => 'v1.0.9',
          'version' => '1.0.9.0',
          'reference' => '44061cf513e53c6200372fc935ac42271566295d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../revolt/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sabberworm/php-css-parser' => 
        array (
          'pretty_version' => 'v9.3.0',
          'version' => '9.3.0.0',
          'reference' => '88dbd0f7f91abbfe4402d0a3071e9ff4d81ed949',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sabberworm/php-css-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.1',
          'version' => '4.2.1.0',
          'reference' => '7d05781b13f7dec9043a629a21d086ed74582a15',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.8',
          'version' => '7.1.8.0',
          'reference' => '7c65c1e79836812819705b473a90c12399542485',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.1.1',
          'version' => '8.1.1.0',
          'reference' => '334bc42a97ec6fc44c59001dc3467e0d739a20e9',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.3',
          'version' => '7.0.3.0',
          'reference' => 'c5e21b5de653ce0a769fb36f5cdfcb5e7a32cf23',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd543b8ef219dcd8da262cbb958639a96bedba10e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.4',
          'version' => '6.0.4.0',
          'reference' => '82ff822c2edc46724be9f7411d3163021f602773',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/array-to-xml' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '88b2f3852a922dd73177a68938f8eb2ec70c7224',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../spatie/array-to-xml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-activitylog' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '0e00fe74fd071cc572a045459f6d4c9de33130bd',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../spatie/laravel-activitylog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.93.1',
          'version' => '1.93.1.0',
          'reference' => 'd5552849801f2642aea710557463234b59ef65eb',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => '70a6ab04108616b438e0839598f473b513281644',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'swagger-api/swagger-ui' => 
        array (
          'pretty_version' => 'v5.32.6',
          'version' => '5.32.6.0',
          'reference' => 'dcdca62c8b64a0a54e4decd4e1a6c3c712fdcc60',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../swagger-api/swagger-ui',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.8',
          'version' => '8.0.8.0',
          'reference' => 'b55a638b189a6faa875e0ccdb00908fb87af95b3',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v8.0.11',
          'version' => '8.0.11.0',
          'reference' => '3156577f46a38aa1b9323aad223de7a9cd426782',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.9',
          'version' => '8.0.9.0',
          'reference' => '3665cfade90565430909b906394c73c8739e57d0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '50f59d1f3ca46d41ac911f97a78626b6756af35b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v8.0.8',
          'version' => '8.0.8.0',
          'reference' => 'c1119fe8dcfc3825ec74ec061b96ef0c8f281517',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.9',
          'version' => '8.0.9.0',
          'reference' => '0c3c1a17604c4dbbec4b93fe162c538482096e1f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'ccba7060602b7fed0b03c85bf025257f76d9ef32',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '99aec13b82b4967ec5088222c4a3ecca955949c2',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v8.0.8',
          'version' => '8.0.8.0',
          'reference' => '8da41214757b87d97f181e3d14a4179286151007',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v8.0.8',
          'version' => '8.0.8.0',
          'reference' => '02656f7ebeae5c155d659e946f6b3a33df24051b',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v8.0.12',
          'version' => '8.0.12.0',
          'reference' => 'c00291734c59c05c54c5a3abc2ab18e99b070157',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v8.0.12',
          'version' => '8.0.12.0',
          'reference' => '5266d594e83593dff3492b5655ff6e8f38d67cfc',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v8.0.12',
          'version' => '8.0.12.0',
          'reference' => '7d9a72bbf0a9cb169ed1cbbbbbf709a592207fc1',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '4864388bfbd3001ce88e234fab652acd91fdc57e',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '6a21eb99c6973357967f6ce3708cd55a6bec6315',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => '796a26abb75ce49f3a84433cd81bf1009d73d5f8',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '88486db2c389b290bf87ff1de7ebc1e13e42bb06',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'fcfa4973a9917cef23f2e38774da74a2b7d115ee',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php86' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '33d8fc5a705481e21fe3a81212b26f9b1f61749c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-php86',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v8.0.11',
          'version' => '8.0.11.0',
          'reference' => '26d89e459f037d2873300605d0a07e7a8ef84db0',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v8.0.12',
          'version' => '8.0.12.0',
          'reference' => 'c7f22a665faa3e5212b8f042e0c5831a6b85492f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'd25d82433a80eba6aa0e6c24b61d7370d99e444a',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.11',
          'version' => '8.0.11.0',
          'reference' => '39be2ad058a3c0bd558edca23e65f009865d75ff',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.10',
          'version' => '8.0.10.0',
          'reference' => 'f63e9342e12646a57c91ef8a366a4f9d8e557b67',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '0ab302977a952b42fd51475c4ebac81f8da0a95d',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/type-info' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '9f24df8a79781b9b9f030fea7dfd2f3bd1e7e7e7',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/type-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v8.0.9',
          'version' => '8.0.9.0',
          'reference' => '4d9d6510bbe88ebb4608b7200d18606cdf80825c',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v8.0.8',
          'version' => '8.0.8.0',
          'reference' => 'cfb7badd53bf4177f6e9416cfbbccc13c0e773a1',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v8.0.12',
          'version' => '8.0.12.0',
          'reference' => '2a36f4b8405d41fa31799b06874dbd45c1b16c30',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'thecodingmachine/safe' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '705683a25bacf0d4860c7dea4d7947bfd09eea19',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../thecodingmachine/safe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vimeo/psalm' => 
        array (
          'pretty_version' => '6.16.1',
          'version' => '6.16.1.0',
          'reference' => 'f1f5de594dc76faf8784e02d3dc4716c91c6f6ac',
          'type' => 'project',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../vimeo/psalm',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.0',
          'version' => '2.4.0.0',
          'reference' => '9007ea6f45ecf352a9422b36644e4bfc039b9155',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'wikimedia/composer-merge-plugin' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => 'a03d426c8e9fb2c9c569d9deeb31a083292788bc',
          'type' => 'composer-plugin',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../wikimedia/composer-merge-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'yajra/laravel-datatables-oracle' => 
        array (
          'pretty_version' => 'v13.1.2',
          'version' => '13.1.2.0',
          'reference' => 'ded9345b7c00c85ce0fe0cea40e24e61c8489e10',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../yajra/laravel-datatables-oracle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'zircote/swagger-php' => 
        array (
          'pretty_version' => '6.2.0',
          'version' => '6.2.0.0',
          'reference' => '060af3bb9c4cba6a5859aba2c51cd1c129479410',
          'type' => 'library',
          'install_path' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/composer/../zircote/swagger-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/larastan/larastan/bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar:///Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///Users/lahoathanh/Desktop/laravel/keyagatwo/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'herd',
    25 => 'iconv',
    26 => 'igbinary',
    27 => 'imagick',
    28 => 'imap',
    29 => 'intl',
    30 => 'json',
    31 => 'ldap',
    32 => 'libxml',
    33 => 'mbstring',
    34 => 'mongodb',
    35 => 'mysqli',
    36 => 'mysqlnd',
    37 => 'openssl',
    38 => 'pcntl',
    39 => 'pcre',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'random',
    47 => 'readline',
    48 => 'redis',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tokenizer',
    61 => 'xml',
    62 => 'xmlreader',
    63 => 'xmlwriter',
    64 => 'xsl',
    65 => 'zip',
    66 => 'zlib',
    67 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Attendance\\App\\Models\\Attendance model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Attendance\\App\\Models\\Attendance model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Models\\Attendance::$user.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Yajra\\DataTables\\DataTableAbstract::filterColumn().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
       'line' => 167,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 130,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'If condition is always true.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
       'line' => 462,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 462,
       'nodeType' => 'PhpParser\\Node\\Stmt\\If_',
       'identifier' => 'if.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'If condition is always true.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
       'line' => 528,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 528,
       'nodeType' => 'PhpParser\\Node\\Stmt\\If_',
       'identifier' => 'if.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Attendance\\App\\Models\\Attendance model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Modules\\Attendance\\App\\Models\\Attendance::pending().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Modules\\Attendance\\App\\Models\\Attendance::approved().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Modules\\Attendance\\App\\Models\\Attendance::rejected().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Attendance\\App\\Models\\Attendance model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Models\\Attendance::$user.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Models\\Attendance::$user.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Models\\Attendance::$user.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Attendance\\App\\Observers\\AttendanceObserver::clearCache() is unused.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PHPStan\\Node\\ClassMethodsNode',
       'identifier' => 'method.unused',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Attendance\\App\\Models\\Attendance model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Attendance\\App\\Models\\Attendance model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\User\\App\\Models\\User::$company_id.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Modules\\Attendance\\App\\Models\\Attendance::pending().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php',
       'line' => 80,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 80,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined static method Modules\\Attendance\\App\\Models\\Attendance::pending().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php',
       'line' => 100,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 100,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'staticMethod.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Modules\\Attendance\\App\\Transformers\\AttendanceCollection::total().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Modules\\Attendance\\App\\Transformers\\AttendanceCollection::currentPage().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Modules\\Attendance\\App\\Transformers\\AttendanceCollection::lastPage().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$id.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$user.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$user.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$work_date.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$check_in.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$check_out.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$late_minutes.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$work_hours.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 34,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$overtime_hours.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$status.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$created_at.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Attendance\\App\\Transformers\\AttendanceResource::$updated_at.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method PHPUnit\\Framework\\Assert::assertNotNull() with int will always evaluate to true.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.alreadyNarrowedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceServiceTest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method PHPUnit\\Framework\\Assert::assertTrue() with true will always evaluate to true.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceServiceTest.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceServiceTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.alreadyNarrowedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $view of function view expects view-string|null, string given.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Salary\\App\\Models\\SalaryMechanism model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'part\' is not found in Modules\\User\\App\\Models\\User model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 92,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'position\' is not found in Modules\\User\\App\\Models\\User model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 92,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Salary\\App\\Models\\SalaryMechanism model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'user\' is not found in Modules\\Salary\\App\\Models\\SalaryMechanism model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Support\\HigherOrderTapProxy<Illuminate\\Database\\Eloquent\\Collection<int, Modules\\Salary\\App\\Models\\SalaryMechanism>|Modules\\Salary\\App\\Models\\SalaryMechanism>::update().',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php',
       'line' => 136,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 136,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'part\' is not found in Modules\\User\\App\\Models\\User model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe property access "?->name" on left side of ?? is unnecessary. Use -> instead.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'line' => 121,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 121,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'part\' is not found in Modules\\User\\App\\Models\\User model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'line' => 262,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 262,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Relation \'position\' is not found in Modules\\User\\App\\Models\\User model.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'line' => 262,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 262,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'larastan.relationExistence',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Exports\\AttendanceExport::collection() should return Illuminate\\Support\\Collection but return statement is missing.',
       'file' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ExecutionEndNode',
       'identifier' => 'return.missing',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Commands/CreateAttendanceCommand.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Application\\Commands\\CreateAttendanceCommand',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Application\\Handlers\\CreateAttendanceHandler',
        1 => 'handle',
        2 => 'Modules\\Attendance\\App\\Application\\Handlers\\CreateAttendanceHandler',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'create',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/DTO/AttendanceDTO.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Domain\\DTO\\AttendanceDTO',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/Services/AttendanceDomainService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Domain\\Services\\AttendanceDomainService',
        1 => 'calculate',
        2 => 'Modules\\Attendance\\App\\Domain\\Services\\AttendanceDomainService',
        3 => 
        array (
          0 => 'm' . "\0" . 'modules\\attendance\\app\\services\\attendancecalculator' . "\0" . 'calculate',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceApproved.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        1 => 'broadcastOn',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\broadcasting\\channel' . "\0" . '__construct',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        1 => 'broadcastAs',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        1 => 'broadcastWith',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
      ),
      2 => 
      array (
        0 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceCreated.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        1 => 'broadcastOn',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\broadcasting\\channel' . "\0" . '__construct',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        1 => 'broadcastAs',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        1 => 'broadcastWith',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceDeleted.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        1 => 'broadcastOn',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\broadcasting\\channel' . "\0" . '__construct',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        1 => 'broadcastAs',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        1 => 'broadcastWith',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceRejected.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        1 => 'broadcastOn',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\broadcasting\\channel' . "\0" . '__construct',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        1 => 'broadcastAs',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        1 => 'broadcastWith',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceUpdated.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        1 => 'broadcastOn',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\broadcasting\\channel' . "\0" . '__construct',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        1 => 'broadcastAs',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        1 => 'broadcastWith',
        2 => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 26,
      ),
      1 => 
      array (
        0 => 'event',
        1 => 60,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\SendAttendanceApprovedMailJob',
        1 => 'dispatch',
        2 => 31,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'attendance::index',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Http\\Controllers\\AttendanceController',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 364,
      ),
      1 => 
      array (
        0 => 'event',
        1 => 461,
      ),
      2 => 
      array (
        0 => 'event',
        1 => 539,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\ExportAttendanceExcelJob',
        1 => 'dispatch',
        2 => 555,
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\ExportAttendancePdfJob',
        1 => 'dispatch',
        2 => 566,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'dd',
        1 => 43,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/StoreAttendanceRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Http\\Requests\\StoreAttendanceRequest',
        1 => 'messages',
        2 => 'Modules\\Attendance\\App\\Http\\Requests\\StoreAttendanceRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/UpdateAttendanceRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Http\\Requests\\UpdateAttendanceRequest',
        1 => 'rules',
        2 => 'Modules\\Attendance\\App\\Http\\Requests\\UpdateAttendanceRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceCache.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceCache',
        1 => 'summary',
        2 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceCache',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\cache\\repository' . "\0" . 'remember',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceDashboardCache.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        1 => 'remember',
        2 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\cache\\repository' . "\0" . 'remember',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        1 => 'forgetAll',
        2 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\cache\\repository' . "\0" . 'forget',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 22,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 26,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 30,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        1 => 'tags',
        2 => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 29,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\ExportAttendanceExcelJob',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Maatwebsite\\Excel\\Facades\\Excel',
        1 => 'store',
        2 => 34,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\ExportAttendancePdfJob',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Jobs\\SendAttendanceApprovedMailJob',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/AttendanceLogListener.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Listeners\\AttendanceLogListener',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceApprovedMail.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceApprovedMail',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceApprovedMail',
        1 => 'envelope',
        2 => 'Modules\\Attendance\\App\\Mail\\AttendanceApprovedMail',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\mail\\mailables\\envelope' . "\0" . '__construct',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceApprovedMail',
        1 => 'content',
        2 => 'Modules\\Attendance\\App\\Mail\\AttendanceApprovedMail',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\mail\\mailables\\content' . "\0" . '__construct',
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
        1 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckInMail.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedEmailViewCollector' => 
    array (
      0 => 'attendance::emails.check-in',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceCheckInMail',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckOutMail.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedEmailViewCollector' => 
    array (
      0 => 'attendance::emails.check-out',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceCheckOutMail',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceExportReady.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedEmailViewCollector' => 
    array (
      0 => 'attendance::emails.attendance_export',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceExportReady',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceRejectedMail.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedEmailViewCollector' => 
    array (
      0 => 'attendance::emails.rejected',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceRejectedMail',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceSummaryMail.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedEmailViewCollector' => 
    array (
      0 => 'attendance::emails.summary',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Mail\\AttendanceSummaryMail',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Models\\Attendance',
        1 => 'newFactory',
        2 => 'Modules\\Attendance\\App\\Models\\Attendance',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\factories\\factory' . "\0" . 'new',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Model',
        1 => 'addGlobalScope',
        2 => 100,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Notifications/AttendanceCreatedNotification.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
        1 => 'via',
        2 => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
        1 => 'toMail',
        2 => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\notifications\\messages\\simplemessage' . "\0" . 'subject',
          1 => 'm' . "\0" . 'illuminate\\notifications\\messages\\simplemessage' . "\0" . 'line',
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
        1 => 'toArray',
        2 => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 13,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 15,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 17,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 19,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 21,
      ),
      5 => 
      array (
        0 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        1 => 'forgetAll',
        2 => 27,
      ),
      6 => 
      array (
        0 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        1 => 'forgetAll',
        2 => 33,
      ),
      7 => 
      array (
        0 => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
        1 => 'forgetAll',
        2 => 39,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\View',
        1 => 'addNamespace',
        2 => 94,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepository',
        1 => 'find',
        2 => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepository',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'findorfail',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepository',
        1 => 'create',
        2 => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepository',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'create',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Services\\AttendanceDashboardService',
        1 => 'stats',
        2 => 'Modules\\Attendance\\App\\Services\\AttendanceDashboardService',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\cache\\repository' . "\0" . 'remember',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 75,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Attendance\\App\\Transformers\\AttendanceResource',
        1 => 'toArray',
        2 => 'Modules\\Attendance\\App\\Transformers\\AttendanceResource',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'truncate',
        2 => 14,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 71,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 15,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 34,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 35,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 40,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 44,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 49,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 63,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 67,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Mail',
        1 => 'raw',
        2 => 69,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 79,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 83,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 87,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 91,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 109,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceApiTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Sanctum\\Sanctum',
        1 => 'actingAs',
        2 => 19,
      ),
      1 => 
      array (
        0 => 'Laravel\\Sanctum\\Sanctum',
        1 => 'actingAs',
        2 => 44,
      ),
      2 => 
      array (
        0 => 'Laravel\\Sanctum\\Sanctum',
        1 => 'actingAs',
        2 => 72,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceCrudTest.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'product::index',
      1 => 'product::create',
      2 => 'product::show',
      3 => 'product::edit',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'index',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'create',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
      2 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'store',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
        ),
      ),
      3 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'show',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
      4 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'edit',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
      5 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'update',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
        ),
      ),
      6 => 
      array (
        0 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        1 => 'destroy',
        2 => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdated.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Exports\\SalaryExport',
        1 => 'headings',
        2 => 'Modules\\Salary\\App\\Exports\\SalaryExport',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'salary::index',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/StoreSalaryRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
        1 => 'authorize',
        2 => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
        1 => 'rules',
        2 => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/UpdateSalaryRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
        1 => 'authorize',
        2 => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
        1 => 'rules',
        2 => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Queue\\InteractsWithQueue',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        1 => 'getDescriptionForEvent',
        2 => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        1 => 'getTotalSalaryAttribute',
        2 => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        1 => 'create',
        2 => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'create',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        1 => 'find',
        2 => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'findorfail',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Services\\SalaryService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Salary\\App\\Services\\SalaryService',
        1 => 'getDataTable',
        2 => 'Modules\\Salary\\App\\Services\\SalaryService',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\cache\\repository' . "\0" . 'remember',
        ),
      ),
      1 => 
      array (
        0 => 'Modules\\Salary\\App\\Services\\SalaryService',
        1 => 'find',
        2 => 'Modules\\Salary\\App\\Services\\SalaryService',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\builder' . "\0" . 'findorfail',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 138,
      ),
      1 => 
      array (
        0 => 'event',
        1 => 170,
      ),
      2 => 
      array (
        0 => 'event',
        1 => 200,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 131,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 132,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 165,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 166,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 208,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 209,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalaryDatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 17,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'user::users.list',
      1 => 'user::users.add',
      2 => 'user::users.edit',
    ),
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\User\\App\\Http\\Controllers\\UserController',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\User\\App\\Http\\Controllers\\UserController',
        1 => 'index',
        2 => 'Modules\\User\\App\\Http\\Controllers\\UserController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Illuminate\\Notifications\\Notifiable',
        4 => 'Illuminate\\Auth\\MustVerifyEmail',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exports\\AttendanceExport',
        1 => 'collection',
        2 => 'App\\Exports\\AttendanceExport',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.login',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
        1 => 'create',
        2 => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'auth.password',
        1 => 32,
      ),
    ),
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.confirm-password',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController',
        1 => 'show',
        2 => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.verify-email',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.reset-password',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
        1 => 'create',
        2 => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 52,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.forgot-password',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
        1 => 'create',
        2 => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'auth.register',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
        1 => 'create',
        2 => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 46,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 22,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'profile.edit',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Middleware/CheckSalaryPermission.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'abort',
        1 => 21,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => 
    array (
      0 => 
      array (
        0 => 'auth.failed',
        1 => 49,
      ),
      1 => 
      array (
        0 => 'auth.throttle',
        1 => 72,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'authorize',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'event',
        1 => 67,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'hit',
        2 => 46,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Jobs/ProcessSalaryActivityJob.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Jobs\\ProcessSalaryActivityJob',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\View',
        1 => 'composer',
        2 => 29,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/HorizonServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Horizon\\Horizon',
        1 => 'auth',
        2 => 17,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 32,
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/AppLayout.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'layouts.app',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\View\\Components\\AppLayout',
        1 => 'render',
        2 => 'App\\View\\Components\\AppLayout',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/GuestLayout.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'layouts.guest',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\View\\Components\\GuestLayout',
        1 => 'render',
        2 => 'App\\View\\Components\\GuestLayout',
        3 => 
        array (
          0 => 'f' . "\0" . 'view',
        ),
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Commands/CreateAttendanceCommand.php' => 
  array (
    'fileHash' => 'bfa067d3c323ec397afd54d51451e0f5da734ee504d880c7d30dc533e2a899a4',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php' => 
  array (
    'fileHash' => 'b268848de61cda7ae5bfee00c6d43f4b0267e0d09989c6e12240bdf7a1228dba',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php' => 
  array (
    'fileHash' => 'c6abd01f6f051f0a1bf0f94ac9b812ae01f13e5efed76c8bf39ed271be8cc1f0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Queries/GetAttendanceListQuery.php' => 
  array (
    'fileHash' => '0db206a3c27cec4d42013d5c04c083912895a7a43f35fe36217ddafafbacb3be',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Console/AttendanceSummaryCommand.php' => 
  array (
    'fileHash' => '1ba119b01346d7dd82060d0f6f32f73c16484c55c68093b9f87401bc43c870f4',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Console/Kernel.php' => 
  array (
    'fileHash' => 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/DTO/AttendanceDTO.php' => 
  array (
    'fileHash' => 'f88719dfa0143bd59e9a3faedc235928f4a9ef60dd9dbf46a01c42869946d4d1',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Commands/CreateAttendanceCommand.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/Services/AttendanceDomainService.php' => 
  array (
    'fileHash' => 'efd72cc90960ce63cb586d7a26f7a81e6e2ac5dd5f1a3d396f52899c5181aa4b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceApproved.php' => 
  array (
    'fileHash' => 'd520a9503cd21af929be4cbd38dacbe6ea7ccf1aed0f85215d71b081d78b13e5',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceCreated.php' => 
  array (
    'fileHash' => '2b6fb956a48c4c9dd0353e3a37a88da036c7a1114afe9f180239267d3c33be21',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/AttendanceLogListener.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/CalculateAttendanceSalary.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
      4 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/WriteAttendanceLog.php',
      5 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
      6 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceDeleted.php' => 
  array (
    'fileHash' => 'd2fa08d6b43450e7c4ec5cf309dfa154c95a501125ed0ba261387ceb7fcac55a',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceRejected.php' => 
  array (
    'fileHash' => 'e0db7ae95d6ecb542b3c09798f911be37fdb8e091cc573a1775c11422f68bb5b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceUpdated.php' => 
  array (
    'fileHash' => '8ae05ae78c8e6e5be208d038ae3e3b94fabcbd72b66349b7eaf72d909567448c',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php' => 
  array (
    'fileHash' => '71bb2b45f4c0c51cfeceaf07698b476b313531b7b67803d767437a59fb398629',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceExportController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php' => 
  array (
    'fileHash' => '856925e91b609ed5278be51d3597cad5fbe24fdbcec8ffd07a9065f2e52f0dd0',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php' => 
  array (
    'fileHash' => '6ce750570206e6a95a6cb57f005aef8b72e8d083f24c45ef957f050aa9a41fb0',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php' => 
  array (
    'fileHash' => '066b34c40af7e618b49537ee365cf987943f31e2901025a405a6698aed162edf',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceExportController.php' => 
  array (
    'fileHash' => '779b298dfc5d2e603253522fd9d39f23fac9ebad69df50a74521e7df3ec4b19f',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php' => 
  array (
    'fileHash' => '33773602772734f92761aefc46ecf8038bb1430cf6bdd099f975ccb762548e11',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php' => 
  array (
    'fileHash' => '700534244c6c4b91781aeb06352d633ddb5f3df97dc68653b14bdb6bfea64e58',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/StoreAttendanceRequest.php' => 
  array (
    'fileHash' => '42b3baf5f60b4c7d1dd3fa5fd402b2fee7c44f8fc95080ec35d65f3e337b9330',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/UpdateAttendanceRequest.php' => 
  array (
    'fileHash' => '9f6650486b8ac099b9f7ff2c725ec810fe6b7576c4597181ee5937323ce02740',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceCache.php' => 
  array (
    'fileHash' => '1de569b6009a0ead1457ab754fcc5689d451b6e893ee40ae31cdeae163cd42ca',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceDashboardCache.php' => 
  array (
    'fileHash' => 'c68823c604b1316fe469865ba9fef5bb51a05cf8e7573afa2152a0fd931dc82b',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php' => 
  array (
    'fileHash' => '65dd11a463525c7854757bc35e764bd674c64ceda123e14ecfb34a4899f78cce',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Console/AttendanceSummaryCommand.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php' => 
  array (
    'fileHash' => '821edb73ff0f7ada010480be2b4733d40e1a039561c8427e223dc44ddaa9c921',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php' => 
  array (
    'fileHash' => '0228036a13bb87bc7740fb1b87c961ecd115c49340c9a7075ce2ecca831ad5c6',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php' => 
  array (
    'fileHash' => '6c1db2d81a6d461a9c359e78d064673e154407659fed73dc5ba82426f21464d9',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/AttendanceLogListener.php' => 
  array (
    'fileHash' => '5f05c50f3c2438b5cbc762a642791670a910812bc7d8a61267dff4e3423dda12',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/CalculateAttendanceSalary.php' => 
  array (
    'fileHash' => 'a3c2fb21993a0395b06251957431c052cb0ba85cf0a29302dbaa451d98b4ab5f',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php' => 
  array (
    'fileHash' => '05406e85bade5e79733692557d9310dcba7a87b729d0af6327042715bf8cbd92',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/WriteAttendanceLog.php' => 
  array (
    'fileHash' => 'b7b44a07fa91e84a4470f3f356133dbc354eee2cbc2c737f7f54645a9b63d701',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceApprovedMail.php' => 
  array (
    'fileHash' => '49b299c1f2d1e4f9ec8e0922b2c67ecdeca87f6a814fdef704e76a269dfcfe22',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckInMail.php' => 
  array (
    'fileHash' => '5a010b19716d887e336fe507e9bef5697850ca5b637a01b79ddd41e02ebfd7ef',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckOutMail.php' => 
  array (
    'fileHash' => 'c1e2472a1b390ba2ff0765e70f2ce2f5a9c4ab8605a6111ebf5e299ef46fe83f',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceExportReady.php' => 
  array (
    'fileHash' => 'a90f3baa079a03ba09da560cd68d7400643151a04a06fe7067caaa3369e0d1af',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceRejectedMail.php' => 
  array (
    'fileHash' => '4de101de3125f118015dcc5662c8621a48dbd995c2766764a59580edbbdef3ad',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceSummaryMail.php' => 
  array (
    'fileHash' => '171991fae715e3ba4c1cddf4b42dda1b56a0cd64ea60a75d174ca2fe83178710',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php' => 
  array (
    'fileHash' => 'efae4dd3f69d18849eee4f001a8a8cbd6bc4175808ad4d266e99d06cd6ea3753',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceApproved.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceCreated.php',
      4 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceRejected.php',
      5 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceUpdated.php',
      6 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php',
      7 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php',
      8 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php',
      9 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      10 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php',
      11 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php',
      12 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceCache.php',
      13 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php',
      14 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/AttendanceLogListener.php',
      15 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/CalculateAttendanceSalary.php',
      16 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
      17 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/WriteAttendanceLog.php',
      18 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckOutMail.php',
      19 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php',
      20 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Policies/AttendancePolicy.php',
      21 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php',
      22 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
      23 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php',
      24 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php',
      25 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
      26 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceSummaryService.php',
      27 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/Contracts/AttendanceServiceInterface.php',
      28 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Factories/AttendanceFactory.php',
      29 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceSeeder.php',
      30 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceApiTest.php',
      31 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceCrudTest.php',
      32 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php',
      33 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php',
      34 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
      35 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Policies/AttendancePolicy.php',
      36 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AppServiceProvider.php',
      37 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AuthServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Notifications/AttendanceCreatedNotification.php' => 
  array (
    'fileHash' => '978d19f3dbfbded6640201c8026718d14e4763686fef9f96ed40942194972b2d',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php' => 
  array (
    'fileHash' => 'e38086867f285e8660428096da8a175200097c977201f8acce11288116c2e8fd',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Policies/AttendancePolicy.php' => 
  array (
    'fileHash' => '1c7fd7018ebe550b4d4bda1aeba0fa69a5826fae61f9d3575f06a54f95cd0f11',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AuthServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php' => 
  array (
    'fileHash' => '412f05d02b4c25811e8cf600e183ce2a63b7dc7e46aef7d093be100a48f38227',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => '4a056ff70065b2fa8d3009b10a445a4a80af02a2e61b469c087922c18a56a780',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php' => 
  array (
    'fileHash' => '02d868275d96c95c28c2cdfce85c85a5334ac3297ace35d78c9f859eb46e5784',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => 'c1aa28e8d4252b9fc6d6a1562b368e559e41749c62cc3f9828da88aadd661165',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php' => 
  array (
    'fileHash' => '125a23609c6ed47af271d0659b3b03f4583cb8ee788e734d8e137bc6f23d0acf',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepositoryInterface.php' => 
  array (
    'fileHash' => 'a034d0e7ee1694d94428f818c431b6bbea8749eca611a0c4dad76a4c83b52067',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php' => 
  array (
    'fileHash' => '910cecb4c1b4e95a533e4d0e48119fd7ca52fd6274c8885070a93392e21c42ce',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceCalculator.php' => 
  array (
    'fileHash' => '04ea322e7b50f9c661022b951d9bf315c1df0ac667d01fada89efd4d5d17baef',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/Services/AttendanceDomainService.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceFeatureTest.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php' => 
  array (
    'fileHash' => 'f6827cb065c50b66980add7a04622ba48e0a4e718a2034733afd8d3327e6787b',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php' => 
  array (
    'fileHash' => '5c571c19fa44f9358412523ae1e3532dc09f72fe6ed375039f9c723a6b667d59',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceSummaryService.php' => 
  array (
    'fileHash' => '1e46b9fb4e10b81708c797e293a1bd044688d77643af9d44a5e98fec0dc8a35e',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/Contracts/AttendanceServiceInterface.php' => 
  array (
    'fileHash' => '5beb0ae5fc1f2d4040d5cbe49e5ed7897eec9b468e843fdf5eef0d55bf0b7661',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php' => 
  array (
    'fileHash' => 'a267ef0f817c9fd3472b7ce1fdc399b0df595c77e86953f94881431a875f21da',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php' => 
  array (
    'fileHash' => 'cd1e7ae8f3e75190cea14b43e08d94e10a95bd3ac667f30e27b2f22d571a8bbd',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Factories/AttendanceFactory.php' => 
  array (
    'fileHash' => 'c6c423fc84f24c1a6f54fdb06ef7f5086c39ab23219298b24728120ec2834a95',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceDatabaseSeeder.php' => 
  array (
    'fileHash' => '93d3f1001bc3ed1c9eb26e3185fd96e68b109a78a4e0b3ef966d0b580dd132e6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceSeeder.php' => 
  array (
    'fileHash' => '05300f68aa0637fac3ff46c5be0cd0f427e7870c740dffc8fd9d362d0b389b72',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/DatabaseSeeder.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => 'd380ca608e5889f42eaa261d528beecdb595cdcf13cd34510f9c7d85b00920cf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/config/config.php' => 
  array (
    'fileHash' => 'a1f40baf43d2a14681537d77f7e0b99a7f854af4f8db5d61dbb0cf4edd82207c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/components/layouts/master.blade.php' => 
  array (
    'fileHash' => '6624f13ae0b6130145a448796de9a7fe4630c2f4bae1a25a9395d67170343529',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/attendance-approved.blade.php' => 
  array (
    'fileHash' => '2cb88e1dc3aa44291f62a743215c817d3acb3db71026b816dc6000c5e4ddd534',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/attendance_export.blade.php' => 
  array (
    'fileHash' => '3d5a63363b82b2174be6aa60595133f646131f5f5675b04b4328034a971fda37',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/check-in.blade.php' => 
  array (
    'fileHash' => '45e910d110935c1130ae667e9dbfa9d63ae5e5693a5de22311bf10eb3c183e2b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/check-out.blade.php' => 
  array (
    'fileHash' => 'c7edc1d6496a6e527e3233298b7e6f263c4b2378d6d2b8f943133f699bd65d13',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/rejected.blade.php' => 
  array (
    'fileHash' => '51de433a0c02be09152daaa57f9d7edd848c5af3b5367b554d22a4fb47b1b419',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/summary.blade.php' => 
  array (
    'fileHash' => 'e3d69b0f54dc8bb1c45c3742ce11d6abc69300d615214f9425898d1fdf847058',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/index.blade.php' => 
  array (
    'fileHash' => '2f7b2a0a566f905ae2bcbc9484717bb4a61046091173ecf338275ecf204bada6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/pdf/attendance.blade.php' => 
  array (
    'fileHash' => '090c10919f3da0fd2338bfd6725b703a18d990514049685ae8f6c50fb7f777d4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php' => 
  array (
    'fileHash' => 'd1e751e4f01237e6d4e316c86b3d5159b515243ec8bce9bb4a3c2ff129f451d7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/console.php' => 
  array (
    'fileHash' => '5a9f430d36c29059c51e0e9eb6ab4ac91f93993b1b0b8b4a3557b156a50eded2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php' => 
  array (
    'fileHash' => '9c99e0e42d52a7ce5e06aa755d4b30ce2d2a7d514b24dc8d46c14fc8f0bac668',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceApiTest.php' => 
  array (
    'fileHash' => '61203eaa7843f74ecaaf0bbca5ef1e71eb28683bf3b170e8798d0e4f6b14cfa4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceCrudTest.php' => 
  array (
    'fileHash' => '67e31ade670635fd18c91d4bba1e5d6475c8e64f2fb699601c6dce94c2f99b8c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php' => 
  array (
    'fileHash' => '588eb5674df82f11afd784f3443e8f712790d4ff3bfb25702aa23bac11fcfb60',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php' => 
  array (
    'fileHash' => 'e7dcba110dd72ccb3a0dcf6d1331b0caea3e23eb1a0495c74d5216daa498aa3b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceFeatureTest.php' => 
  array (
    'fileHash' => '6e3caba6ef6c293cda541c4bd3a4f2f3a0dd07f9598a45ccb2d8b361fd2ea69c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceServiceTest.php' => 
  array (
    'fileHash' => 'bdf7f2951f77470e56165e724bce7c2eccb169ffa04f69d3ebe72682ca673bed',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php' => 
  array (
    'fileHash' => 'f6dd4b4282da3a7680811f2a48c9c19aae5a038f8363d0a2af4102bf7d55f900',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/api.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => 'bca92dcfbe01435b314df66e03f86aa45c162270607054427e83971cf27b0845',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/ProductServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/ProductServiceProvider.php' => 
  array (
    'fileHash' => '681c4647c338bd3b1139a053f86879b2baf0ee892479cec1ac98ab6c42097e74',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => '7dfac8b094f88c41f7f37e758d046297da3b223ae66e3e36ba428e8b176f05cb',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/ProductServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/Database/Seeders/ProductDatabaseSeeder.php' => 
  array (
    'fileHash' => '015d62c201e8063b46d5e4902e6aad9528dfc4fa8be99d183b29b56e2aa4cbbd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/config/config.php' => 
  array (
    'fileHash' => 'dfa4b8f1aecb25cfe802e7830fe3bb499249b09c5e561b0fe2b253d52a951781',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/resources/views/components/layouts/master.blade.php' => 
  array (
    'fileHash' => 'ec7d186628762007b90916e07abec36b3acba2ac34690f6209a8658e16642296',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/resources/views/index.blade.php' => 
  array (
    'fileHash' => 'fffcac2d4de9246769a458e7f6049bf3184d44ef4a756e21465894f4f81d6b58',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/api.php' => 
  array (
    'fileHash' => '974e9a168a49a822179125dd8c2a644609e971189468576033a242f2625b735c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/web.php' => 
  array (
    'fileHash' => '1bb73c5816e9591570ec197eb52c20bc886c4a55d93bdf5fa55ab4b55aa3f80f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdated.php' => 
  array (
    'fileHash' => '38b422580ddee6d8f02331832f57336e9b04fd8853ff9525696969c4025d9067',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/EventServiceProvider.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdatedBroadcast.php' => 
  array (
    'fileHash' => '9b91b12b36505db3cba164d0f3527b37a92d1e5fdb4a83c47dbca2c3b1ee6bb9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php' => 
  array (
    'fileHash' => '0cbd711c0325a245ea92d320461a96cfc4304afd41a6afa6c916d613dab404c0',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php' => 
  array (
    'fileHash' => 'ad277fb3ccf88733f9baf4e4bf31d5ce3adb4d62940d575d81324b4ac638e30e',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/api.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/StoreSalaryRequest.php' => 
  array (
    'fileHash' => 'ea912281a1c3019e374351e53324ad464f556977e62327c54fd109782952ed90',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/UpdateSalaryRequest.php' => 
  array (
    'fileHash' => '9b9c726eb42a3e469966ec37aef96180c9909f320f8ed8e20706a8387fcd85ae',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php' => 
  array (
    'fileHash' => '8e417a37ce24fda566da9ef80b428be8ebb40662605695057bf4bb4fe8ada1dc',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/EventServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php' => 
  array (
    'fileHash' => 'fbe3246924a6b0698eb0338164f2b387ce399ad60765f2490dfb825ffbca828a',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php',
      4 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalaryDatabaseSeeder.php',
      5 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => '877c33c86851975a856a9675a67390e06f84de413beb52c702c865379321754b',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/SalaryServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => 'd089cd9e37763b5e846bb5142f471ea6063325ddead7b658b772f99a7b247d0e',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/SalaryServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/SalaryServiceProvider.php' => 
  array (
    'fileHash' => '3397a7ae6e60c99f526c8bddeed4bf2993997923ebd97fce508e675b34929cbb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php' => 
  array (
    'fileHash' => '330e522caf73ec5462040818b33e04989a6911f0fe335f95e4ab3522bc986203',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/SalaryServiceProvider.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php' => 
  array (
    'fileHash' => '5d98af527645bd107f1479a6f548a63f3303c1ae8340864a1ec2b75028127a83',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalaryDatabaseSeeder.php' => 
  array (
    'fileHash' => 'cc8aaf72ac943be0146c1493efce52e700abef2bfa31c7cff48a905c3e53ed9e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalarySeeder.php' => 
  array (
    'fileHash' => 'a2a73e37a3b700127d4d1bde525428e2ed23aafdd91aa1d2c7adc6818c63f8b1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/config/config.php' => 
  array (
    'fileHash' => 'aa75e181cb8969bba4e7027882a9c8710f0213272e1ff5c9a87b4ad3367c8a5c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/resources/views/components/layouts/master.blade.php' => 
  array (
    'fileHash' => 'f761448490b333f8aec43eabbef4f5c28af0b049c34d4078e7a59f056a813bc3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/resources/views/index.blade.php' => 
  array (
    'fileHash' => 'b5d3659867dfd2cea0b4f2049d7c98666143721debf5942551fe91b16d7a44fb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/api.php' => 
  array (
    'fileHash' => '58c61d3f4d9406f2e40d546cbf3add9784a8bdd3c256db9fa9ed8b8cffbc126f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/web.php' => 
  array (
    'fileHash' => '8d580ee7467e46549c0ccdacb53d07c9e373353087b670932239c5ac671d092e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/AuthController.php' => 
  array (
    'fileHash' => 'b12f25eca81a7420ec8f56c26f5366d616c01ef2e17dd863eff56bf601a83691',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php' => 
  array (
    'fileHash' => 'dead2bac483b3cf3d74f9ca5f27d8c9a94cf46ffa3c202b119cc0a2ad62be776',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/api.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/web.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Part.php' => 
  array (
    'fileHash' => 'd8d9f2a8a1fc396aaf096848055a28613231ae91528e2698c7615f577933703b',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Team.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Position.php' => 
  array (
    'fileHash' => '0c6a49b279773f4698df2743d06ba78de81983207b634c234a7c4f459bdcbb3d',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Team.php' => 
  array (
    'fileHash' => '8f98b29b036cbf9f8e213bce079c1888611c416cc4b49b815b250c3fbb51ef14',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/TypeAccount.php' => 
  array (
    'fileHash' => '847477e8a8cb4a400faf64b78d56e2f539497a3149bfe36f73a003f70f56b42e',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php' => 
  array (
    'fileHash' => '8ec1819b5f4b22a3e7271af0fc8f15c718733a220071285ca135c7f60debb9ae',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/StoreAttendanceRequest.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/UpdateAttendanceRequest.php',
      4 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php',
      5 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php',
      6 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php',
      7 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceApprovedMail.php',
      8 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckInMail.php',
      9 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceRejectedMail.php',
      10 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php',
      11 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Policies/AttendancePolicy.php',
      12 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php',
      13 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Factories/AttendanceFactory.php',
      14 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceSeeder.php',
      15 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceApiTest.php',
      16 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceCrudTest.php',
      17 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php',
      18 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php',
      19 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
      20 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php',
      21 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php',
      22 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalaryDatabaseSeeder.php',
      23 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/AuthController.php',
      24 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php',
      25 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Part.php',
      26 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Position.php',
      27 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Team.php',
      28 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/TypeAccount.php',
      29 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/Interfaces/UserRepositoryInterface.php',
      30 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
      31 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Factories/UserFactory.php',
      32 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      33 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      34 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      35 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/NewPasswordController.php',
      36 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordController.php',
      37 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/RegisteredUserController.php',
      38 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/VerifyEmailController.php',
      39 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php',
      40 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/ProfileUpdateRequest.php',
      41 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Policies/AttendancePolicy.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/EventServiceProvider.php' => 
  array (
    'fileHash' => '28c16f569e32943bf0358c5180ef2f633eff00ba2ec5403d302d0e89be7190b0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/RouteServiceProvider.php' => 
  array (
    'fileHash' => '8e3dc55b8ae5bdceb18930e0fed4d47334d67099115a04a8e80f039311661742',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/UserServiceProvider.php' => 
  array (
    'fileHash' => '8342ef18848a373042130e84d1b09d021e5e5c9eb326615339433908abaa3f05',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/Interfaces/UserRepositoryInterface.php' => 
  array (
    'fileHash' => '490e597ffe8f3714745da00bdb7b8dad8ac51b3a6380a7574ecf49d3e965af8c',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/UserServiceProvider.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php' => 
  array (
    'fileHash' => '81fa72a3d3b6fe321de6e79aa9a5f6a9bc4c352a4ec4f56843df8a6b24610498',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/UserServiceProvider.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Factories/UserFactory.php' => 
  array (
    'fileHash' => '38e625c08f36f99f612776cb941d7a55bcae0004372eac9f1cf2e6ea264609e9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Seeders/UserDatabaseSeeder.php' => 
  array (
    'fileHash' => '6baebc850da55a1aa0b5045d20062baaf2113655635ffeb8b43c5fc7fae179d2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/config/config.php' => 
  array (
    'fileHash' => '484b52a9ccbdeb81d71491bc5aeec707442b61bf6f909ddb51a74a6b763d6f12',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/components/layouts/master.blade.php' => 
  array (
    'fileHash' => 'bf9b4c09e4977575c0160a2bf791df2c2755d8f847b846842f80b74160f889e4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/emails/attendance-approved.blade.php' => 
  array (
    'fileHash' => '712e3a6500661b9f702b1c8d81d2323d524cb7d3aae779ee21f05ad1563d2607',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/index.blade.php' => 
  array (
    'fileHash' => 'ad89f2b82e2f2206732c5a7730b21ef372df2c12e632210fafa74aa808b172f8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/add.blade.php' => 
  array (
    'fileHash' => '90628d4ca9bd661610a463fe1b71baa6824aaf99fc595812663b6e69aae6e98b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/edit.blade.php' => 
  array (
    'fileHash' => '89d0be060a71dc4d3badf053a271c88e863e6ae0723f248a029aff10325d59ab',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/form.blade.php' => 
  array (
    'fileHash' => '6af12e00dbce9807ec4799f42ba829d8cff3b4b83239fd942f5f276964282383',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/list.blade.php' => 
  array (
    'fileHash' => '7fb6fd699e16f0b1a414ef0b814b1a6fa0cc31785930a7a3fede018d97d628fc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/api.php' => 
  array (
    'fileHash' => '1cad61810f5889dca8079690df2a4e254dfde5bad1f0299db0149c830fd66029',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/web.php' => 
  array (
    'fileHash' => '7a38ebca3f7fde0749203f2679a428ee9fb28e03195c4a9570590b21314a2e46',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php' => 
  array (
    'fileHash' => '62570086964068b48563832a6add52c6a60b0b0c8f6f23ff6dbb9a3207cb123f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    'fileHash' => 'aaea7217b1eeeaa061b07c4e820d995fe180e6816e5866a62295c2f6f0c12f4b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    'fileHash' => '7322ce4e2ccdf76d1583cd84d27f5708436ffc91d7d00ee7abbde40f3e403ba7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    'fileHash' => '24d5704b7534ad365800a33e7c537bf63467f1271c4bc801b351c8a05a77e5b9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    'fileHash' => '6b5b4b75fc25c43c1b31106f63f7b1f854b729527b2f5c067f122f4857f85e3a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    'fileHash' => '1fce2595f7afd4afe933560be00b2a309a8320939eae35425eb7dfe5efc20956',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    'fileHash' => '81f68e0aa74f66038082364499dde9a1b1d93ca961448bd8b46bc77aa17117fd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    'fileHash' => '82a07fee8b04223bf3587e5d3458de77275335104efa304aaf9e4a2dad1dea8c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    'fileHash' => 'b7364de7788c2f07606941eb6afae9fa8cd2c92ee00a0d0617a4ab9838d7f413',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    'fileHash' => '5f6080a239709740135d9138085ceb1857c5570a0fea35e62c976fc90929631e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php',
      1 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php',
      2 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php',
      3 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php',
      4 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/api.php',
      5 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/web.php',
      6 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php',
      7 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/api.php',
      8 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/web.php',
      9 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/AuthController.php',
      10 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php',
      11 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/api.php',
      12 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/web.php',
      13 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
      14 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/ConfirmablePasswordController.php',
      15 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationNotificationController.php',
      16 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationPromptController.php',
      17 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/NewPasswordController.php',
      18 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordController.php',
      19 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordResetLinkController.php',
      20 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/RegisteredUserController.php',
      21 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/VerifyEmailController.php',
      22 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php',
      23 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/SwaggerController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php' => 
  array (
    'fileHash' => '01586a456c9162ecf08234897b47ab29828e67b185e68983932ecc41a76ed355',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/SwaggerController.php' => 
  array (
    'fileHash' => '05bbac358cbc7a2dd0dcb7c51280128e79db9d398995493793b43690664a976c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Middleware/CheckSalaryPermission.php' => 
  array (
    'fileHash' => 'bb44c13df5a202dc1c6188012007d8e1d2851a29f9fe0dc62117a9fec5b0ef26',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    'fileHash' => 'd64740bf9748fcd0b33a14d72aa42ec2868f2579746b3e1701426006c7eaa6a3',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/AuthenticatedSessionController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    'fileHash' => '0ddcb3f003b516aabfc821f2d3fd92c10c000df15fd17d783f82895ad2d53edf',
    'dependentFiles' => 
    array (
      0 => '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php',
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Jobs/ProcessSalaryActivityJob.php' => 
  array (
    'fileHash' => '8677ade17bc6906af7f85f6255b709105d5b5db1a8e9010622b2383be16f0e8a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Policies/AttendancePolicy.php' => 
  array (
    'fileHash' => '225110bb96e7070c4ac28ffaab2d06cd3ed213a97c61cb60e9ca97cdbda33550',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '9fdc1b0a61702ac0c5867c478753fd56fb82d6f166184e599050bf09f3d023a8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AuthServiceProvider.php' => 
  array (
    'fileHash' => 'fcf6aa384dee239f24271332ca89dac086d90cd2cd6766daae926bc4284e0cc0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/HorizonServiceProvider.php' => 
  array (
    'fileHash' => 'aae040b6547f76af60c4381762d076c25f6a7b2c755219243368ab459bb3982c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Swagger/OpenApiSpec.php' => 
  array (
    'fileHash' => 'c8244c62a407951ce9560c353dcb74c811d95b7594221ee410666344ebe5283d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/AppLayout.php' => 
  array (
    'fileHash' => 'c57c4ac36e5603ca09b66674a3a01b427528948ecf1f7a93d06d52818d9319b5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/GuestLayout.php' => 
  array (
    'fileHash' => '35663740cd39dc5f726b24e402babb41d0af62e09567c0e717235586fa3d9f80',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'packageDependencies' => array (
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/UpdateAttendanceRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/WriteAttendanceLog.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/log',
    3 => 'monolog/monolog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nwidart/laravel-modules',
    2 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/simple-cache',
    3 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/DatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/components/layouts/master.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/attendance_export.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/console.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
    2 => 'symfony/console',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/api.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalaryDatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'nesbot/carbon',
    4 => 'fakerphp/faker',
    5 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/config/config.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/resources/views/index.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Part.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/add.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/web.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Jobs/ProcessSalaryActivityJob.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Queries/GetAttendanceListQuery.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceCreated.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceRejected.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php' => 
  array (
    0 => 'maatwebsite/excel',
    1 => 'laravel/framework',
    2 => 'spatie/laravel-activitylog',
    3 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'nesbot/carbon',
    4 => 'symfony/http-foundation',
    5 => 'spatie/laravel-activitylog',
    6 => 'symfony/mailer',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckInMail.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceExportReady.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php' => 
  array (
    0 => 'nwidart/laravel-modules',
    1 => 'laravel/framework',
    2 => 'symfony/console',
    3 => 'psr/container',
    4 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/container',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/config/config.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/index.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/web.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
    2 => 'symfony/http-foundation',
    3 => 'symfony/mailer',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Position.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/edit.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/routes/api.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
    2 => 'spatie/laravel-activitylog',
    3 => 'psr/simple-cache',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/AppLayout.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Console/AttendanceSummaryCommand.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceApproved.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceUpdated.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'nesbot/carbon',
    3 => 'symfony/http-foundation',
    4 => 'psr/log',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Policies/AttendancePolicy.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/Contracts/AttendanceServiceInterface.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceApiTest.php' => 
  array (
    0 => 'phpunit/phpunit',
    1 => 'laravel/framework',
    2 => 'symfony/http-foundation',
    3 => 'nesbot/carbon',
    4 => 'laravel/sanctum',
    5 => 'spatie/laravel-permission',
    6 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/config/config.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php' => 
  array (
    0 => 'maatwebsite/excel',
    1 => 'laravel/framework',
    2 => 'spatie/laravel-activitylog',
    3 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'spatie/laravel-activitylog',
    4 => 'yajra/laravel-datatables-oracle',
    5 => 'symfony/http-foundation',
    6 => 'nesbot/carbon',
    7 => 'maatwebsite/excel',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
    2 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Team.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Seeders/UserDatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php' => 
  array (
    0 => 'maatwebsite/excel',
    1 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/SwaggerController.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Swagger/OpenApiSpec.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/Services/AttendanceDomainService.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'symfony/http-foundation',
    4 => 'psr/simple-cache',
    5 => 'spatie/laravel-activitylog',
    6 => 'nesbot/carbon',
    7 => 'yajra/laravel-datatables-oracle',
    8 => 'zircote/swagger-php',
    9 => 'psr/log',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
    2 => 'nesbot/carbon',
    3 => 'psr/log',
    4 => 'symfony/mailer',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckOutMail.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
    2 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/log',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php' => 
  array (
    0 => 'phpunit/phpunit',
    1 => 'laravel/framework',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceServiceTest.php' => 
  array (
    0 => 'phpunit/phpunit',
    1 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nwidart/laravel-modules',
    2 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'symfony/http-foundation',
    3 => 'laravel/sanctum',
    4 => 'spatie/laravel-permission',
    5 => 'psr/log',
    6 => 'monolog/monolog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/SalaryServiceProvider.php' => 
  array (
    0 => 'nwidart/laravel-modules',
    1 => 'laravel/framework',
    2 => 'psr/container',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalarySeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/Interfaces/UserRepositoryInterface.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/config/config.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/emails/attendance-approved.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Commands/CreateAttendanceCommand.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Console/Kernel.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceExportController.php' => 
  array (
    0 => 'maatwebsite/excel',
    1 => 'symfony/http-foundation',
    2 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/AttendanceLogListener.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/log',
    3 => 'monolog/monolog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceApprovedMail.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceSummaryService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
    2 => 'spatie/laravel-activitylog',
    3 => 'psr/simple-cache',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceDatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/check-out.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceCrudTest.php' => 
  array (
    0 => 'phpunit/phpunit',
    1 => 'laravel/framework',
    2 => 'nesbot/carbon',
    3 => 'spatie/laravel-activitylog',
    4 => 'laravel/sanctum',
    5 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/resources/views/components/layouts/master.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nwidart/laravel-modules',
    2 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/TypeAccount.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Factories/UserFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'fakerphp/faker',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/form.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Middleware/CheckSalaryPermission.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceDeleted.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceCache.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/simple-cache',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceDashboardCache.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/simple-cache',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'nesbot/carbon',
    3 => 'league/flysystem',
    4 => 'barryvdh/laravel-dompdf',
    5 => 'dompdf/dompdf',
    6 => 'laravel/sanctum',
    7 => 'spatie/laravel-permission',
    8 => 'symfony/mailer',
    9 => 'psr/http-message',
    10 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceRejectedMail.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Notifications/AttendanceCreatedNotification.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceCalculator.php' => 
  array (
    0 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/rejected.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/Database/Seeders/ProductDatabaseSeeder.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdated.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/resources/views/components/layouts/master.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nwidart/laravel-modules',
    2 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/index.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/users/list.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Policies/AttendancePolicy.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/GuestLayout.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/DTO/AttendanceDTO.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceSummaryMail.php' => 
  array (
    0 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepositoryInterface.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/simple-cache',
    3 => 'nesbot/carbon',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Factories/AttendanceFactory.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceSeeder.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'nesbot/carbon',
    4 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/check-in.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/summary.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/pdf/attendance.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/routes/api.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceFeatureTest.php' => 
  array (
    0 => 'phpunit/phpunit',
    1 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/ProductServiceProvider.php' => 
  array (
    0 => 'nwidart/laravel-modules',
    1 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/routes/web.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdatedBroadcast.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/UpdateSalaryRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/web.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/resources/views/components/layouts/master.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/HorizonServiceProvider.php' => 
  array (
    0 => 'laravel/horizon',
    1 => 'laravel/framework',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/log',
    3 => 'barryvdh/laravel-dompdf',
    4 => 'dompdf/dompdf',
    5 => 'symfony/http-foundation',
    6 => 'symfony/var-dumper',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/StoreAttendanceRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/log',
    2 => 'nesbot/carbon',
    3 => 'maatwebsite/excel',
    4 => 'laravel/sanctum',
    5 => 'spatie/laravel-permission',
    6 => 'symfony/mailer',
    7 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'symfony/mailer',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/CalculateAttendanceSalary.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
    2 => 'psr/log',
    3 => 'monolog/monolog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/log',
    2 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/resources/views/emails/attendance-approved.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php' => 
  array (
    0 => 'phpunit/phpunit',
    1 => 'laravel/framework',
    2 => 'spatie/laravel-activitylog',
    3 => 'nesbot/carbon',
    4 => 'laravel/sanctum',
    5 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/resources/views/index.blade.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/StoreSalaryRequest.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/routes/api.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/AuthController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'laravel/sanctum',
    2 => 'spatie/laravel-permission',
    3 => 'spatie/laravel-activitylog',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/UserServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nwidart/laravel-modules',
    2 => 'psr/container',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'laravel/sanctum',
    3 => 'spatie/laravel-permission',
    4 => 'yajra/laravel-datatables-oracle',
    5 => 'league/flysystem',
    6 => 'psr/http-message',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Controller.php' => 
  array (
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AuthServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'spatie/laravel-activitylog',
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Commands/CreateAttendanceCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Application\\Commands\\CreateAttendanceCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dto',
               'type' => 'Modules\\Attendance\\App\\Domain\\DTO\\AttendanceDTO',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/CreateAttendanceHandler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Application\\Handlers\\CreateAttendanceHandler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Attendance\\App\\Models\\Attendance',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'command',
               'type' => 'Modules\\Attendance\\App\\Application\\Commands\\CreateAttendanceCommand',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Handlers/GetAttendanceListHandler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Application\\Handlers\\GetAttendanceListHandler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Application/Queries/GetAttendanceListQuery.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Application\\Queries\\GetAttendanceListQuery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Console/AttendanceSummaryCommand.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Console\\AttendanceSummaryCommand',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/DTO/AttendanceDTO.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Domain\\DTO\\AttendanceDTO',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'workDate',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checkIn',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checkOut',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'status',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Domain/Services/AttendanceDomainService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Domain\\Services\\AttendanceDomainService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'calculate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checkIn',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checkOut',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceApproved.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Events\\AttendanceApproved',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Broadcasting\\ShouldBroadcastNow',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'attendance',
          ),
           'phpDoc' => NULL,
           'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastOn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastAs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastWith',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceCreated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Broadcasting\\ShouldBroadcastNow',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastOn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastAs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastWith',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceDeleted.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Events\\AttendanceDeleted',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Broadcasting\\ShouldBroadcastNow',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastOn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastAs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastWith',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceRejected.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Events\\AttendanceRejected',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Broadcasting\\ShouldBroadcastNow',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastOn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastAs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastWith',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Events/AttendanceUpdated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Events\\AttendanceUpdated',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Broadcasting\\ShouldBroadcastNow',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Events\\Dispatchable',
        1 => 'Illuminate\\Broadcasting\\InteractsWithSockets',
        2 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastOn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastAs',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'broadcastWith',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Exports/AttendanceExport.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Exports\\AttendanceExport',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Maatwebsite\\Excel\\Concerns\\FromCollection',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'collection',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceActionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Controllers\\AttendanceActionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkIn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkOut',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceApprovalController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Controllers\\AttendanceApprovalController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'approve',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'reject',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Controllers\\AttendanceController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/attendances/dashboard\'',
                'summary' => '\'Dashboard Attendance\'',
                'tags' => '[\'Attendance\']',
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Response',
               'args' => 
              array (
                'response' => '200',
                'description' => '\'Success\'',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'audit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendanceService',
               'type' => 'Modules\\Attendance\\App\\Services\\AttendanceService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dashboardService',
               'type' => 'Modules\\Attendance\\App\\Services\\AttendanceDashboardService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'apiList',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/attendances\'',
                'summary' => '\'Attendance List\'',
                'tags' => '[\'Attendance\']',
                'security' => '[[\'bearerAuth\' => []]]',
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Response',
               'args' => 
              array (
                'response' => '200',
                'description' => '\'Success\'',
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'data',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Attendance\\App\\Http\\Requests\\StoreAttendanceRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/attendances\'',
                'summary' => '\'Create Attendance\'',
                'tags' => '[\'Attendance\']',
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\RequestBody',
               'args' => 
              array (
                'required' => 'true',
                'content' => 'new \\OpenApi\\Attributes\\JsonContent(required: [\'user_id\', \'work_date\', \'check_in\', \'check_out\', \'status\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'user_id\', type: \'integer\', example: 1), new \\OpenApi\\Attributes\\Property(property: \'work_date\', type: \'string\', example: \'2026-06-15\'), new \\OpenApi\\Attributes\\Property(property: \'check_in\', type: \'string\', example: \'2026-06-15 08:00:00\'), new \\OpenApi\\Attributes\\Property(property: \'check_out\', type: \'string\', example: \'2026-06-15 17:00:00\'), new \\OpenApi\\Attributes\\Property(property: \'status\', type: \'string\', example: \'Present\')])',
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Response',
               'args' => 
              array (
                'response' => '200',
                'description' => '\'Success\'',
              ),
            )),
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Attendance\\App\\Http\\Requests\\UpdateAttendanceRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Put',
               'args' => 
              array (
                'path' => '\'/api/v1/attendances/{id}\'',
                'summary' => '\'Update Attendance\'',
                'tags' => '[\'Attendance\']',
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Parameter',
               'args' => 
              array (
                'name' => '\'id\'',
                'in' => '\'path\'',
                'required' => 'true',
                'schema' => 'new \\OpenApi\\Attributes\\Schema(type: \'integer\')',
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Response',
               'args' => 
              array (
                'response' => '200',
                'description' => '\'Success\'',
              ),
            )),
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Delete',
               'args' => 
              array (
                'path' => '\'/api/v1/attendances/{id}\'',
                'summary' => '\'Delete Attendance\'',
                'tags' => '[\'Attendance\']',
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Parameter',
               'args' => 
              array (
                'name' => '\'id\'',
                'in' => '\'path\'',
                'required' => 'true',
                'schema' => 'new \\OpenApi\\Attributes\\Schema(type: \'integer\')',
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Response',
               'args' => 
              array (
                'response' => '200',
                'description' => '\'Success\'',
              ),
            )),
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'export',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/attendances/export\'',
                'summary' => '\'Export Attendance Excel\'',
                'tags' => '[\'Attendance\']',
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Response',
               'args' => 
              array (
                'response' => '200',
                'description' => '\'Export queued\'',
              ),
            )),
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'exportPdf',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dashboardAdvanced',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dashboardData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Tag',
           'args' => 
          array (
            'name' => '\'Attendance\'',
            'description' => '\'Attendance API\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendanceExportController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Controllers\\AttendanceExportController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'excel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/AttendancePdfController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Controllers\\AttendancePdfController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pdf',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Controllers/DashboardController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Controllers\\DashboardController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/StoreAttendanceRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Requests\\StoreAttendanceRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'messages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Http/Requests/UpdateAttendanceRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Http\\Requests\\UpdateAttendanceRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceCache.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceCache',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summary',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Infrastructure/Cache/AttendanceDashboardCache.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Infrastructure\\Cache\\AttendanceDashboardCache',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'remember',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'callback',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forgetAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/AttendanceDailySummaryJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Jobs\\AttendanceDailySummaryJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tries',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeout',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'Modules\\Attendance\\App\\Services\\AttendanceSummaryService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exception',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tags',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendanceExcelJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Jobs\\ExportAttendanceExcelJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tries',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeout',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/ExportAttendancePdfJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Jobs\\ExportAttendancePdfJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Jobs/SendAttendanceApprovedMailJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Jobs\\SendAttendanceApprovedMailJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'user',
          ),
           'phpDoc' => NULL,
           'type' => 'Modules\\User\\App\\Models\\User',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/AttendanceLogListener.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Listeners\\AttendanceLogListener',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'queue',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/CalculateAttendanceSalary.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Listeners\\CalculateAttendanceSalary',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'queue',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/SendAttendanceNotification.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Listeners\\SendAttendanceNotification',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Listeners/WriteAttendanceLog.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Listeners\\WriteAttendanceLog',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'queue',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceApprovedMail.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Mail\\AttendanceApprovedMail',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Mail\\Mailable',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
        1 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'user',
          ),
           'phpDoc' => NULL,
           'type' => 'Modules\\User\\App\\Models\\User',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'envelope',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Mail\\Mailables\\Envelope',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'content',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Mail\\Mailables\\Content',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckInMail.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Mail\\AttendanceCheckInMail',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Mail\\Mailable',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceCheckOutMail.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Mail\\AttendanceCheckOutMail',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Mail\\Mailable',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceExportReady.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Mail\\AttendanceExportReady',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Mail\\Mailable',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'file',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'file',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceRejectedMail.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Mail\\AttendanceRejectedMail',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Mail\\Mailable',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Mail/AttendanceSummaryMail.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Mail\\AttendanceSummaryMail',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Mail\\Mailable',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Models/Attendance.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Models\\Attendance',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getActivitylogOptions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Spatie\\Activitylog\\Support\\LogOptions',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'scopeToday',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Notifications/AttendanceCreatedNotification.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Notifications\\AttendanceCreatedNotification',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Notifications\\Notification',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'via',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toMail',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notifiable',
               'type' => 'object',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Observers/AttendanceObserver.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Observers\\AttendanceObserver',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'created',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updated',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleted',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Policies/AttendancePolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Policies\\AttendancePolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/AttendanceServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Providers\\AttendanceServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the module.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'attendancesummarycommand' => 'Modules\\Attendance\\App\\Console\\AttendanceSummaryCommand',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendanceobserver' => 'Modules\\Attendance\\App\\Observers\\AttendanceObserver',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'nameLower',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The lowercase version of the module name.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'attendancesummarycommand' => 'Modules\\Attendance\\App\\Console\\AttendanceSummaryCommand',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendanceobserver' => 'Modules\\Attendance\\App\\Observers\\AttendanceObserver',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'providers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Provider classes to register.
     *
     * @var string[]
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'attendancesummarycommand' => 'Modules\\Attendance\\App\\Console\\AttendanceSummaryCommand',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendanceobserver' => 'Modules\\Attendance\\App\\Observers\\AttendanceObserver',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'commands',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define module schedules.
     *
     * @param  $schedule
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'attendancesummarycommand' => 'Modules\\Attendance\\App\\Console\\AttendanceSummaryCommand',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendanceobserver' => 'Modules\\Attendance\\App\\Observers\\AttendanceObserver',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'attendancecreated' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
              'attendanceloglistener' => 'Modules\\Attendance\\App\\Listeners\\AttendanceLogListener',
              'calculateattendancesalary' => 'Modules\\Attendance\\App\\Listeners\\CalculateAttendanceSalary',
              'sendattendancenotification' => 'Modules\\Attendance\\App\\Listeners\\SendAttendanceNotification',
              'writeattendancelog' => 'Modules\\Attendance\\App\\Listeners\\WriteAttendanceLog',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendancepolicy' => 'Modules\\Attendance\\App\\Policies\\AttendancePolicy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shouldDiscoverEvents',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if events should be discovered.
     *
     * @var bool
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'attendancecreated' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
              'attendanceloglistener' => 'Modules\\Attendance\\App\\Listeners\\AttendanceLogListener',
              'calculateattendancesalary' => 'Modules\\Attendance\\App\\Listeners\\CalculateAttendanceSalary',
              'sendattendancenotification' => 'Modules\\Attendance\\App\\Listeners\\SendAttendanceNotification',
              'writeattendancelog' => 'Modules\\Attendance\\App\\Listeners\\WriteAttendanceLog',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendancepolicy' => 'Modules\\Attendance\\App\\Policies\\AttendancePolicy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureEmailVerification',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure the proper event listeners for email verification.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'attendancecreated' => 'Modules\\Attendance\\App\\Events\\AttendanceCreated',
              'attendanceloglistener' => 'Modules\\Attendance\\App\\Listeners\\AttendanceLogListener',
              'calculateattendancesalary' => 'Modules\\Attendance\\App\\Listeners\\CalculateAttendanceSalary',
              'sendattendancenotification' => 'Modules\\Attendance\\App\\Listeners\\SendAttendanceNotification',
              'writeattendancelog' => 'Modules\\Attendance\\App\\Listeners\\WriteAttendanceLog',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
              'attendancepolicy' => 'Modules\\Attendance\\App\\Policies\\AttendancePolicy',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RepositoryServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Providers\\RepositoryServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'map',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the routes for the application.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapWebRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapApiRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */',
             'namespace' => 'Modules\\Attendance\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'find',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paginate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findToday',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summaryToday',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Repositories/AttendanceRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Repositories\\AttendanceRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'find',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paginate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findToday',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summaryToday',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Scopes/CompanyScope.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Scopes\\CompanyScope',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Scope',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'apply',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'builder',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceCalculator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Services\\AttendanceCalculator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'calculate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checkIn',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'checkOut',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceDashboardService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Services\\AttendanceDashboardService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'advancedStats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'realtimeStats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Services\\AttendanceService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Modules\\Attendance\\App\\Services\\Contracts\\AttendanceServiceInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findUserAttendance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Attendance\\App\\Models\\Attendance',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Attendance\\App\\Models\\Attendance',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/AttendanceSummaryService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Services\\AttendanceSummaryService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summaryToday',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Services/Contracts/AttendanceServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Services\\Contracts\\AttendanceServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Attendance\\App\\Models\\Attendance',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Attendance\\App\\Models\\Attendance',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findUserAttendance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Transformers\\AttendanceCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\ResourceCollection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/App/Transformers/AttendanceResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\App\\Transformers\\AttendanceResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Factories/AttendanceFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Database\\Factories\\AttendanceFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceDatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Database\\Seeders\\AttendanceDatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Modules\\Attendance\\Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/AttendanceSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Database\\Seeders\\AttendanceSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/Database/Seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceApiTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Tests\\Feature\\AttendanceApiTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_api_can_create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_api_list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_api_requires_authentication',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_api_requires_permission',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceCrudTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Tests\\Feature\\AttendanceCrudTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_create_attendance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_update_attendance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_delete_attendance',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceDashboardTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Tests\\Feature\\AttendanceDashboardTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_dashboard_stats',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Feature/AttendanceServiceTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Tests\\Feature\\AttendanceServiceTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_create_service',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceFeatureTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Tests\\Unit\\AttendanceFeatureTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_calculator_late_minutes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_calculator_work_hours',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_calculator_overtime',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_calculator_without_checkout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_attendance_calculator_without_checkin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Attendance/tests/Unit/AttendanceServiceTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Attendance\\Tests\\Unit\\AttendanceServiceTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'test_that_true_is_true',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A basic test example.
     */',
             'namespace' => 'Modules\\Attendance\\Tests\\Unit',
             'uses' => 
            array (
              'testcase' => 'Tests\\TestCase',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Http/Controllers/ProductController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Product\\App\\Http\\Controllers\\ProductController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display a listing of the resource.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for creating a new resource.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store a newly created resource in storage.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the specified resource.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the form for editing the specified resource.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the specified resource in storage.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Remove the specified resource from storage.
     */',
             'namespace' => 'Modules\\Product\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Product\\App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shouldDiscoverEvents',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if events should be discovered.
     *
     * @var bool
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureEmailVerification',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure the proper event listeners for email verification.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/ProductServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Product\\App\\Providers\\ProductServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the module.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'nameLower',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The lowercase version of the module name.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'providers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Provider classes to register.
     *
     * @var string[]
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Product\\App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'map',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the routes for the application.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapWebRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapApiRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */',
             'namespace' => 'Modules\\Product\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Product/Database/Seeders/ProductDatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Product\\Database\\Seeders\\ProductDatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Modules\\Product\\Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Events/SalaryUpdated.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
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
         'namespace' => 'Modules\\Salary\\App\\Events',
         'uses' => 
        array (
          'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Queue\\SerializesModels',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'salary',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * salary object
     *
     * ví dụ:
     * SalaryMechanism model
     */',
             'namespace' => 'Modules\\Salary\\App\\Events',
             'uses' => 
            array (
              'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'action',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * action hiện tại:
     *
     * created
     * updated
     * deleted
     */',
             'namespace' => 'Modules\\Salary\\App\\Events',
             'uses' => 
            array (
              'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * constructor chạy khi:
     *
     * event(new SalaryUpdated(...))
     *
     * được gọi.
     */',
             'namespace' => 'Modules\\Salary\\App\\Events',
             'uses' => 
            array (
              'serializesmodels' => 'Illuminate\\Queue\\SerializesModels',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'salary',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Exports/SalaryExport.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * EXPORT EXCEL
 * -----------------------------------------
 * 📌 chuyển dữ liệu salary → file Excel
 */',
         'namespace' => 'Modules\\Salary\\App\\Exports',
         'uses' => 
        array (
          'fromcollection' => 'Maatwebsite\\Excel\\Concerns\\FromCollection',
          'withheadings' => 'Maatwebsite\\Excel\\Concerns\\WithHeadings',
          'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Maatwebsite\\Excel\\Concerns\\FromCollection',
        1 => 'Maatwebsite\\Excel\\Concerns\\WithHeadings',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'collection',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'headings',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Controllers/SalaryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Http\\Controllers\\SalaryController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * CONTROLLER: SalaryController
 * -----------------------------------------
 * 📌 Đây là ENTRY POINT từ:
 *
 * Blade (index.blade.php)
 *   ↓ AJAX / Route
 * Controller
 *   ↓
 * Service / Model / Repository
 *
 * 👉 Vai trò:
 * - trả view
 * - xử lý AJAX DataTable
 * - CRUD salary
 * - export Excel
 */',
         'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
         'uses' => 
        array (
          'controller' => 'App\\Http\\Controllers\\Controller',
          'carbon' => 'Carbon\\Carbon',
          'request' => 'Illuminate\\Http\\Request',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'cache' => 'Illuminate\\Support\\Facades\\Cache',
          'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
          'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
          'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
          'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
          'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
          'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
          'user' => 'Modules\\User\\App\\Models\\User',
          'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * GET: /salary
     * -----------------------------------------
     * 📌 Trả giao diện chính (Blade)
     */',
             'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
              'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
              'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
              'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
              'user' => 'Modules\\User\\App\\Models\\User',
              'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'data',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * GET: /salary/data
     * -----------------------------------------
     * 📌 API cho DataTables server-side
     *
     * Blade DataTable gọi AJAX vào đây
     */',
             'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
              'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
              'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
              'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
              'user' => 'Modules\\User\\App\\Models\\User',
              'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * POST: /salary/store
     * -----------------------------------------
     * 📌 tạo salary mới
     */',
             'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
              'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
              'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
              'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
              'user' => 'Modules\\User\\App\\Models\\User',
              'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * POST: /salary/update/{id}
     * -----------------------------------------
     * 📌 update salary
     */',
             'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
              'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
              'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
              'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
              'user' => 'Modules\\User\\App\\Models\\User',
              'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'Modules\\Salary\\App\\Services\\SalaryService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * POST: /salary/delete/{id}
     * -----------------------------------------
     * 📌 xoá salary
     */',
             'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
              'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
              'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
              'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
              'user' => 'Modules\\User\\App\\Models\\User',
              'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'Modules\\Salary\\App\\Services\\SalaryService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'export',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * GET: /salary/export
     * -----------------------------------------
     * 📌 export Excel
     */',
             'namespace' => 'Modules\\Salary\\App\\Http\\Controllers',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'carbon' => 'Carbon\\Carbon',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
              'salaryexport' => 'Modules\\Salary\\App\\Exports\\SalaryExport',
              'storesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
              'updatesalaryrequest' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryservice' => 'Modules\\Salary\\App\\Services\\SalaryService',
              'user' => 'Modules\\User\\App\\Models\\User',
              'datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/StoreSalaryRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Http\\Requests\\StoreSalaryRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Http/Requests/UpdateSalaryRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Http\\Requests\\UpdateSalaryRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Listeners/LogSalaryActivity.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Queue\\InteractsWithQueue',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'queue',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Listeners',
             'uses' => 
            array (
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'log' => 'Illuminate\\Support\\Facades\\Log',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Listeners',
             'uses' => 
            array (
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'log' => 'Illuminate\\Support\\Facades\\Log',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'failed',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Listeners',
             'uses' => 
            array (
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'interactswithqueue' => 'Illuminate\\Queue\\InteractsWithQueue',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'log' => 'Illuminate\\Support\\Facades\\Log',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exception',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Models/SalaryMechanism.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * TABLE NAME
     * ======================================================
     *
     * mapping:
     *
     * salary_mechanisms
     */',
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getActivitylogOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Spatie\\Activitylog\\Support\\LogOptions',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'logAttributes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * AUTO LOG FIELD
     * ======================================================
     *
     * chỉ log 2 field này
     *
     * nếu dùng kiểu log cũ
     */',
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'logName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * tên nhóm log
     */',
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDescriptionForEvent',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * mô tả event
     */',
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'eventName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'user',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTotalSalaryAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'Modules\\Salary\\App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'user' => 'Modules\\User\\App\\Models\\User',
              'logsactivity' => 'Spatie\\Activitylog\\Models\\Concerns\\LogsActivity',
              'logoptions' => 'Spatie\\Activitylog\\Support\\LogOptions',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * LISTEN MAP
     * ======================================================
     *
     * Event
     *      ↓
     * Listener
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'logsalaryactivity' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shouldDiscoverEvents',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * Auto Discover Event
     * ======================================================
     *
     * Laravel tự tìm Event + Listener
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'logsalaryactivity' => 'Modules\\Salary\\App\\Listeners\\LogSalaryActivity',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureEmailVerification',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'map',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the routes for the application.
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapWebRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapApiRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Providers/SalaryServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Providers\\SalaryServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of the module.
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'nameLower',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The lowercase version of the module name.
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'providers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Provider classes to register.
     *
     * @var string[]
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define module schedules.
     *
     * @param  $schedule
     */',
             'namespace' => 'Modules\\Salary\\App\\Providers',
             'uses' => 
            array (
              'schedule' => 'Illuminate\\Console\\Scheduling\\Schedule',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
              'moduleserviceprovider' => 'Nwidart\\Modules\\Support\\ModuleServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Repositories/SalaryRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * ==========================================================
 * REPOSITORY
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Toàn bộ thao tác DB.
 *
 * Service KHÔNG query DB.
 *
 * Controller KHÔNG query DB.
 *
 * Chỉ Repository được query DB.
 *
 *
 * FLOW:
 *
 * Controller
 *      ↓
 * Service
 *      ↓
 * Repository
 *      ↓
 * Model
 *      ↓
 * MySQL
 */',
         'namespace' => 'Modules\\Salary\\App\\Repositories',
         'uses' => 
        array (
          'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDataForTable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * DATATABLE QUERY
     * ======================================================
     *
     * dùng cho:
     *
     * SalaryService
     *      ↓
     * DataTable
     */',
             'namespace' => 'Modules\\Salary\\App\\Repositories',
             'uses' => 
            array (
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * CREATE
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Repositories',
             'uses' => 
            array (
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * UPDATE
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Repositories',
             'uses' => 
            array (
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'find',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * FIND
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Repositories',
             'uses' => 
            array (
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * DELETE
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Repositories',
             'uses' => 
            array (
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/App/Services/SalaryService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\App\\Services\\SalaryService',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * ==========================================================
 * SERVICE LAYER
 * ==========================================================
 *
 * NHIỆM VỤ:
 * ----------------------------------------------------------
 * Chứa Business Logic.
 *
 * Controller KHÔNG làm việc trực tiếp với DB.
 *
 * Controller
 *      ↓
 * Service
 *      ↓
 * Repository
 *      ↓
 * Database
 *
 *
 * TẠI SAO CẦN SERVICE ?
 * ----------------------------------------------------------
 * Nếu mai:
 *
 * - gửi mail
 * - queue
 * - websocket
 * - cache
 * - AI
 * - audit log
 *
 * Controller không cần sửa.
 */',
         'namespace' => 'Modules\\Salary\\App\\Services',
         'uses' => 
        array (
          'cache' => 'Illuminate\\Support\\Facades\\Cache',
          'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
          'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
          'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Dependency Injection
     *
     * Laravel tự inject Repository.
     */',
             'namespace' => 'Modules\\Salary\\App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repo',
               'type' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 2,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDataTable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * DATATABLE CACHE
     * ======================================================
     *
     * Controller gọi:
     *
     * SalaryService
     *      ↓
     * getDataTable()
     *      ↓
     * Cache
     *      ↓
     * Repository
     */',
             'namespace' => 'Modules\\Salary\\App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * STORE
     * ======================================================
     *
     * NHẬN TỪ:
     *
     * SalaryController@store
     *
     *
     * FLOW:
     *
     * Controller
     *      ↓
     * Service
     *      ↓
     * Repository
     *      ↓
     * DB
     *      ↓
     * Clear Cache
     *      ↓
     * Event
     *      ↓
     * Queue
     *      ↓
     * Listener
     */',
             'namespace' => 'Modules\\Salary\\App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * UPDATE
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'find',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * FIND
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ======================================================
     * DELETE
     * ======================================================
     */',
             'namespace' => 'Modules\\Salary\\App\\Services',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'salaryupdated' => 'Modules\\Salary\\App\\Events\\SalaryUpdated',
              'salarymechanism' => 'Modules\\Salary\\App\\Models\\SalaryMechanism',
              'salaryrepository' => 'Modules\\Salary\\App\\Repositories\\SalaryRepository',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalaryDatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\Database\\Seeders\\SalaryDatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/Salary/Database/Seeders/SalarySeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Salary\\Database\\Seeders\\SalarySeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Modules\\Salary\\Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Http\\Controllers\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Http/Controllers/UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Http\\Controllers\\UserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'userRepository',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'userRepository',
               'type' => 'Modules\\User\\App\\Repositories\\Interfaces\\UserRepositoryInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFilters',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUsersData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Part.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Models\\Part',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'users',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Position.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Models\\Position',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'users',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/Team.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Models\\Team',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'users',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'parts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/TypeAccount.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Models\\TypeAccount',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'users',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Auth\\MustVerifyEmail',
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Illuminate\\Notifications\\Notifiable',
        4 => 'Illuminate\\Auth\\MustVerifyEmail',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'part',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'position',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'team',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'typeAccount',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'salaryMechanisms',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attendances',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/EventServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Providers\\EventServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'listen',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shouldDiscoverEvents',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if events should be discovered.
     *
     * @var bool
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'configureEmailVerification',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Configure the proper event listeners for email verification.
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/RouteServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Providers\\RouteServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'map',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the routes for the application.
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapWebRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mapApiRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */',
             'namespace' => 'Modules\\User\\App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Foundation\\Support\\Providers\\RouteServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Providers/UserServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Providers\\UserServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleNameLower',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/Interfaces/UserRepositoryInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Repositories\\Interfaces\\UserRepositoryInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFilters',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUsersData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromOptions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\User\\App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validated',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validated',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/App/Repositories/UserRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\App\\Repositories\\UserRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Modules\\User\\App\\Repositories\\Interfaces\\UserRepositoryInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFilters',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUsersData',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fromOptions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\User\\App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validated',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validated',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\Database\\Factories\\UserFactory',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/Modules/User/Database/Seeders/UserDatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\User\\Database\\Seeders\\UserDatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Run the database seeds.
     */',
             'namespace' => 'Modules\\User\\Database\\Seeders',
             'uses' => 
            array (
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Exports/AttendanceExport.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exports\\AttendanceExport',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Maatwebsite\\Excel\\Concerns\\FromCollection',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'collection',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Collection
     */',
             'namespace' => 'App\\Exports',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Support\\Collection',
              'fromcollection' => 'Maatwebsite\\Excel\\Concerns\\FromCollection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/AuthenticatedSessionController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the login view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming authentication request.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\Auth\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy an authenticated session.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/ConfirmablePasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the confirm password view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Confirm the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationNotificationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send a new email verification notification.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/EmailVerificationPromptController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the email verification prompt.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse|Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/NewPasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'Modules\\User\\App\\Models\\User',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming new password request.
     *
     * @throws ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'Modules\\User\\App\\Models\\User',
              'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'str' => 'Illuminate\\Support\\Str',
              'rules' => 'Illuminate\\Validation\\Rules',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s password.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'password' => 'Illuminate\\Validation\\Rules\\Password',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/PasswordResetLinkController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the password reset link request view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming password reset link request.
     *
     * @throws ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'password' => 'Illuminate\\Support\\Facades\\Password',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/RegisteredUserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the registration view.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'Modules\\User\\App\\Models\\User',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'user' => 'Modules\\User\\App\\Models\\User',
              'registered' => 'Illuminate\\Auth\\Events\\Registered',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'rules' => 'Illuminate\\Validation\\Rules',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Auth/VerifyEmailController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     */',
             'namespace' => 'App\\Http\\Controllers\\Auth',
             'uses' => 
            array (
              'controller' => 'App\\Http\\Controllers\\Controller',
              'verified' => 'Illuminate\\Auth\\Events\\Verified',
              'emailverificationrequest' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/ProfileController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\ProfileController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'edit',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Display the user\'s profile form.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Update the user\'s profile information.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ProfileUpdateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete the user\'s account.
     */',
             'namespace' => 'App\\Http\\Controllers',
             'uses' => 
            array (
              'profileupdaterequest' => 'App\\Http\\Requests\\ProfileUpdateRequest',
              'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'redirect' => 'Illuminate\\Support\\Facades\\Redirect',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\RedirectResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Controllers/SwaggerController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\SwaggerController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Middleware/CheckSalaryPermission.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\CheckSalaryPermission',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/Auth/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempt to authenticate the request\'s credentials.
     *
     * @throws ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ensureIsNotRateLimited',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Ensure the login request is not rate limited.
     *
     * @throws ValidationException
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'throttleKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the rate limiting throttle key for the request.
     */',
             'namespace' => 'App\\Http\\Requests\\Auth',
             'uses' => 
            array (
              'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
              'str' => 'Illuminate\\Support\\Str',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Http/Requests/ProfileUpdateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ProfileUpdateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
              'user' => 'Modules\\User\\App\\Models\\User',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Jobs/ProcessSalaryActivityJob.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Jobs\\ProcessSalaryActivityJob',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new job instance.
     */',
             'namespace' => 'App\\Jobs',
             'uses' => 
            array (
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'queueable' => 'Illuminate\\Foundation\\Queue\\Queueable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the job.
     */',
             'namespace' => 'App\\Jobs',
             'uses' => 
            array (
              'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
              'queueable' => 'Illuminate\\Foundation\\Queue\\Queueable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Policies/AttendancePolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\AttendancePolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAny',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'view',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'Modules\\User\\App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attendance',
               'type' => 'Modules\\Attendance\\App\\Models\\Attendance',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'cache' => 'Illuminate\\Support\\Facades\\Cache',
              'view' => 'Illuminate\\Support\\Facades\\View',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'attendance' => 'Modules\\Attendance\\App\\Models\\Attendance',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/AuthServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Support\\Providers\\AuthServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'policies',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Providers/HorizonServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\HorizonServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'horizon' => 'Laravel\\Horizon\\Horizon',
              'horizonapplicationserviceprovider' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'gate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the Horizon gate.
     *
     * This gate determines who can access Horizon in non-local environments.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'horizon' => 'Laravel\\Horizon\\Horizon',
              'horizonapplicationserviceprovider' => 'Laravel\\Horizon\\HorizonApplicationServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/Swagger/OpenApiSpec.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Swagger\\OpenApiSpec',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Info',
           'args' => 
          array (
            'version' => '\'1.0.0\'',
            'title' => '\'Attendance API\'',
            'description' => '\'Attendance Module API\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Server',
           'args' => 
          array (
            'url' => '\'http://localhost\'',
            'description' => '\'Local Server\'',
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\SecurityScheme',
           'args' => 
          array (
            'securityScheme' => '\'bearerAuth\'',
            'type' => '\'http\'',
            'scheme' => '\'bearer\'',
            'bearerFormat' => '\'JWT\'',
          ),
        )),
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/AppLayout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\AppLayout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represents the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/lahoathanh/Desktop/laravel/keyagatwo/app/View/Components/GuestLayout.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\View\\Components\\GuestLayout',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\View\\Component',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the view / contents that represents the component.
     */',
             'namespace' => 'App\\View\\Components',
             'uses' => 
            array (
              'component' => 'Illuminate\\View\\Component',
              'view' => 'Illuminate\\View\\View',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\View\\View',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
