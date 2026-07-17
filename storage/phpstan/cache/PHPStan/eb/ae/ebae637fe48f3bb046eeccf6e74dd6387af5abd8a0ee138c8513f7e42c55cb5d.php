<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Models\ConfirmationTransaction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\ConfirmationTransaction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-2d85ae6e1f748bb18b989e5e2ab1349fc1bba0eea85e7eb5326316efe2eb4226',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\ConfirmationTransaction',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Models/ConfirmationTransaction.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\ConfirmationTransaction',
    'shortName' => 'ConfirmationTransaction',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @method static where(string $string, string $transactionId)
 * @method static create(array $array)
 *
 * @property mixed $transaction_id
 * @property mixed $bill_reference
 * @property mixed $customer_name
 * @property mixed $created_at
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 60,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
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
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\ConfirmationTransaction',
        'implementingClassName' => 'App\\Models\\ConfirmationTransaction',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'transaction_id\', \'transaction_time\', \'bill_reference\', \'customer_name\', \'amount\', \'status\', \'authenticated\', \'business_short_code\', \'process\', \'created_at\']',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 35,
            'startTokenPos' => 57,
            'startFilePos' => 533,
            'endTokenPos' => 89,
            'endFilePos' => 777,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'startLine' => 23,
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
      'attributes' => 
      array (
        'declaringClassName' => 'App\\Models\\ConfirmationTransaction',
        'implementingClassName' => 'App\\Models\\ConfirmationTransaction',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'process\' => \\App\\Enum\\ProcessSMSTxn::YES, \'status\' => \\App\\Enum\\Status::PENDING]',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 41,
            'startTokenPos' => 102,
            'startFilePos' => 826,
            'endTokenPos' => 122,
            'endFilePos' => 910,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'startLine' => 37,
        'endLine' => 41,
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
      'casts' => 
      array (
        'name' => 'casts',
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
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 43,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\ConfirmationTransaction',
        'implementingClassName' => 'App\\Models\\ConfirmationTransaction',
        'currentClassName' => 'App\\Models\\ConfirmationTransaction',
        'aliasName' => NULL,
      ),
      'customerName' => 
      array (
        'name' => 'customerName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Casts\\Attribute',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 54,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\ConfirmationTransaction',
        'implementingClassName' => 'App\\Models\\ConfirmationTransaction',
        'currentClassName' => 'App\\Models\\ConfirmationTransaction',
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