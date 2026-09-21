<?php declare(strict_types = 1);

// odsl-C:\Users\Generic.User\Herd\devyanivbl\app\Models\ConfirmationTransaction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\ConfirmationTransaction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.10-907446dca33ea5060dde6a8f2272fe0a1e74c1d87eded4e30bf990cd5976fe91',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\ConfirmationTransaction',
        'filename' => 'C:/Users/Generic.User/Herd/devyanivbl/app/Models/ConfirmationTransaction.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\ConfirmationTransaction',
    'shortName' => 'ConfirmationTransaction',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @method static where(string $string, string $transactionId)
 * @method static static create(array<string, mixed> $attributes)
 *
 * @property mixed $transaction_id
 * @property mixed $bill_reference
 * @property mixed $customer_name
 * @property mixed $created_at
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 76,
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
          'code' => '[\'transaction_id\', \'transaction_time\', \'bill_reference\', \'customer_name\', \'amount\', \'status\', \'authenticated\', \'business_short_code\', \'process\', \'created_at\', \'narrative\', \'ft_ref\']',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 39,
            'startTokenPos' => 69,
            'startFilePos' => 633,
            'endTokenPos' => 107,
            'endFilePos' => 916,
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
        'startLine' => 25,
        'endLine' => 39,
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
            'startLine' => 42,
            'endLine' => 45,
            'startTokenPos' => 120,
            'startFilePos' => 964,
            'endTokenPos' => 140,
            'endFilePos' => 1048,
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
        'startLine' => 41,
        'endLine' => 45,
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
      'businessProfile' => 
      array (
        'name' => 'businessProfile',
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
        'startLine' => 47,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\ConfirmationTransaction',
        'implementingClassName' => 'App\\Models\\ConfirmationTransaction',
        'currentClassName' => 'App\\Models\\ConfirmationTransaction',
        'aliasName' => NULL,
      ),
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
        'startLine' => 56,
        'endLine' => 65,
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
        'docComment' => '/**
 * @return Attribute<never, string>
 */',
        'startLine' => 70,
        'endLine' => 75,
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