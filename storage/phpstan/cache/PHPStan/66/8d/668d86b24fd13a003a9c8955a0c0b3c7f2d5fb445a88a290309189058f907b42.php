<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Console\Commands\ProcessConfirmationEmails.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\ProcessConfirmationEmails
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-213d58621ef7856be10333bd5f64952e8e68a95c2d6c385aefb2bc4eb62335e5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\ProcessConfirmationEmails',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Console/Commands/ProcessConfirmationEmails.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\ProcessConfirmationEmails',
    'shortName' => 'ProcessConfirmationEmails',
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
            'code' => '\'email:confirmation\'',
            'attributes' => 
            array (
              'startLine' => 12,
              'endLine' => 12,
              'startTokenPos' => 38,
              'startFilePos' => 260,
              'endTokenPos' => 38,
              'endFilePos' => 279,
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
            'code' => '\'Process pending confirmation emails\'',
            'attributes' => 
            array (
              'startLine' => 13,
              'endLine' => 13,
              'startTokenPos' => 45,
              'startFilePos' => 297,
              'endTokenPos' => 45,
              'endFilePos' => 333,
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
                'name' => 'App\\Contracts\\Email\\EmailProcessingServiceInterface',
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
            'endColumn' => 69,
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
        'declaringClassName' => 'App\\Console\\Commands\\ProcessConfirmationEmails',
        'implementingClassName' => 'App\\Console\\Commands\\ProcessConfirmationEmails',
        'currentClassName' => 'App\\Console\\Commands\\ProcessConfirmationEmails',
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