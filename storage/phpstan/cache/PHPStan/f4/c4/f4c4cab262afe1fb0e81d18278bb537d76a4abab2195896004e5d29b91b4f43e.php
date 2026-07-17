<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Console\Commands\ProcessSapTransactions.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\ProcessSapTransactions
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-21c8ba4ccac7358bb94090cc9ff8c5b93f79253a4d3d9459bddb3c3cdda5ebaa',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\ProcessSapTransactions',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Console/Commands/ProcessSapTransactions.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\ProcessSapTransactions',
    'shortName' => 'ProcessSapTransactions',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Illuminate\\Console\\Attributes\\Signature',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\'sap:process\'',
            'attributes' => 
            array (
              'startLine' => 12,
              'endLine' => 12,
              'startTokenPos' => 38,
              'startFilePos' => 256,
              'endTokenPos' => 38,
              'endFilePos' => 268,
            ),
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'Illuminate\\Console\\Attributes\\Description',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\'Command description\'',
            'attributes' => 
            array (
              'startLine' => 13,
              'endLine' => 13,
              'startTokenPos' => 45,
              'startFilePos' => 286,
              'endTokenPos' => 45,
              'endFilePos' => 306,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 12,
    'endLine' => 25,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
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
    ),
    'immediateMethods' => 
    array (
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'processor' => 
          array (
            'name' => 'processor',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Contracts\\Sap\\SapProcessingServiceInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 28,
            'endColumn' => 67,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the console command.
 */',
        'startLine' => 19,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\ProcessSapTransactions',
        'implementingClassName' => 'App\\Console\\Commands\\ProcessSapTransactions',
        'currentClassName' => 'App\\Console\\Commands\\ProcessSapTransactions',
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