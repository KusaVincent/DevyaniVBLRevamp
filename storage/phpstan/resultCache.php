<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1784401056,
	'meta' => array (
  'cacheVersion' => 'v13-packageDependencies',
  'phpstanVersion' => '2.2.5',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80508,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, paths: [C:\\Users\\vinsc\\Herd\\devyanivbl\\app], level: 5, tmpDir: C:\\Users\\vinsc\\Herd\\devyanivbl\\storage\\phpstan, excludePaths: {analyseAndScan: [vendor, storage], analyse: []}}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'C:/Users/vinsc/Herd/devyanivbl/composer.lock' => 'd812e7428fe4abc58112a6dc30c3676c56c84fa11e18571f42f927099c3acda3',
  ),
  'composerInstalled' => 
  array (
    'C:/Users/vinsc/Herd/devyanivbl/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.20.0',
          'version' => '7.20.0.0',
          'reference' => '81c80677c9ec0ed4ef16b246167f11dec81a6e3d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.18.0',
          'version' => '0.18.0.0',
          'reference' => '82944324d1c1bdb2c2618e89978d4e2ad78d69ad',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../brick/math',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'd5a341b3fb61f3001970940afb1d332968a183ed',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../doctrine/deprecations',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../doctrine/inflector',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../doctrine/lexer',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../dragonmantank/cron-expression',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../egulias/email-validator',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../fidry/cpu-core-counter',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../filp/whoops',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../fruitcake/php-cors',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.14.0',
          'version' => '7.14.0.0',
          'reference' => 'aef242412e13128b5049864867bb49fc37dd39de',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.5.1',
          'version' => '2.5.1.0',
          'reference' => '9ad1e4fc607446a055b95870c7f668e93b5cff29',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.12.4',
          'version' => '2.12.4.0',
          'reference' => '51e27f9e2b332ab3e72f4520d5ff4f3c68c3577c',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.9',
          'version' => '1.0.9.0',
          'reference' => 'd7580af6d3f8384325d9cd3e99b21c3ed1848176',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../guzzlehttp/uri-template',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../hamcrest/hamcrest-php',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../iamcal/sql-parser',
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
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.19.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../jean85/pretty-package-versions',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../larastan/larastan',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v13.19.0',
          'version' => '13.19.0.0',
          'reference' => '514502b38e11bd676ecf83b271c9452cc7500f16',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.7',
          'version' => '1.2.7.0',
          'reference' => '2f7d27dada8effc48b8c424445a69cca7007daaa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pao' => 
        array (
          'pretty_version' => 'v1.1.2',
          'version' => '1.1.2.0',
          'reference' => '41b3c61ebeddce52a446afe6d21e0b02983fb2f6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/pao',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.21',
          'version' => '0.3.21.0',
          'reference' => '7753c65c281c2550c7c183f14e18062073b7d821',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/prompts',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/serializable-closure',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../laravel/tinker',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/commonmark',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.35.2',
          'version' => '3.35.2.0',
          'reference' => 'b277b5dc3d56650b68904117124e79c851e12376',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/flysystem',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'f5f47eff7c48ed1003069a2ca67f316fb4021c76',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/mime-type-detection',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/uri',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../league/uri-interfaces',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../mockery/mockery',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../monolog/monolog',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.13.1',
          'version' => '3.13.1.0',
          'reference' => '2937ad3d1d2c506fd2bc97d571438a95641f44e2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../nette/schema',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.8.0',
          'version' => '5.8.0.0',
          'reference' => '044a6a392ff8ad0d61f14370a5fbbd0a0107152f',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../nikic/php-parser',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../nunomaduro/collision',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.7.5',
          'version' => '4.7.5.0',
          'reference' => '5dc49a71d63602a9b98fed0f2017c4679ef9f8e0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../pestphp/pest',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../pestphp/pest-plugin',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../pestphp/pest-plugin-arch',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../pestphp/pest-plugin-laravel',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../pestphp/pest-plugin-mutate',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../pestphp/pest-plugin-profanity',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phar-io/manifest',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phar-io/version',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpdocumentor/reflection-common',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpdocumentor/reflection-docblock',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.3',
          'version' => '2.3.3.0',
          'reference' => 'fb19eedd2bb67ff8cf7a5502ad329e701d6398a3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.5',
          'version' => '2.2.5.0',
          'reference' => '909c1e5fef7989ac0d0c1c5c42e32a5c4f6198a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.7',
          'version' => '12.5.7.0',
          'reference' => '186dab580576598076de6818596d12b61801880e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpunit/php-code-coverage',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpunit/php-file-iterator',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpunit/php-invoker',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpunit/php-text-template',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.30',
          'version' => '12.5.30.0',
          'reference' => '900400a5b616d6fb306f9549f6da33ba615d3fbb',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/clock',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/container',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/event-dispatcher',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/http-client',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/http-factory',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/http-message',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/log',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psr/simple-cache',
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
          'pretty_version' => 'v0.12.24',
          'version' => '0.12.24.0',
          'reference' => 'ca0fdcf8a7617afa3adfdf1b5fef573dffb69ca1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../psy/psysh',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../ralouphie/getallheaders',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.3',
          'version' => '4.9.3.0',
          'reference' => '1df15849d00943a67d677dc9cfd80795f038c9f8',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rector/rector' => 
        array (
          'pretty_version' => '2.5.7',
          'version' => '2.5.7.0',
          'reference' => 'ba22f8c087848278fed6b4910d4cf1108096d8d3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../rector/rector',
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
            0 => '4.9.3',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.1',
          'version' => '4.2.1.0',
          'reference' => '7d05781b13f7dec9043a629a21d086ed74582a15',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/cli-parser',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/comparator',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/complexity',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.1.2',
          'version' => '8.1.2.0',
          'reference' => '9d32c685773823b1983e256ae4ecd48a10d6e439',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/environment',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => 'b164d3274d6537ab462591c5755f76a8f5b1aae9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/global-state',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/lines-of-code',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/object-enumerator',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/object-reflector',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/recursion-context',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/type',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '701ef4de9705d6c32292ebee5e8044094a09fbf6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => 'b711a8ab808b6c074c6b8caef70d0fd8d6b6d07d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'dc0e2be45c9b5588c82414f02ac574b4b986abcd',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'f3202fa1b5097b0af062dc978b32ecf63404e31d',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'd8aeb1abd3fef84795567850d3a567bdb5945ee5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => 'abd6c11dc468725d1627302ad10f6cd486e9e3d0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c7de7a00ffb67842132da02ea92988a39ccd9f4e',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/event-dispatcher-contracts',
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
        'symfony/finder' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => 'e2989e762c70f9490fa3a00a0ac0fae5aa97a531',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '6a168c8fcee806b57ac020244da14293d1f9a883',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '89d8d6e7fbab3d9eda89ccb5ecdf44a74c4ec9d2',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '4fa583a7377f28d54e4de442fba76375b2e20a12',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'b164ae7e3f7915aacfe9ee155f2f358502440664',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/mime',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'dc21118016c039a66235cf93d96b435ffb282412',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => 'd3d318bad5e7a1bfbd026009c8bfb8d8f99ae6b6',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-mbstring',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'ba2ba04f3352cfa2dcbbcb90aee13ed967f505b1',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php86' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => 'fcec68d64f46dc84e1f6ffcf2c6dda40ff3143ad',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-php86',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'c4a9e58f235a6bf7f97ffbfedae2687353ac79e5',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'fe0bfec72c8a806109fb9c3a5f2b898fe0c76eb3',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'c0a284bab1ed8aa0417e3d69250ab437739563a0',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'afd5944f4005862d961efb85c8bbd5c523c4e3c9',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '342b4218630dc2cf284cedcb2080c80b13404014',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.7.1',
          'version' => '3.7.1.0',
          'reference' => 'ccb206b98faccc511ebae8e5fad50f2dc0b30621',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/translation-contracts',
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
        'symfony/uid' => 
        array (
          'pretty_version' => 'v8.1.0',
          'version' => '8.1.0.0',
          'reference' => '7393f157a55f7e70a4de0334435c55a5a8fe749a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v8.1.1',
          'version' => '8.1.1.0',
          'reference' => '40096a2515a979f3125c5c928603995b8664c62a',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../symfony/var-dumper',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../theseer/tokenizer',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.4',
          'version' => '5.6.4.0',
          'reference' => '416df702837983f8d5ff48c9c3fee4f5f57b980b',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../vlucas/phpdotenv',
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
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.4.1',
          'version' => '2.4.1.0',
          'reference' => '2ccb7c2e821038c03a3e6e1700c570c158c55f70',
          'type' => 'library',
          'install_path' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\larastan\\larastan\\bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar://C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar://C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar://C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar://C:\\Users\\vinsc\\Herd\\devyanivbl\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
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
    14 => 'dom',
    15 => 'exif',
    16 => 'fileinfo',
    17 => 'filter',
    18 => 'gd',
    19 => 'gmp',
    20 => 'hash',
    21 => 'iconv',
    22 => 'intl',
    23 => 'json',
    24 => 'lexbor',
    25 => 'libxml',
    26 => 'mbstring',
    27 => 'mongodb',
    28 => 'mysqli',
    29 => 'mysqlnd',
    30 => 'openssl',
    31 => 'pcre',
    32 => 'pdo_mysql',
    33 => 'pdo_pgsql',
    34 => 'pdo_sqlite',
    35 => 'pgsql',
    36 => 'random',
    37 => 'readline',
    38 => 'redis',
    39 => 'session',
    40 => 'shmop',
    41 => 'soap',
    42 => 'sockets',
    43 => 'sodium',
    44 => 'sqlite3',
    45 => 'standard',
    46 => 'tokenizer',
    47 => 'uri',
    48 => 'xml',
    49 => 'xmlreader',
    50 => 'xmlwriter',
    51 => 'zip',
    52 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Psr\\Log\\LoggerInterface::getHandlers().',
       'file' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'linesToIgnore' => array (
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php' => 
  array (
    'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php' => 
    array (
      14 => NULL,
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Data\\ConfirmationRequestData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Data\\ConfirmationRequestData',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Data\\ConfirmationRequestData',
        1 => 'formatAmount',
        2 => 'App\\Data\\ConfirmationRequestData',
        3 => 
        array (
          0 => 'f' . "\0" . 'str_replace',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Data\\ConfirmationRequestData',
        1 => 'toArray',
        2 => 'App\\Data\\ConfirmationRequestData',
        3 => 
        array (
        ),
      ),
      2 => 
      array (
        0 => 'App\\Data\\ConfirmationRequestData',
        1 => 'sanitized',
        2 => 'App\\Data\\ConfirmationRequestData',
        3 => 
        array (
          0 => 'm' . "\0" . 'app\\data\\confirmationrequestdata' . "\0" . 'toarray',
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\AuthenticationFailedException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Confirmation\\AuthenticationFailedException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\BusinessProfileNotFoundException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Confirmation\\BusinessProfileNotFoundException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\ConfirmationException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Confirmation\\ConfirmationException',
        1 => 'resultCode',
        2 => 'App\\Exceptions\\Confirmation\\ConfirmationException',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\DuplicateTransactionException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Confirmation\\DuplicateTransactionException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\HashValidationException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Confirmation\\HashValidationException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\InvalidPayloadException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Confirmation\\InvalidPayloadException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailDeliveryException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Email\\EmailDeliveryException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsDeliveryException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Sms\\SmsDeliveryException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsRejectedException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Exceptions\\Sms\\SmsRejectedException',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Controllers\\Api\\ConfirmationController',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Mail\\ConfirmationMail.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Mail\\ConfirmationMail',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Mail\\ConfirmationMail',
        1 => 'build',
        2 => 'App\\Mail\\ConfirmationMail',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\mail\\mailable' . "\0" . 'subject',
          1 => 'm' . "\0" . 'illuminate\\mail\\mailable' . "\0" . 'html',
          2 => 'm' . "\0" . 'illuminate\\mail\\mailable' . "\0" . 'attach',
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Bus\\Queueable',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Queue\\SerializesModels',
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\BusinessProfile.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\BusinessProfile',
        1 => 'casts',
        2 => 'App\\Models\\BusinessProfile',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\BusinessProfile',
        1 => 'sapConfiguration',
        2 => 'App\\Models\\BusinessProfile',
        3 => 
        array (
          0 => 'm' . "\0" . 'app\\services\\sap\\sapconfiguration' . "\0" . '__construct',
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\ConfirmationTransaction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\ConfirmationTransaction',
        1 => 'casts',
        2 => 'App\\Models\\ConfirmationTransaction',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\ConfirmationTransaction',
        1 => 'customerName',
        2 => 'App\\Models\\ConfirmationTransaction',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\casts\\attribute' . "\0" . 'make',
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\CustomerReference.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\CustomerReference',
        1 => 'name',
        2 => 'App\\Models\\CustomerReference',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\casts\\attribute' . "\0" . 'make',
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\EmailQueue.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\EmailQueue',
        1 => 'casts',
        2 => 'App\\Models\\EmailQueue',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\SmsQueue.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\SmsQueue',
        1 => 'casts',
        2 => 'App\\Models\\SmsQueue',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Models\\SmsQueue',
        1 => 'customerName',
        2 => 'App\\Models\\SmsQueue',
        3 => 
        array (
          0 => 'm' . "\0" . 'illuminate\\database\\eloquent\\casts\\attribute' . "\0" . 'make',
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Confirmation\\ConfirmationService',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashGenerator.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Confirmation\\HashGenerator',
        1 => 'generate',
        2 => 'App\\Services\\Confirmation\\HashGenerator',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Confirmation\\HashValidationService',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 27,
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Email\\EmailProcessingService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Email\\EmailProcessingService',
        1 => 'maxAttempts',
        2 => 'App\\Services\\Email\\EmailProcessingService',
        3 => 
        array (
          0 => 'f' . "\0" . 'config',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Services\\Email\\EmailProcessingService',
        1 => 'retryDelay',
        2 => 'App\\Services\\Email\\EmailProcessingService',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\Methods\\NamedArgumentParameterMethodCallsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Contracts\\Email\\EmailServiceInterface',
        1 => 'send',
        2 => 'recipients',
        3 => 72,
      ),
      1 => 
      array (
        0 => 'App\\Contracts\\Email\\EmailServiceInterface',
        1 => 'send',
        2 => 'subject',
        3 => 73,
      ),
      2 => 
      array (
        0 => 'App\\Contracts\\Email\\EmailServiceInterface',
        1 => 'send',
        2 => 'header',
        3 => 74,
      ),
      3 => 
      array (
        0 => 'App\\Contracts\\Email\\EmailServiceInterface',
        1 => 'send',
        2 => 'message',
        3 => 75,
      ),
      4 => 
      array (
        0 => 'App\\Contracts\\Email\\EmailServiceInterface',
        1 => 'send',
        2 => 'attachment',
        3 => 76,
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Email\\EmailService',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'forget',
        2 => 46,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'put',
        2 => 85,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'delete',
        2 => 89,
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Logging\\LogArchiveService',
        1 => 
        array (
          0 => 'f' . "\0" . 'storage_path',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'ZipArchive',
        ),
        1 => 'addFile',
        2 => 63,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'ZipArchive',
        ),
        1 => 'close',
        2 => 68,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'ZipArchive',
        ),
        1 => 'addFile',
        2 => 98,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'ZipArchive',
        ),
        1 => 'close',
        2 => 99,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'delete',
        2 => 70,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'delete',
        2 => 117,
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\Sanitizer.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Logging\\Sanitizer',
        1 => 'payload',
        2 => 'App\\Services\\Logging\\Sanitizer',
        3 => 
        array (
          0 => 'm' . "\0" . 'app\\data\\confirmationrequestdata' . "\0" . 'toarray',
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapArchiveService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'copy',
        2 => 25,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'move',
        2 => 40,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\File',
        1 => 'delete',
        2 => 43,
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapConfiguration.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sap\\SapConfiguration',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sap\\SapConfiguration',
        1 => 'file',
        2 => 'App\\Services\\Sap\\SapConfiguration',
        3 => 
        array (
        ),
      ),
      1 => 
      array (
        0 => 'App\\Services\\Sap\\SapConfiguration',
        1 => 'businessTransaction',
        2 => 'App\\Services\\Sap\\SapConfiguration',
        3 => 
        array (
          0 => 'f' . "\0" . 'str_replace',
        ),
      ),
      2 => 
      array (
        0 => 'App\\Services\\Sap\\SapConfiguration',
        1 => 'transactionText',
        2 => 'App\\Services\\Sap\\SapConfiguration',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sap\\SapFileService',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sap\\SapProcessingService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 38,
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sms\\CelcomSmsService',
        1 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sms\\SmsProcessingService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sms\\SmsProcessingService',
        1 => 'maxAttempts',
        2 => 'App\\Services\\Sms\\SmsProcessingService',
        3 => 
        array (
          0 => 'f' . "\0" . 'config',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Services\\Sms\\SmsProcessingService',
        1 => 'retryDelay',
        2 => 'App\\Services\\Sms\\SmsProcessingService',
        3 => 
        array (
        ),
      ),
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\Sms\\SmsQueueService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'create',
        2 => 36,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ArchiveLogs.php' => 
  array (
    'fileHash' => 'f61cb5c3d77936b1d075dd279024c61a7ece99081bbcf26c3001f35c29452efc',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\CheckConfirmationHealth.php' => 
  array (
    'fileHash' => '85fca114a342472d9f8c6698ad6462de0d4f4f15ad884c1eb17ee068772ff3b6',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessConfirmationEmails.php' => 
  array (
    'fileHash' => '213d58621ef7856be10333bd5f64952e8e68a95c2d6c385aefb2bc4eb62335e5',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSapTransactions.php' => 
  array (
    'fileHash' => '21c8ba4ccac7358bb94090cc9ff8c5b93f79253a4d3d9459bddb3c3cdda5ebaa',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSmsQueue.php' => 
  array (
    'fileHash' => '30f9158d4e2a1579e1443a805ffa1e3aefbac6feba5fde456b99a9ea6c60d649',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php' => 
  array (
    'fileHash' => '39aa542164f617889311856d14d320d6450acf268a242b01bc67d6b038a87875',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php' => 
  array (
    'fileHash' => '16862cf8fc19dce99825d176d83ccd65cc6168ce3ba8c60f149c46381776d6ba',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php' => 
  array (
    'fileHash' => '5939166ee12d5196f4a708ca8e094fa53279c9461ddf422b77cdaab98c02e9fc',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php' => 
  array (
    'fileHash' => '1c40e1d0ea16e546aa0560a28fd00a0e7894872ee60f84a61237f584ad92541a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Email\\EmailProcessingServiceInterface.php' => 
  array (
    'fileHash' => '07aedf087e57ca7edbb5800dc75ae833c2058f3b3f621807b11587cd2bd4c92a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessConfirmationEmails.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Email\\EmailServiceInterface.php' => 
  array (
    'fileHash' => '22a34272a53bc8af3c6bb5b0fe64758f3116717fedace3e14184caa0e1ea0f87',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Health\\ConfirmationHealthServiceInterface.php' => 
  array (
    'fileHash' => '4a8ea5bc46ee4eba3b94baa092ab96807e39004880280908339b7b19f717c3a4',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\CheckConfirmationHealth.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Logging\\LogArchiveServiceInterface.php' => 
  array (
    'fileHash' => 'cd2a580b5f4926978fde0002783cbe943e6d79266852ebaa71caebce36b45e6a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ArchiveLogs.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Logging\\LoggingServiceInterface.php' => 
  array (
    'fileHash' => '8800958a8138441e09737c9c42321ba0c8d4642f159ac4c1efba80671aa853c0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php',
      7 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php',
      8 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LoggingService.php',
      9 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php',
      10 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
      11 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php',
      12 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
      13 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sap\\SapArchiveServiceInterface.php' => 
  array (
    'fileHash' => 'e6e10a1ecfb4adb155898e784b40f9366a970b51d185cf27ed117f93a91ff32a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapArchiveService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sap\\SapProcessingServiceInterface.php' => 
  array (
    'fileHash' => '8a8c12fe88c70eeb8e7c281bbbc9fb58c7d511504a1db3b8eb48316de740d7b2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSapTransactions.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\CelcomSmsServiceInterface.php' => 
  array (
    'fileHash' => '20dbd71db7b104c763219f0c4c7a7a7e674765c0c641b3215fa04f98853448aa',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsMessageBuilderInterface.php' => 
  array (
    'fileHash' => '9fc0b4e56ee1d429b01cf80f8a72c7fc5ec9d5775ad48972e90697bce2c050f7',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsMessageBuilder.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsProcessingServiceInterface.php' => 
  array (
    'fileHash' => '0220115527479185c7eac706d207c04e4a9141ea7c9953c52c6bc999e8ee0e94',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSmsQueue.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsQueueServiceInterface.php' => 
  array (
    'fileHash' => 'c70b431e18b908fa9432aa7ea1900c85f9211e930f6cd08022b628af859d4b26',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Data\\ConfirmationRequestData.php' => 
  array (
    'fileHash' => '1f3828bce16e024a4d115c6ad4c597171888fa96f475dc0942f8c0e6cf786e7c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsQueueServiceInterface.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php',
      7 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php',
      8 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      9 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashGenerator.php',
      10 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
      11 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php',
      12 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\Sanitizer.php',
      13 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\BusinessProfileStatus.php' => 
  array (
    'fileHash' => '9327e09ffe6b09698be68ea91f7b844a0d4bd391f6bb129c447f5d077293bb8d',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\BusinessProfile.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\ProcessSMSTxn.php' => 
  array (
    'fileHash' => '48f5a7addd6cadb110785528f0b8f8b583fa61e2639ff2989dcca8ccd5bb9159',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsQueueServiceInterface.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\ConfirmationTransaction.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\SmsQueue.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php',
      7 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
      8 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
      9 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\Status.php' => 
  array (
    'fileHash' => '6b8b073a03b9c9c5698d77817a05d2224c2f96e8527d1ac503776f15e2991f9e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\ConfirmationTransaction.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\EmailQueue.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\SmsQueue.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\AuthenticationFailedException.php' => 
  array (
    'fileHash' => '5500e306fc3645ffd900d00a0be805bc3474ece40f753513eba3fa9771e024bd',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\BusinessProfileNotFoundException.php' => 
  array (
    'fileHash' => '4e28738a81ad40c9dcdf64dcef404ebc810adbd6afa237312834d5c3273f62dd',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\ConfirmationException.php' => 
  array (
    'fileHash' => '140709894b24515c1fb598d293f7b2b55fe8cd477b0a88d2886446cef1339b40',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Data\\ConfirmationRequestData.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\AuthenticationFailedException.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\BusinessProfileNotFoundException.php',
      7 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\CsvException.php',
      8 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\DuplicateTransactionException.php',
      9 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\HashValidationException.php',
      10 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\InvalidPayloadException.php',
      11 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\TransactionException.php',
      12 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sap\\SapFileException.php',
      13 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsQueueException.php',
      14 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
      15 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php',
      16 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php',
      17 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      18 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
      19 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\CsvException.php' => 
  array (
    'fileHash' => '5e1288aa70f44ba078899ae615d3199672e565111ef74dd0a0ef9c51d218cf05',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\DuplicateTransactionException.php' => 
  array (
    'fileHash' => '4d14e1b6bf1de75b26b43f5dc1a6080e5cbe916977722f9f1f16d9e179a1669c',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\HashValidationException.php' => 
  array (
    'fileHash' => '6999747efdb813f72fbeae1069cedb0de766f4d9c2900bad04e434ca76dace72',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\InvalidPayloadException.php' => 
  array (
    'fileHash' => '8da13e8cb0b6587ae9b74ac31a8a52c7f027e36dedad5b990cdd1c02ccb28354',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Data\\ConfirmationRequestData.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\TransactionException.php' => 
  array (
    'fileHash' => 'eccb9c947948fa76ac6743a5c413a850dc494ddfdb624b10d2e5954354171a48',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailDeliveryException.php' => 
  array (
    'fileHash' => 'edbb3ecf0feb66c08278b6d9a37e411ae4ddb40ff1aba08d99042a4e3ea99cb3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailException.php' => 
  array (
    'fileHash' => '9bd7458c9ffff4b18beef06b75e51127b8ce6343a92bbf01d342a3ac6375b125',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailDeliveryException.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sap\\SapFileException.php' => 
  array (
    'fileHash' => 'd706d228e51f1862468724001819910692bbdc7b7c62eb48eba890535a0ccbe3',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsDeliveryException.php' => 
  array (
    'fileHash' => '8186a073ba08648d653bf9823de9cce0a0ed402beee420c993672464ed8627bd',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsException.php' => 
  array (
    'fileHash' => 'aa9a1f65f0a493ffb45358c6339cc17c7729a9f82d5f3fc0abf2c78cb6e7dc42',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsDeliveryException.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsRejectedException.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsQueueException.php' => 
  array (
    'fileHash' => '5db2c2fc906823847d41be8e08d98875c388bcb3b9fa739b474d06f7955dc08a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsRejectedException.php' => 
  array (
    'fileHash' => '95d589983b499748fa90990f3c921bcf7325a69ead257b3affb5f4051e54d284',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php' => 
  array (
    'fileHash' => '3de2b694a590dca79e79d0cf29da1bb5fbaf84a0ac7fd350aa54921e7d3b869a',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Controller.php' => 
  array (
    'fileHash' => '09e5cac5a69959ccf23d756cda697b993df937c106655d124ff27ca5fe24a705',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Middleware\\AssignRequestUuid.php' => 
  array (
    'fileHash' => 'e33fe8fe8c6d84f3eb54efd6a8dfe4402a2cc5b700b7ee96e81b957aea262010',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\ConfirmationFormatter.php' => 
  array (
    'fileHash' => '1e0b6ab65bf1bf439b5cd71ecc521ba7205f2e08bd8fc6ae181388b97ecb818b',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php' => 
  array (
    'fileHash' => '37b6761f093dc9caa901982bf6f9372d2318307d83ebf2cd2c84dcb7a4281b29',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Mail\\ConfirmationMail.php' => 
  array (
    'fileHash' => '14e7f1950eb7eec8c8464c37d8a04bdd4a4136119e032058e0c6682e2e0a596e',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\BusinessProfile.php' => 
  array (
    'fileHash' => '8b5ccccee9d79cf8970a24021f04f6fba2cdb3faf8d2cf7750cb96e4026b3e36',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashGenerator.php',
      7 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
      8 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapConfiguration.php',
      9 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php',
      10 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\ConfirmationTransaction.php' => 
  array (
    'fileHash' => '46eaa2a2698e8e2bbd4f92ddc0251c2c37d2d4d55e3fe1d2b57d04b0fb2839cd',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapConfiguration.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\CustomerReference.php' => 
  array (
    'fileHash' => '06df90fb09c7e03f7d10b06d79ffcd11ff497483d7f7045622735243afe17330',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\EmailQueue.php' => 
  array (
    'fileHash' => '3fbd749f04da3ae462707bf225e2b31c213ff31eca31bb54fdaf44017703c9d6',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\SmsQueue.php' => 
  array (
    'fileHash' => 'bd0e264cabb2e520bae7f37ce8cebe5bdb1fe6063c4406390a0ac0f3769de549',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsMessageBuilderInterface.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsMessageBuilder.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\User.php' => 
  array (
    'fileHash' => '231f200b35e2afe7c67956a7b5f84b1ae565c596effb034f2c11c8306920191e',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php' => 
  array (
    'fileHash' => '1b85394c309eb3b4772695b29d02da5f32b6fb4623e9e7040f5cfefae0b0d675',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php' => 
  array (
    'fileHash' => '5e705d490e9a76939c5befaca84c96036f1f991c83fcb8ef7cd32d80fd574114',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php' => 
  array (
    'fileHash' => '95d2c92a49026086641ee82ad1daea889429e3af5982923e79bd64ebda8f0e5a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php' => 
  array (
    'fileHash' => '30657df28ab2a1b0c9e0879ded97fcf4653dc5cb805296499c7d82772cd9e3da',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashGenerator.php' => 
  array (
    'fileHash' => '0bf8eca84631b45ddb9707d8cd604732478cfa1bf7b396d80dde2943bd121d3f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php' => 
  array (
    'fileHash' => '9898e6fc4d0322d5bb6cee07f07ae386976573e4e919deb94e40a7c308c3b760',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php' => 
  array (
    'fileHash' => '0761bf2df60b599a7922227cbf05e23116e09e50943148f087d79e0bfaa73ad3',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Csv\\CsvService.php' => 
  array (
    'fileHash' => '06cd38f82d1664a6bdc2f80e97a14e8d3b3761af07c47ab89decb87a45ece693',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php' => 
  array (
    'fileHash' => 'eb758281e7bdbaf8a0f2c0841f5426c7fb05236635b772e4196e342db0c7fe26',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php' => 
  array (
    'fileHash' => '59c331191b9186c03ce9aef9e4960b83753d4df1752ad64918d43ff46955f516',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php' => 
  array (
    'fileHash' => 'c055b56bfb7b845141743e2ab616e802a824cef6c017b77d72b31fed85cc097f',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\ConfirmationContextProcessor.php' => 
  array (
    'fileHash' => '2562034b6d9395865c7843a729d0fb86c28720c6c9fa8d186302e4cb8d7bb379',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\ConfirmationFormatter.php' => 
  array (
    'fileHash' => 'f30bc003d62769555fec60e028a0537ded1be56d3c7f59111340fe929e789342',
    'dependentFiles' => 
    array (
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php' => 
  array (
    'fileHash' => 'd8efb8ee7950dae5b737a2ece052c814f7daf152a8323562d6171b7e0b1815f2',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LoggingService.php' => 
  array (
    'fileHash' => '975880ec211448b4f88e6b3a225c9529ea4049a398261b2a5b4de5b1fcb850b9',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php',
      3 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php',
      4 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php',
      5 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php',
      6 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
      7 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php',
      8 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\Sanitizer.php' => 
  array (
    'fileHash' => '84c89c35dd26b7b3164a641864fc537e728c5d2fa81ee36aad846a3488f9bcf0',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapArchiveService.php' => 
  array (
    'fileHash' => 'b242dd40190078ce33678d205fe72f8215119a24e2204837954d80ad07c73605',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapConfiguration.php' => 
  array (
    'fileHash' => '7fcb874cc4c4ad3b73862d0bc0f23f4fcc5e54402a5257ce0576e67a5f8c4001',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\BusinessProfile.php',
      1 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php',
      2 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php' => 
  array (
    'fileHash' => '266810c466216097023d1d70ac14d701c89a4d2abeeccad285684731e66c5e34',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php' => 
  array (
    'fileHash' => '8b149f3571be100abb45ad80aea1f2369d35bd72dd66fd1429c57c96e6377d5a',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php' => 
  array (
    'fileHash' => '0793d6103ce9a04093b17cefd22ef6e3e81b17663517a85feb86908606f0d456',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsMessageBuilder.php' => 
  array (
    'fileHash' => 'b4fda5865aa83eedbb15a0ffee6a91795197a989930b90e7a4e42aa7eddf9028',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php' => 
  array (
    'fileHash' => 'edc46193932db8da0389062e4a2ebcb79009fb99550c692cb590a247c66c1323',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php' => 
  array (
    'fileHash' => 'e6654d581e5fc5b6e2412d7b542cf18560e7ee9e4644bbc86e0bf5f8a8b22162',
    'dependentFiles' => 
    array (
      0 => 'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php',
    ),
  ),
),
	'packageDependencies' => array (
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\CheckConfirmationHealth.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\CelcomSmsServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsProcessingServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsQueueServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\AuthenticationFailedException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sap\\SapFileException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Middleware\\AssignRequestUuid.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
    2 => 'ramsey/uuid',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Mail\\ConfirmationMail.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\BusinessProfile.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\ConfirmationTransaction.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\EmailQueue.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/container',
    2 => 'symfony/http-kernel',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
    2 => 'psr/simple-cache',
    3 => 'symfony/finder',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\ConfirmationContextProcessor.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\Sanitizer.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessConfirmationEmails.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Email\\EmailServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sap\\SapArchiveServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sap\\SapProcessingServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\ProcessSMSTxn.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\DuplicateTransactionException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailDeliveryException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsQueueException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-foundation',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\CustomerReference.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\SmsQueue.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\ConfirmationFormatter.php' => 
  array (
    0 => 'monolog/monolog',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/finder',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ArchiveLogs.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSapTransactions.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Health\\ConfirmationHealthServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Logging\\LogArchiveServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Logging\\LoggingServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsMessageBuilderInterface.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\BusinessProfileNotFoundException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\CsvException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\HashValidationException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsDeliveryException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Controller.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\ConfirmationFormatter.php' => 
  array (
    0 => 'monolog/monolog',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'psr/log',
    2 => 'monolog/monolog',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\User.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapArchiveService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/finder',
    2 => 'nesbot/carbon',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSmsQueue.php' => 
  array (
    0 => 'symfony/console',
    1 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Email\\EmailProcessingServiceInterface.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Data\\ConfirmationRequestData.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\BusinessProfileStatus.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\Status.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\ConfirmationException.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-kernel',
    2 => 'psr/container',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\InvalidPayloadException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\TransactionException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsRejectedException.php' => 
  array (
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashGenerator.php' => 
  array (
    0 => 'laravel/framework',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Csv\\CsvService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/finder',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/mailer',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LoggingService.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'symfony/http-kernel',
    2 => 'psr/container',
    3 => 'symfony/http-foundation',
    4 => 'psr/log',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapConfiguration.php' => 
  array (
    0 => 'laravel/framework',
    1 => 'nesbot/carbon',
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsMessageBuilder.php' => 
  array (
    0 => 'laravel/framework',
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ArchiveLogs.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ArchiveLogs',
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
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Contracts\\Logging\\LogArchiveServiceInterface',
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
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Signature',
           'args' => 
          array (
            0 => '\'logs:archive\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Description',
           'args' => 
          array (
            0 => '\'Archives old log files\'',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\CheckConfirmationHealth.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\CheckConfirmationHealth',
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
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Contracts\\Health\\ConfirmationHealthServiceInterface',
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
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Signature',
           'args' => 
          array (
            0 => '\'confirmation:health\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Description',
           'args' => 
          array (
            0 => '\'Checks the confirmation service health\'',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessConfirmationEmails.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ProcessConfirmationEmails',
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
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'emailprocessingserviceinterface' => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
              'description' => 'Illuminate\\Console\\Attributes\\Description',
              'signature' => 'Illuminate\\Console\\Attributes\\Signature',
              'command' => 'Illuminate\\Console\\Command',
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
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'processor',
               'type' => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
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
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Signature',
           'args' => 
          array (
            0 => '\'email:confirmation\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Description',
           'args' => 
          array (
            0 => '\'Process pending confirmation emails\'',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSapTransactions.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ProcessSapTransactions',
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
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'sapprocessingserviceinterface' => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
              'description' => 'Illuminate\\Console\\Attributes\\Description',
              'signature' => 'Illuminate\\Console\\Attributes\\Signature',
              'command' => 'Illuminate\\Console\\Command',
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
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'processor',
               'type' => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
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
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Signature',
           'args' => 
          array (
            0 => '\'sap:process\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Description',
           'args' => 
          array (
            0 => '\'Command description\'',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Console\\Commands\\ProcessSmsQueue.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\ProcessSmsQueue',
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
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'smsprocessingserviceinterface' => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
              'description' => 'Illuminate\\Console\\Attributes\\Description',
              'signature' => 'Illuminate\\Console\\Attributes\\Signature',
              'command' => 'Illuminate\\Console\\Command',
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
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
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
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Signature',
           'args' => 
          array (
            0 => '\'sms:process\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Console\\Attributes\\Description',
           'args' => 
          array (
            0 => '\'Command description\'',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Business\\BusinessProfileServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'find',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws BusinessProfileNotFoundException
     */',
             'namespace' => 'App\\Contracts\\Business',
             'uses' => 
            array (
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'businessprofilenotfoundexception' => 'App\\Exceptions\\Confirmation\\BusinessProfileNotFoundException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
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
           'returnType' => 'App\\Models\\BusinessProfile',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\AuthenticationServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws AuthenticationFailedException
     */',
             'namespace' => 'App\\Contracts\\Confirmation',
             'uses' => 
            array (
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'authenticationfailedexception' => 'App\\Exceptions\\Confirmation\\AuthenticationFailedException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\HashValidationServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws HashValidationException
     */',
             'namespace' => 'App\\Contracts\\Confirmation',
             'uses' => 
            array (
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'hashvalidationexception' => 'App\\Exceptions\\Confirmation\\HashValidationException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Confirmation\\TransactionServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ensureNotDuplicate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws DuplicateTransactionException
     */',
             'namespace' => 'App\\Contracts\\Confirmation',
             'uses' => 
            array (
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
              'duplicatetransactionexception' => 'App\\Exceptions\\Confirmation\\DuplicateTransactionException',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'process',
               'type' => 'App\\Enum\\ProcessSMSTxn',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Email\\EmailProcessingServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processPending',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Email\\EmailServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Email\\EmailServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<int, string> $recipients
     */',
             'namespace' => 'App\\Contracts\\Email',
             'uses' => 
            array (
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
               'name' => 'recipients',
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
               'name' => 'subject',
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
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'header',
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
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
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
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attachment',
               'type' => '?string',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Health\\ConfirmationHealthServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Health\\ConfirmationHealthServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'check',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Logging\\LogArchiveServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Logging\\LogArchiveServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archive',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archiveCurrentLog',
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
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Logging\\LoggingServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'info',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Contracts\\Logging',
             'uses' => 
            array (
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'notice',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Contracts\\Logging',
             'uses' => 
            array (
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'warning',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Contracts\\Logging',
             'uses' => 
            array (
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'error',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Contracts\\Logging',
             'uses' => 
            array (
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sap\\SapArchiveServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Sap\\SapArchiveServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepare',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sourceFile',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'temporaryFile',
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
               'name' => 'originalFile',
               'type' => '?string',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sap\\SapProcessingServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processPending',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\CelcomSmsServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Sms\\CelcomSmsServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Contracts\\Sms',
             'uses' => 
            array (
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mobile',
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
               'name' => 'message',
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
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsMessageBuilderInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Sms\\SmsMessageBuilderInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'build',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sms',
               'type' => 'App\\Models\\SmsQueue',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsProcessingServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processPending',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Contracts\\Sms\\SmsQueueServiceInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Contracts\\Sms\\SmsQueueServiceInterface',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'queue',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'post',
               'type' => 'App\\Enum\\ProcessSMSTxn',
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
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Data\\ConfirmationRequestData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Data\\ConfirmationRequestData',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @phpstan-type ConfirmationPayload array{
 *     Hash: string,
 *     Mobile: string,
 *     Username: string,
 *     Password: string,
 *     name: string,
 *     TransAmount: string,
 *     created_at: string,
 *     TransID: string,
 *     TransTime: string,
 *     TransType: string,
 *     BillRefNumber: string,
 *     BusinessShortCode: string
 * }
 */',
         'namespace' => 'App\\Data',
         'uses' => 
        array (
          'invalidpayloadexception' => 'App\\Exceptions\\Confirmation\\InvalidPayloadException',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
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
               'name' => 'hash',
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
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mobile',
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
               'name' => 'amount',
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
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'username',
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
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'password',
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
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'createdAt',
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
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'customerName',
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
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'billReference',
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
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactionId',
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
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactionTime',
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
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactionType',
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
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'businessShortCode',
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
           'name' => 'fromArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $payload
     * @throws InvalidPayloadException
     */',
             'namespace' => 'App\\Data',
             'uses' => 
            array (
              'invalidpayloadexception' => 'App\\Exceptions\\Confirmation\\InvalidPayloadException',
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
           'static' => true,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'payload',
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
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'sanitized',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\BusinessProfileStatus.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enum\\BusinessProfileStatus',
       'scalarType' => 'int',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'NO',
           'value' => '0',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'YES',
           'value' => '1',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\ProcessSMSTxn.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enum\\ProcessSMSTxn',
       'scalarType' => 'int',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'NO',
           'value' => '0',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'YES',
           'value' => '1',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Enum\\Status.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Enum\\Status',
       'scalarType' => 'int',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PENDING',
           'value' => '0',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PROCESSING',
           'value' => '1',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PROCESSED',
           'value' => '2',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'FAILED',
           'value' => '3',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ABANDONED',
           'value' => '4',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\AuthenticationFailedException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\AuthenticationFailedException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
               'name' => 'message',
               'type' => 'string',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\BusinessProfileNotFoundException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\BusinessProfileNotFoundException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
               'name' => 'businessShortCode',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\ConfirmationException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Exception',
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
           'name' => 'resultCode',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'resultDescription',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\CsvException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\CsvException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\DuplicateTransactionException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\DuplicateTransactionException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
               'name' => 'transactionId',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\HashValidationException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\HashValidationException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\InvalidPayloadException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\InvalidPayloadException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
               'name' => 'message',
               'type' => 'string',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Confirmation\\TransactionException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Confirmation\\TransactionException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailDeliveryException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Email\\EmailDeliveryException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Email\\EmailException',
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
               'name' => 'recipient',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
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
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Email\\EmailException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Email\\EmailException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'RuntimeException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sap\\SapFileException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Sap\\SapFileException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsDeliveryException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Sms\\SmsDeliveryException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Sms\\SmsException',
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
               'name' => 'mobile',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
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
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Sms\\SmsException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'RuntimeException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsQueueException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Sms\\SmsQueueException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Confirmation\\ConfirmationException',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Exceptions\\Sms\\SmsRejectedException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Exceptions\\Sms\\SmsRejectedException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Exceptions\\Sms\\SmsException',
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
     * @return void
     */',
             'namespace' => 'App\\Exceptions\\Sms',
             'uses' => 
            array (
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
               'name' => 'mobile',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
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
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => '?array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 65,
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Api\\ConfirmationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Api\\ConfirmationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
               'name' => 'confirmationService',
               'type' => 'App\\Services\\Confirmation\\ConfirmationService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Controllers\\Controller.php' => 
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Http\\Middleware\\AssignRequestUuid.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\AssignRequestUuid',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\ConfirmationFormatter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Logging\\ConfirmationFormatter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Monolog\\Formatter\\LineFormatter',
       'implements' => 
      array (
        0 => 'Monolog\\Formatter\\FormatterInterface',
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
           'name' => 'format',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws JsonException
     */',
             'namespace' => 'App\\Logging',
             'uses' => 
            array (
              'jsonexception' => 'JsonException',
              'formatterinterface' => 'Monolog\\Formatter\\FormatterInterface',
              'lineformatter' => 'Monolog\\Formatter\\LineFormatter',
              'logrecord' => 'Monolog\\LogRecord',
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
               'name' => 'record',
               'type' => 'Monolog\\LogRecord',
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
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'formatBatch',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'records',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Logging\\CustomizeConfirmationLogger.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Logging\\CustomizeConfirmationLogger',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
           'name' => '__invoke',
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
               'name' => 'logger',
               'type' => 'Illuminate\\Log\\Logger',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Mail\\ConfirmationMail.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Mail\\ConfirmationMail',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
               'name' => 'subjectText',
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
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'header',
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
               'name' => 'messageBody',
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
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attachment',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
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
           'returnType' => 'self',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\BusinessProfile.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\BusinessProfile',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property string $username
 * @property string $password
 * @property string $business_short_code
 * @property string $sap_file
 * @property string $business_transaction
 * @property string $area_code
 * @property string $profit_center
 * @property array $sap_headers
 * @property string $secret_key
 * @property mixed $credit_account
 *
 * @method static static updateOrCreate(array<string, mixed> $attributes, array<string, mixed> $values)
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'businessprofilestatus' => 'App\\Enum\\BusinessProfileStatus',
          'sapconfiguration' => 'App\\Services\\Sap\\SapConfiguration',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
        ),
         'constUses' => 
        array (
        ),
      )),
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'guarded',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'attributes',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'credentialsMatch',
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
               'name' => 'username',
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
               'name' => 'password',
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
           'name' => 'sapConfiguration',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Services\\Sap\\SapConfiguration',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\ConfirmationTransaction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\ConfirmationTransaction',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static where(string $string, string $transactionId)
 * @method static static create(array<string, mixed> $attributes)
 *
 * @property mixed $transaction_id
 * @property mixed $bill_reference
 * @property mixed $customer_name
 * @property mixed $created_at
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
          'status' => 'App\\Enum\\Status',
          'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
        ),
         'constUses' => 
        array (
        ),
      )),
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'attributes',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'customerName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Attribute<never, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
              'status' => 'App\\Enum\\Status',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\CustomerReference.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\CustomerReference',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property mixed $name
 * @property mixed $mobile
 *
 * @method static updateOrCreate(string[] $array, string[] $reference)
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
        ),
         'constUses' => 
        array (
        ),
      )),
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'name',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Attribute<never, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\EmailQueue.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\EmailQueue',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @property array<int, string> $recipients
 * @property string $subject
 * @property string $header
 * @property string $attachment
 * @property string $message
 * @property Status $status
 * @property int $attempts
 * @property Carbon|null $processed_at
 * @property Carbon|null $next_retry_at
 *
 * @method static static create(array<string, mixed> $attributes)
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'status' => 'App\\Enum\\Status',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'carbon' => 'Illuminate\\Support\\Carbon',
        ),
         'constUses' => 
        array (
        ),
      )),
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'attributes',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\SmsQueue.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\SmsQueue',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static static create(array<string, mixed> $attributes)
 *
 * @property mixed $bill_reference
 * @property mixed $amount
 * @property mixed $customer_name
 * @property mixed $created_at
 * @property mixed $mpesa_ref
 */',
         'namespace' => 'App\\Models',
         'uses' => 
        array (
          'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
          'status' => 'App\\Enum\\Status',
          'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
        ),
         'constUses' => 
        array (
        ),
      )),
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
            0 => 'timestamps',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'attributes',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'customerName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Attribute<never, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
              'status' => 'App\\Enum\\Status',
              'attribute' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
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
           'returnType' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Models\\User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
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
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'name\', \'email\', \'password\']',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
           'args' => 
          array (
            0 => '[\'password\', \'remember_token\']',
          ),
        )),
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Providers\\AppServiceProvider.php' => 
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
              'businessprofileserviceinterface' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
              'authenticationserviceinterface' => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
              'hashvalidationserviceinterface' => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
              'transactionserviceinterface' => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
              'emailprocessingserviceinterface' => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
              'emailserviceinterface' => 'App\\Contracts\\Email\\EmailServiceInterface',
              'confirmationhealthserviceinterface' => 'App\\Contracts\\Health\\ConfirmationHealthServiceInterface',
              'logarchiveserviceinterface' => 'App\\Contracts\\Logging\\LogArchiveServiceInterface',
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'saparchiveserviceinterface' => 'App\\Contracts\\Sap\\SapArchiveServiceInterface',
              'sapprocessingserviceinterface' => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
              'celcomsmsserviceinterface' => 'App\\Contracts\\Sms\\CelcomSmsServiceInterface',
              'smsmessagebuilderinterface' => 'App\\Contracts\\Sms\\SmsMessageBuilderInterface',
              'smsprocessingserviceinterface' => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
              'smsqueueserviceinterface' => 'App\\Contracts\\Sms\\SmsQueueServiceInterface',
              'businessprofileservice' => 'App\\Services\\Business\\BusinessProfileService',
              'authenticationservice' => 'App\\Services\\Confirmation\\AuthenticationService',
              'hashvalidationservice' => 'App\\Services\\Confirmation\\HashValidationService',
              'transactionservice' => 'App\\Services\\Confirmation\\TransactionService',
              'emailprocessingservice' => 'App\\Services\\Email\\EmailProcessingService',
              'emailservice' => 'App\\Services\\Email\\EmailService',
              'confirmationhealthservice' => 'App\\Services\\Health\\ConfirmationHealthService',
              'logarchiveservice' => 'App\\Services\\Logging\\LogArchiveService',
              'loggingservice' => 'App\\Services\\Logging\\LoggingService',
              'saparchiveservice' => 'App\\Services\\Sap\\SapArchiveService',
              'sapprocessingservice' => 'App\\Services\\Sap\\SapProcessingService',
              'celcomsmsservice' => 'App\\Services\\Sms\\CelcomSmsService',
              'smsmessagebuilder' => 'App\\Services\\Sms\\SmsMessageBuilder',
              'smsprocessingservice' => 'App\\Services\\Sms\\SmsProcessingService',
              'smsqueueservice' => 'App\\Services\\Sms\\SmsQueueService',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'url' => 'Illuminate\\Support\\Facades\\URL',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'Override',
               'args' => 
              array (
              ),
            )),
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
              'businessprofileserviceinterface' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
              'authenticationserviceinterface' => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
              'hashvalidationserviceinterface' => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
              'transactionserviceinterface' => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
              'emailprocessingserviceinterface' => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
              'emailserviceinterface' => 'App\\Contracts\\Email\\EmailServiceInterface',
              'confirmationhealthserviceinterface' => 'App\\Contracts\\Health\\ConfirmationHealthServiceInterface',
              'logarchiveserviceinterface' => 'App\\Contracts\\Logging\\LogArchiveServiceInterface',
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'saparchiveserviceinterface' => 'App\\Contracts\\Sap\\SapArchiveServiceInterface',
              'sapprocessingserviceinterface' => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
              'celcomsmsserviceinterface' => 'App\\Contracts\\Sms\\CelcomSmsServiceInterface',
              'smsmessagebuilderinterface' => 'App\\Contracts\\Sms\\SmsMessageBuilderInterface',
              'smsprocessingserviceinterface' => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
              'smsqueueserviceinterface' => 'App\\Contracts\\Sms\\SmsQueueServiceInterface',
              'businessprofileservice' => 'App\\Services\\Business\\BusinessProfileService',
              'authenticationservice' => 'App\\Services\\Confirmation\\AuthenticationService',
              'hashvalidationservice' => 'App\\Services\\Confirmation\\HashValidationService',
              'transactionservice' => 'App\\Services\\Confirmation\\TransactionService',
              'emailprocessingservice' => 'App\\Services\\Email\\EmailProcessingService',
              'emailservice' => 'App\\Services\\Email\\EmailService',
              'confirmationhealthservice' => 'App\\Services\\Health\\ConfirmationHealthService',
              'logarchiveservice' => 'App\\Services\\Logging\\LogArchiveService',
              'loggingservice' => 'App\\Services\\Logging\\LoggingService',
              'saparchiveservice' => 'App\\Services\\Sap\\SapArchiveService',
              'sapprocessingservice' => 'App\\Services\\Sap\\SapProcessingService',
              'celcomsmsservice' => 'App\\Services\\Sms\\CelcomSmsService',
              'smsmessagebuilder' => 'App\\Services\\Sms\\SmsMessageBuilder',
              'smsprocessingservice' => 'App\\Services\\Sms\\SmsProcessingService',
              'smsqueueservice' => 'App\\Services\\Sms\\SmsQueueService',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'db' => 'Illuminate\\Support\\Facades\\DB',
              'url' => 'Illuminate\\Support\\Facades\\URL',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Business\\BusinessProfileService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Business\\BusinessProfileService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
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
           'name' => 'find',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws BusinessProfileNotFoundException
     */',
             'namespace' => 'App\\Services\\Business',
             'uses' => 
            array (
              'businessprofileserviceinterface' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'businessprofilestatus' => 'App\\Enum\\BusinessProfileStatus',
              'businessprofilenotfoundexception' => 'App\\Exceptions\\Confirmation\\BusinessProfileNotFoundException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
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
           'returnType' => 'App\\Models\\BusinessProfile',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
           'name' => 'findByShortCode',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws BusinessProfileNotFoundException
     */',
             'namespace' => 'App\\Services\\Business',
             'uses' => 
            array (
              'businessprofileserviceinterface' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'businessprofilestatus' => 'App\\Enum\\BusinessProfileStatus',
              'businessprofilenotfoundexception' => 'App\\Exceptions\\Confirmation\\BusinessProfileNotFoundException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
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
           'returnType' => 'App\\Models\\BusinessProfile',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'businessShortCode',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\AuthenticationService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Confirmation\\AuthenticationService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
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
           'name' => 'authenticate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws AuthenticationFailedException
     */',
             'namespace' => 'App\\Services\\Confirmation',
             'uses' => 
            array (
              'authenticationserviceinterface' => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'authenticationfailedexception' => 'App\\Exceptions\\Confirmation\\AuthenticationFailedException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\ConfirmationService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Confirmation\\ConfirmationService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
               'name' => 'profiles',
               'type' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'authentication',
               'type' => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hashValidation',
               'type' => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transactions',
               'type' => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sms',
               'type' => 'App\\Contracts\\Sms\\SmsQueueServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'process',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws BusinessProfileNotFoundException
     */',
             'namespace' => 'App\\Services\\Confirmation',
             'uses' => 
            array (
              'businessprofileserviceinterface' => 'App\\Contracts\\Business\\BusinessProfileServiceInterface',
              'authenticationserviceinterface' => 'App\\Contracts\\Confirmation\\AuthenticationServiceInterface',
              'hashvalidationserviceinterface' => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
              'transactionserviceinterface' => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'smsqueueserviceinterface' => 'App\\Contracts\\Sms\\SmsQueueServiceInterface',
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
              'authenticationfailedexception' => 'App\\Exceptions\\Confirmation\\AuthenticationFailedException',
              'businessprofilenotfoundexception' => 'App\\Exceptions\\Confirmation\\BusinessProfileNotFoundException',
              'duplicatetransactionexception' => 'App\\Exceptions\\Confirmation\\DuplicateTransactionException',
              'hashvalidationexception' => 'App\\Exceptions\\Confirmation\\HashValidationException',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashGenerator.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Confirmation\\HashGenerator',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
           'name' => 'generate',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\HashValidationService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Confirmation\\HashValidationService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
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
               'name' => 'generator',
               'type' => 'App\\Services\\Confirmation\\HashGenerator',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws HashValidationException
     */',
             'namespace' => 'App\\Services\\Confirmation',
             'uses' => 
            array (
              'hashvalidationserviceinterface' => 'App\\Contracts\\Confirmation\\HashValidationServiceInterface',
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'hashvalidationexception' => 'App\\Exceptions\\Confirmation\\HashValidationException',
              'businessprofile' => 'App\\Models\\BusinessProfile',
              'loggingservice' => 'App\\Services\\Logging\\LoggingService',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Confirmation\\TransactionService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Confirmation\\TransactionService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
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
           'name' => 'ensureNotDuplicate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws DuplicateTransactionException
     */',
             'namespace' => 'App\\Services\\Confirmation',
             'uses' => 
            array (
              'transactionserviceinterface' => 'App\\Contracts\\Confirmation\\TransactionServiceInterface',
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
              'processsmstxn' => 'App\\Enum\\ProcessSMSTxn',
              'duplicatetransactionexception' => 'App\\Exceptions\\Confirmation\\DuplicateTransactionException',
              'confirmationtransaction' => 'App\\Models\\ConfirmationTransaction',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'process',
               'type' => 'App\\Enum\\ProcessSMSTxn',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Csv\\CsvService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Csv\\CsvService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
           'name' => 'write',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param list<string> $headers
     * @param list<list<int|float|string|bool|null>> $rows
     */',
             'namespace' => 'App\\Services\\Csv',
             'uses' => 
            array (
              'file' => 'Illuminate\\Support\\Facades\\File',
              'runtimeexception' => 'RuntimeException',
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
               'name' => 'path',
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
               'name' => 'rows',
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
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'headers',
               'type' => 'array',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'read',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<list<string>>
     */',
             'namespace' => 'App\\Services\\Csv',
             'uses' => 
            array (
              'file' => 'Illuminate\\Support\\Facades\\File',
              'runtimeexception' => 'RuntimeException',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
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
               'name' => 'includeHeader',
               'type' => 'bool',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailProcessingService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Email\\EmailProcessingService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
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
               'name' => 'mailer',
               'type' => 'App\\Contracts\\Email\\EmailServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sapArchive',
               'type' => 'App\\Contracts\\Sap\\SapArchiveServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processPending',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Email\\EmailService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Email\\EmailService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Email\\EmailServiceInterface',
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
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
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
               'name' => 'recipients',
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
               'name' => 'subject',
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
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'header',
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
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
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
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attachment',
               'type' => '?string',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Health\\ConfirmationHealthService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Health\\ConfirmationHealthService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Health\\ConfirmationHealthServiceInterface',
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
               'name' => 'email',
               'type' => 'App\\Contracts\\Email\\EmailServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logArchive',
               'type' => 'App\\Contracts\\Logging\\LogArchiveServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'check',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\ConfirmationContextProcessor.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Logging\\ConfirmationContextProcessor',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\ConfirmationFormatter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Logging\\ConfirmationFormatter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
           'name' => '__invoke',
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
               'name' => 'logger',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LogArchiveService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Logging\\LogArchiveService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Logging\\LogArchiveServiceInterface',
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
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'directory',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archive',
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
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archiveCurrentLog',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\LoggingService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Logging\\LoggingService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Logging\\LoggingServiceInterface',
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
           'name' => 'info',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Services\\Logging',
             'uses' => 
            array (
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'log' => 'Illuminate\\Support\\Facades\\Log',
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'error',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Services\\Logging',
             'uses' => 
            array (
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'log' => 'Illuminate\\Support\\Facades\\Log',
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'debug',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Services\\Logging',
             'uses' => 
            array (
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'log' => 'Illuminate\\Support\\Facades\\Log',
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'notice',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Services\\Logging',
             'uses' => 
            array (
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'log' => 'Illuminate\\Support\\Facades\\Log',
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'warning',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param array<string, mixed> $context
     */',
             'namespace' => 'App\\Services\\Logging',
             'uses' => 
            array (
              'loggingserviceinterface' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
              'log' => 'Illuminate\\Support\\Facades\\Log',
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
               'name' => 'message',
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
               'name' => 'context',
               'type' => 'array',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Logging\\Sanitizer.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Logging\\Sanitizer',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @phpstan-import-type ConfirmationPayload from ConfirmationRequestData
 */',
         'namespace' => 'App\\Services\\Logging',
         'uses' => 
        array (
          'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
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
           'name' => 'payload',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Services\\Logging',
             'uses' => 
            array (
              'confirmationrequestdata' => 'App\\Data\\ConfirmationRequestData',
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
           'static' => true,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'payload',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapArchiveService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sap\\SapArchiveService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Sap\\SapArchiveServiceInterface',
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
           'name' => 'prepare',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sourceFile',
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
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'archive',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'temporaryFile',
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
               'name' => 'originalFile',
               'type' => '?string',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapConfiguration.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sap\\SapConfiguration',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'file',
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
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'headers',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<string>
     */',
             'namespace' => 'App\\Services\\Sap',
             'uses' => 
            array (
              'businessprofile' => 'App\\Models\\BusinessProfile',
              'confirmationtransaction' => 'App\\Models\\ConfirmationTransaction',
              'carbon' => 'Carbon\\Carbon',
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
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'row',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return list<string>
     */',
             'namespace' => 'App\\Services\\Sap',
             'uses' => 
            array (
              'businessprofile' => 'App\\Models\\BusinessProfile',
              'confirmationtransaction' => 'App\\Models\\ConfirmationTransaction',
              'carbon' => 'Carbon\\Carbon',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'transaction',
               'type' => 'App\\Models\\ConfirmationTransaction',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapFileService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sap\\SapFileService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
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
               'name' => 'csv',
               'type' => 'App\\Services\\Csv\\CsvService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'write',
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
               'name' => 'transaction',
               'type' => 'App\\Models\\ConfirmationTransaction',
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
               'name' => 'profile',
               'type' => 'App\\Models\\BusinessProfile',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sap\\SapProcessingService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sap\\SapProcessingService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
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
               'name' => 'sap',
               'type' => 'App\\Services\\Sap\\SapFileService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'profiles',
               'type' => 'App\\Services\\Business\\BusinessProfileService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processPending',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\CelcomSmsService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sms\\CelcomSmsService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Sms\\CelcomSmsServiceInterface',
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
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws ConnectionException
     */',
             'namespace' => 'App\\Services\\Sms',
             'uses' => 
            array (
              'celcomsmsserviceinterface' => 'App\\Contracts\\Sms\\CelcomSmsServiceInterface',
              'smsdeliveryexception' => 'App\\Exceptions\\Sms\\SmsDeliveryException',
              'smsrejectedexception' => 'App\\Exceptions\\Sms\\SmsRejectedException',
              'loggingservice' => 'App\\Services\\Logging\\LoggingService',
              'connectionexception' => 'Illuminate\\Http\\Client\\ConnectionException',
              'http' => 'Illuminate\\Support\\Facades\\Http',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mobile',
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
               'name' => 'message',
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
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsMessageBuilder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sms\\SmsMessageBuilder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Sms\\SmsMessageBuilderInterface',
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
           'name' => 'build',
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
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sms',
               'type' => 'App\\Models\\SmsQueue',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsProcessingService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sms\\SmsProcessingService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
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
               'name' => 'sms',
               'type' => 'App\\Contracts\\Sms\\CelcomSmsServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'builder',
               'type' => 'App\\Contracts\\Sms\\SmsMessageBuilderInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'App\\Contracts\\Logging\\LoggingServiceInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processPending',
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
  'C:\\Users\\vinsc\\Herd\\devyanivbl\\app\\Services\\Sms\\SmsQueueService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\Sms\\SmsQueueService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Contracts\\Sms\\SmsQueueServiceInterface',
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
               'name' => 'logger',
               'type' => 'App\\Services\\Logging\\LoggingService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'queue',
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
               'name' => 'request',
               'type' => 'App\\Data\\ConfirmationRequestData',
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
               'name' => 'post',
               'type' => 'App\\Enum\\ProcessSMSTxn',
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
); },
];
