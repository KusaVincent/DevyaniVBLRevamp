<?php declare(strict_types = 1);

// odsl-C:\Users\Generic.User\Herd\devyanivbl\app\Models\SmsQueue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\SmsQueue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.10-648f904a92d30f6bc23736da051ddf90236a8add3ef73add2c2a263d1acf584d',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\SmsQueue',
        'filename' => 'C:/Users/Generic.User/Herd/devyanivbl/app/Models/SmsQueue.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\SmsQueue',
    'shortName' => 'SmsQueue',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @method static static create(array<string, mixed> $attributes)
 *
 * @property mixed $bill_reference
 * @property mixed $amount
 * @property mixed $customer_name
 * @property mixed $created_at
 * @property mixed $mpesa_ref
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 75,
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
      'timestamps' => 
      array (
        'declaringClassName' => 'App\\Models\\SmsQueue',
        'implementingClassName' => 'App\\Models\\SmsQueue',
        'name' => 'timestamps',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 64,
            'startFilePos' => 522,
            'endTokenPos' => 64,
            'endFilePos' => 526,
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
        'startLine' => 24,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\SmsQueue',
        'implementingClassName' => 'App\\Models\\SmsQueue',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'status\', \'mpesa_ref\', \'bill_reference\', \'amount\', \'created_at\', \'processed_at\', \'customer_name\', \'recipient_name\', \'recipient_mobile\', \'post\', \'process\', \'response\', \'error\', \'next_retry_at\', \'attempts\']',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 44,
            'startTokenPos' => 77,
            'startFilePos' => 572,
            'endTokenPos' => 124,
            'endFilePos' => 903,
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
        'startLine' => 27,
        'endLine' => 44,
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
        'declaringClassName' => 'App\\Models\\SmsQueue',
        'implementingClassName' => 'App\\Models\\SmsQueue',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'status\' => \\App\\Enum\\Status::PENDING, \'process\' => \\App\\Enum\\ProcessSMSTxn::YES, \'attempts\' => 0]',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 51,
            'startTokenPos' => 137,
            'startFilePos' => 951,
            'endTokenPos' => 164,
            'endFilePos' => 1060,
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
        'startLine' => 46,
        'endLine' => 51,
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
        'startLine' => 53,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\SmsQueue',
        'implementingClassName' => 'App\\Models\\SmsQueue',
        'currentClassName' => 'App\\Models\\SmsQueue',
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
        'startLine' => 69,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\SmsQueue',
        'implementingClassName' => 'App\\Models\\SmsQueue',
        'currentClassName' => 'App\\Models\\SmsQueue',
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