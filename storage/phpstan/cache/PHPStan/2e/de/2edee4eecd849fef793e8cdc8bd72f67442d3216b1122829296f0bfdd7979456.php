<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Models\EmailQueue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\EmailQueue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-3fbd749f04da3ae462707bf225e2b31c213ff31eca31bb54fdaf44017703c9d6',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\EmailQueue',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Models/EmailQueue.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\EmailQueue',
    'shortName' => 'EmailQueue',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
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
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 58,
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
        'declaringClassName' => 'App\\Models\\EmailQueue',
        'implementingClassName' => 'App\\Models\\EmailQueue',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'subject\', \'header\', \'attachment\', \'recipients\', \'status\', \'attempts\', \'next_retry_at\', \'processed_at\', \'response\', \'error\', \'message\']',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 39,
            'startTokenPos' => 52,
            'startFilePos' => 598,
            'endTokenPos' => 87,
            'endFilePos' => 828,
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
        'declaringClassName' => 'App\\Models\\EmailQueue',
        'implementingClassName' => 'App\\Models\\EmailQueue',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'status\' => \\App\\Enum\\Status::PENDING, \'attempts\' => 0]',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 57,
            'startTokenPos' => 163,
            'startFilePos' => 1171,
            'endTokenPos' => 181,
            'endFilePos' => 1239,
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
        'startLine' => 53,
        'endLine' => 57,
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
        'startLine' => 41,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\EmailQueue',
        'implementingClassName' => 'App\\Models\\EmailQueue',
        'currentClassName' => 'App\\Models\\EmailQueue',
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