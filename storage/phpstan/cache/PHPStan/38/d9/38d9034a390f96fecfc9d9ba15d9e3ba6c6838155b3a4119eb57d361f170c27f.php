<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Models\SmsQueue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\SmsQueue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-bd0e264cabb2e520bae7f37ce8cebe5bdb1fe6063c4406390a0ac0f3769de549',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\SmsQueue',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Models/SmsQueue.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\SmsQueue',
    'shortName' => 'SmsQueue',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
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
    'startLine' => 21,
    'endLine' => 74,
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
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 57,
            'startFilePos' => 503,
            'endTokenPos' => 57,
            'endFilePos' => 507,
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
        'endLine' => 24,
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
            'startLine' => 27,
            'endLine' => 43,
            'startTokenPos' => 70,
            'startFilePos' => 554,
            'endTokenPos' => 117,
            'endFilePos' => 885,
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
        'startLine' => 26,
        'endLine' => 43,
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
            'startLine' => 59,
            'endLine' => 63,
            'startTokenPos' => 202,
            'startFilePos' => 1276,
            'endTokenPos' => 229,
            'endFilePos' => 1385,
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
        'startLine' => 58,
        'endLine' => 63,
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
        'startLine' => 45,
        'endLine' => 56,
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
        'startLine' => 68,
        'endLine' => 73,
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