<?php declare(strict_types = 1);

// osfsl-C:/Users/vinsc/Herd/devyanivbl/vendor/composer/../laravel/framework/src/Illuminate/Queue/Queue.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Queue\Queue
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2cf2cda67182940e98cf149492db54f4276e36112b03767afff93ba525fc5b99-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Queue\\Queue',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/vendor/composer/../laravel/framework/src/Illuminate/Queue/Queue.php',
      ),
    ),
    'namespace' => 'Illuminate\\Queue',
    'name' => 'Illuminate\\Queue\\Queue',
    'shortName' => 'Queue',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 31,
    'endLine' => 533,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\InteractsWithTime',
      1 => 'Illuminate\\Queue\\Attributes\\ReadsQueueAttributes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The IoC container instance.
 *
 * @var \\Illuminate\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectionName' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'connectionName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The connection name for the queue.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The original configuration for the queue.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dispatchAfterCommit' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'dispatchAfterCommit',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates that jobs should be dispatched after all database transactions have committed.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'createPayloadCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'name' => 'createPayloadCallbacks',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 190,
            'startFilePos' => 1738,
            'endTokenPos' => 191,
            'endFilePos' => 1739,
          ),
        ),
        'docComment' => '/**
 * The create payload callbacks.
 *
 * @var callable[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 50,
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
      'pushOn' => 
      array (
        'name' => 'pushOn',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 78,
                'endLine' => 78,
                'startTokenPos' => 212,
                'startFilePos' => 1960,
                'endTokenPos' => 212,
                'endFilePos' => 1961,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push a new job onto the queue.
 *
 * @param  string  $queue
 * @param  string  $job
 * @param  mixed  $data
 * @return mixed
 */',
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'laterOn' => 
      array (
        'name' => 'laterOn',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 45,
            'endColumn' => 48,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 256,
                'startFilePos' => 2337,
                'endTokenPos' => 256,
                'endFilePos' => 2338,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push a new job onto a specific queue after (n) seconds.
 *
 * @param  string  $queue
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @param  string  $job
 * @param  mixed  $data
 * @return mixed
 */',
        'startLine' => 92,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'bulk' => 
      array (
        'name' => 'bulk',
        'parameters' => 
        array (
          'jobs' => 
          array (
            'name' => 'jobs',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 26,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 105,
                'endLine' => 105,
                'startTokenPos' => 297,
                'startFilePos' => 2631,
                'endTokenPos' => 297,
                'endFilePos' => 2632,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 105,
                'endLine' => 105,
                'startTokenPos' => 304,
                'startFilePos' => 2644,
                'endTokenPos' => 304,
                'endFilePos' => 2647,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 105,
            'endLine' => 105,
            'startColumn' => 45,
            'endColumn' => 57,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push an array of jobs onto the queue.
 *
 * @param  array  $jobs
 * @param  mixed  $data
 * @param  string|null  $queue
 * @return void
 */',
        'startLine' => 105,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createPayload' => 
      array (
        'name' => 'createPayload',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 123,
                'endLine' => 123,
                'startTokenPos' => 359,
                'startFilePos' => 3156,
                'endTokenPos' => 359,
                'endFilePos' => 3157,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 52,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 123,
                'endLine' => 123,
                'startTokenPos' => 366,
                'startFilePos' => 3169,
                'endTokenPos' => 366,
                'endFilePos' => 3172,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 64,
            'endColumn' => 76,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a payload string from the given job and data.
 *
 * @param  \\Closure|string|object  $job
 * @param  string  $queue
 * @param  mixed  $data
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return string
 *
 * @throws \\Illuminate\\Queue\\InvalidPayloadException
 */',
        'startLine' => 123,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createPayloadArray' => 
      array (
        'name' => 'createPayloadArray',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 43,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 520,
                'startFilePos' => 4047,
                'endTokenPos' => 520,
                'endFilePos' => 4048,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 57,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a payload array from the given job and data.
 *
 * @param  string|object  $job
 * @param  string  $queue
 * @param  mixed  $data
 * @return array
 */',
        'startLine' => 154,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createObjectPayload' => 
      array (
        'name' => 'createObjectPayload',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 44,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a payload for an object-based queue handler.
 *
 * @param  object  $job
 * @param  string  $queue
 * @return array
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 170,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getDisplayName' => 
      array (
        'name' => 'getDisplayName',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the display name for the given job.
 *
 * @param  object  $job
 * @return string
 */',
        'startLine' => 217,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getJobTries' => 
      array (
        'name' => 'getJobTries',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 230,
            'endLine' => 230,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the maximum number of attempts for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 230,
        'endLine' => 239,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getJobBackoff' => 
      array (
        'name' => 'getJobBackoff',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 247,
            'endLine' => 247,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the backoff for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 247,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getJobExpiration' => 
      array (
        'name' => 'getJobExpiration',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the expiration timestamp for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 270,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'jobShouldBeEncrypted' => 
      array (
        'name' => 'jobShouldBeEncrypted',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 289,
            'endLine' => 289,
            'startColumn' => 45,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the job should be encrypted.
 *
 * @param  object  $job
 * @return bool
 */',
        'startLine' => 289,
        'endLine' => 296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createStringPayload' => 
      array (
        'name' => 'createStringPayload',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 44,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 58,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a typical, string based queue payload array.
 *
 * @param  string  $job
 * @param  string  $queue
 * @param  mixed  $data
 * @return array
 */',
        'startLine' => 306,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'createPayloadUsing' => 
      array (
        'name' => 'createPayloadUsing',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 47,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a callback to be executed when creating job payloads.
 *
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 328,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'withCreatePayloadHooks' => 
      array (
        'name' => 'withCreatePayloadHooks',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 343,
            'endLine' => 343,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 343,
            'endLine' => 343,
            'startColumn' => 55,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create the given payload using any registered payload hooks.
 *
 * @param  string  $queue
 * @return array
 */',
        'startLine' => 343,
        'endLine' => 352,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'enqueueUsing' => 
      array (
        'name' => 'enqueueUsing',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 61,
            'endColumn' => 66,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 69,
            'endColumn' => 77,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enqueue a job using the given callback.
 *
 * @param  \\Closure|string|object  $job
 * @param  string  $payload
 * @param  string|null  $queue
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @param  callable  $callback
 * @return mixed
 */',
        'startLine' => 364,
        'endLine' => 386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'shouldDispatchAfterCommit' => 
      array (
        'name' => 'shouldDispatchAfterCommit',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 50,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the job should be dispatched after all database transactions have committed.
 *
 * @param  \\Closure|string|object  $job
 * @return bool
 */',
        'startLine' => 394,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'registerRollbackCallbacksForJobsThatDispatchAfterCommit' => 
      array (
        'name' => 'registerRollbackCallbacksForJobsThatDispatchAfterCommit',
        'parameters' => 
        array (
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 413,
            'endLine' => 413,
            'startColumn' => 80,
            'endColumn' => 83,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register callbacks to release locks if the current database transaction is rolled back.
 *
 * @param  \\Closure|string|object  $job
 * @return void
 */',
        'startLine' => 413,
        'endLine' => 430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'raiseJobQueueingEvent' => 
      array (
        'name' => 'raiseJobQueueingEvent',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 441,
            'endLine' => 441,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 441,
            'endLine' => 441,
            'startColumn' => 54,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 441,
            'endLine' => 441,
            'startColumn' => 60,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 441,
            'endLine' => 441,
            'startColumn' => 70,
            'endColumn' => 75,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Raise the job queueing event.
 *
 * @param  string  $queue
 * @param  \\Closure|string|object  $job
 * @param  string  $payload
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return void
 */',
        'startLine' => 441,
        'endLine' => 448,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'raiseJobQueuedEvent' => 
      array (
        'name' => 'raiseJobQueuedEvent',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'jobId' => 
          array (
            'name' => 'jobId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 60,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 66,
            'endColumn' => 73,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 76,
            'endColumn' => 81,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Raise the job queued event.
 *
 * @param  string|null  $queue
 * @param  string|int|null  $jobId
 * @param  \\Closure|string|object  $job
 * @param  string  $payload
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return void
 */',
        'startLine' => 460,
        'endLine' => 467,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getConnectionName' => 
      array (
        'name' => 'getConnectionName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the connection name for the queue.
 *
 * @return string
 */',
        'startLine' => 474,
        'endLine' => 477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'setConnectionName' => 
      array (
        'name' => 'setConnectionName',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the connection name for the queue.
 *
 * @param  string  $name
 * @return $this
 */',
        'startLine' => 485,
        'endLine' => 490,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getConfig' => 
      array (
        'name' => 'getConfig',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the queue configuration array.
 *
 * @return array
 */',
        'startLine' => 497,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'setConfig' => 
      array (
        'name' => 'setConfig',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the queue configuration array.
 *
 * @return $this
 */',
        'startLine' => 507,
        'endLine' => 512,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'getContainer' => 
      array (
        'name' => 'getContainer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the container instance being used by the connection.
 *
 * @return \\Illuminate\\Container\\Container
 */',
        'startLine' => 519,
        'endLine' => 522,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
        'aliasName' => NULL,
      ),
      'setContainer' => 
      array (
        'name' => 'setContainer',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 529,
            'endLine' => 529,
            'startColumn' => 34,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the IoC container instance.
 *
 * @return void
 */',
        'startLine' => 529,
        'endLine' => 532,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Queue',
        'declaringClassName' => 'Illuminate\\Queue\\Queue',
        'implementingClassName' => 'Illuminate\\Queue\\Queue',
        'currentClassName' => 'Illuminate\\Queue\\Queue',
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