<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Console\Commands\ProcessSmsQueue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\ProcessSmsQueue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-30f9158d4e2a1579e1443a805ffa1e3aefbac6feba5fde456b99a9ea6c60d649',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\ProcessSmsQueue',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Console/Commands/ProcessSmsQueue.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\ProcessSmsQueue',
    'shortName' => 'ProcessSmsQueue',
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
            'code' => '\'sms:process\'',
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
          'service' => 
          array (
            'name' => 'service',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Contracts\\Sms\\SmsProcessingServiceInterface',
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
            'endColumn' => 65,
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
        'declaringClassName' => 'App\\Console\\Commands\\ProcessSmsQueue',
        'implementingClassName' => 'App\\Console\\Commands\\ProcessSmsQueue',
        'currentClassName' => 'App\\Console\\Commands\\ProcessSmsQueue',
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