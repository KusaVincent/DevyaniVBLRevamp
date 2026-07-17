<?php declare(strict_types = 1);

// odsl-C:\Users\vinsc\Herd\devyanivbl\app\Models\BusinessProfile.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\BusinessProfile
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.3-8.5.8-e4271beeb36373bac7095b11fa2f32985b08723e52ef4e71341e06d9d64feada',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\BusinessProfile',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/app/Models/BusinessProfile.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\BusinessProfile',
    'shortName' => 'BusinessProfile',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
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
 * @method static updateOrCreate(string[] $array, array $array1)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 77,
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
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'business_short_code\', \'username\', \'password\', \'secret_key\', \'credit_account\', \'sap_file\', \'business_transaction\', \'sap_headers\', \'active\', \'profit_center\', \'business_area\']',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 41,
            'startTokenPos' => 57,
            'startFilePos' => 704,
            'endTokenPos' => 92,
            'endFilePos' => 972,
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
        'startLine' => 28,
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
      'guarded' => 
      array (
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 105,
            'startFilePos' => 1018,
            'endTokenPos' => 106,
            'endFilePos' => 1019,
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
        'startLine' => 43,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hidden' => 
      array (
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'name' => 'hidden',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'password\', \'secret_key\']',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 50,
            'startTokenPos' => 119,
            'startFilePos' => 1064,
            'endTokenPos' => 127,
            'endFilePos' => 1112,
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
        'endLine' => 50,
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
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'active\' => \\App\\Enum\\BusinessProfileStatus::YES]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 55,
            'startTokenPos' => 140,
            'startFilePos' => 1161,
            'endTokenPos' => 151,
            'endFilePos' => 1215,
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
        'startLine' => 52,
        'endLine' => 55,
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
        'startLine' => 57,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'currentClassName' => 'App\\Models\\BusinessProfile',
        'aliasName' => NULL,
      ),
      'credentialsMatch' => 
      array (
        'name' => 'credentialsMatch',
        'parameters' => 
        array (
          'username' => 
          array (
            'name' => 'username',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'password' => 
          array (
            'name' => 'password',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 68,
            'endLine' => 68,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 68,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'currentClassName' => 'App\\Models\\BusinessProfile',
        'aliasName' => NULL,
      ),
      'sapConfiguration' => 
      array (
        'name' => 'sapConfiguration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Services\\Sap\\SapConfiguration',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 73,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\BusinessProfile',
        'implementingClassName' => 'App\\Models\\BusinessProfile',
        'currentClassName' => 'App\\Models\\BusinessProfile',
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