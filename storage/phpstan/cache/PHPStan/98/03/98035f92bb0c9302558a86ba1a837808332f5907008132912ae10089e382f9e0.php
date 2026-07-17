<?php declare(strict_types = 1);

// osfsl-C:/Users/vinsc/Herd/devyanivbl/vendor/composer/../laravel/framework/src/Illuminate/Support/Testing/Fakes/QueueFake.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Testing\Fakes\QueueFake
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f3c735d82f02e847355f8e198ef6f0373e5f63c0c6e981155f4fd1ccc358c1fb-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/vendor/composer/../laravel/framework/src/Illuminate/Support/Testing/Fakes/QueueFake.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
    'name' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
    'shortName' => 'QueueFake',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @phpstan-type RawPushType array{"payload": string, "queue": string|null, "options": array<array-key, mixed>}
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 878,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Queue\\QueueManager',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Testing\\Fakes\\Fake',
      1 => 'Illuminate\\Contracts\\Queue\\Queue',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'queue' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'queue',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The original queue manager.
 *
 * @var \\Illuminate\\Contracts\\Queue\\Queue
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'jobsToFake' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'jobsToFake',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The job types that should be intercepted instead of pushed to the queue.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'jobsToBeQueued' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'jobsToBeQueued',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The job types that should be pushed to the queue and not intercepted.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'jobs' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'jobs',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 145,
            'startFilePos' => 1407,
            'endTokenPos' => 146,
            'endFilePos' => 1408,
          ),
        ),
        'docComment' => '/**
 * All of the jobs that have been pushed.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'delayed' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'delayed',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 157,
            'startFilePos' => 1537,
            'endTokenPos' => 158,
            'endFilePos' => 1538,
          ),
        ),
        'docComment' => '/**
 * All of the jobs that have been pushed with a delay.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rawPushes' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'rawPushes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 169,
            'startFilePos' => 1676,
            'endTokenPos' => 170,
            'endFilePos' => 1677,
          ),
        ),
        'docComment' => '/**
 * All of the payloads that have been raw pushed.
 *
 * @var list<RawPushType>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uniqueJobs' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'uniqueJobs',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 181,
            'startFilePos' => 1798,
            'endTokenPos' => 182,
            'endFilePos' => 1799,
          ),
        ),
        'docComment' => '/**
 * All of the unique jobs that were pushed.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reserved' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'reserved',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 193,
            'startFilePos' => 1928,
            'endTokenPos' => 194,
            'endFilePos' => 1929,
          ),
        ),
        'docComment' => '/**
 * All of the jobs that have been marked as reserved.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'serializeAndRestore' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'name' => 'serializeAndRestore',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 207,
            'startFilePos' => 2101,
            'endTokenPos' => 207,
            'endFilePos' => 2105,
          ),
        ),
        'docComment' => '/**
 * Indicates if items should be serialized and restored when pushed to the queue.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 48,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'jobsToFake' => 
          array (
            'name' => 'jobsToFake',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 99,
                'endLine' => 99,
                'startTokenPos' => 225,
                'startFilePos' => 2384,
                'endTokenPos' => 226,
                'endFilePos' => 2385,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 39,
            'endColumn' => 54,
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
                'startLine' => 99,
                'endLine' => 99,
                'startTokenPos' => 233,
                'startFilePos' => 2397,
                'endTokenPos' => 233,
                'endFilePos' => 2400,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 57,
            'endColumn' => 69,
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
 * Create a new fake queue instance.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @param  array  $jobsToFake
 * @param  \\Illuminate\\Queue\\QueueManager|null  $queue
 */',
        'startLine' => 99,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'except' => 
      array (
        'name' => 'except',
        'parameters' => 
        array (
          'jobsToBeQueued' => 
          array (
            'name' => 'jobsToBeQueued',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 114,
            'endLine' => 114,
            'startColumn' => 28,
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
 * Specify the jobs that should be queued instead of faked.
 *
 * @param  array|string  $jobsToBeQueued
 * @return $this
 */',
        'startLine' => 114,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushed' => 
      array (
        'name' => 'assertPushed',
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
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 128,
                'endLine' => 128,
                'startTokenPos' => 338,
                'startFilePos' => 3161,
                'endTokenPos' => 338,
                'endFilePos' => 3164,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert if a job was pushed based on a truth-test callback.
 *
 * @param  string|\\Closure  $job
 * @param  callable|int|null  $callback
 * @return void
 */',
        'startLine' => 128,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedTimes' => 
      array (
        'name' => 'assertPushedTimes',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'times' => 
          array (
            'name' => 'times',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 457,
                'startFilePos' => 3777,
                'endTokenPos' => 457,
                'endFilePos' => 3777,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert if a job was pushed a number of times.
 *
 * @param  string  $job
 * @param  int  $times
 * @return void
 */',
        'startLine' => 151,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedOnce' => 
      array (
        'name' => 'assertPushedOnce',
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
            'startLine' => 171,
            'endLine' => 171,
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
 * Assert if a job was pushed exactly once.
 *
 * @param  string  $job
 * @return void
 */',
        'startLine' => 171,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedOn' => 
      array (
        'name' => 'assertPushedOn',
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
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 36,
            'endColumn' => 41,
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
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 44,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 184,
                'endLine' => 184,
                'startTokenPos' => 581,
                'startFilePos' => 4630,
                'endTokenPos' => 581,
                'endFilePos' => 4633,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 50,
            'endColumn' => 65,
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
 * Assert if a job was pushed based on a truth-test callback.
 *
 * @param  \\UnitEnum|string  $queue
 * @param  string|\\Closure  $job
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 184,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedWithChain' => 
      array (
        'name' => 'assertPushedWithChain',
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
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 43,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expectedChain' => 
          array (
            'name' => 'expectedChain',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 209,
                'endLine' => 209,
                'startTokenPos' => 721,
                'startFilePos' => 5385,
                'endTokenPos' => 722,
                'endFilePos' => 5386,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 49,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 209,
                'endLine' => 209,
                'startTokenPos' => 729,
                'startFilePos' => 5401,
                'endTokenPos' => 729,
                'endFilePos' => 5404,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 70,
            'endColumn' => 85,
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
 * Assert if a job was pushed with chained jobs based on a truth-test callback.
 *
 * @param  string  $job
 * @param  array  $expectedChain
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 209,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedWithoutChain' => 
      array (
        'name' => 'assertPushedWithoutChain',
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
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 46,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 233,
                'endLine' => 233,
                'startTokenPos' => 844,
                'startFilePos' => 6206,
                'endTokenPos' => 844,
                'endFilePos' => 6209,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert if a job was pushed with an empty chain based on a truth-test callback.
 *
 * @param  string  $job
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 233,
        'endLine' => 241,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedWithChainOfObjects' => 
      array (
        'name' => 'assertPushedWithChainOfObjects',
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
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 55,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expectedChain' => 
          array (
            'name' => 'expectedChain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 61,
            'endColumn' => 74,
            'parameterIndex' => 1,
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
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 77,
            'endColumn' => 85,
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
 * Assert if a job was pushed with chained jobs based on a truth-test callback.
 *
 * @param  string  $job
 * @param  array  $expectedChain
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 251,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertPushedWithChainOfClasses' => 
      array (
        'name' => 'assertPushedWithChainOfClasses',
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
            'startLine' => 269,
            'endLine' => 269,
            'startColumn' => 55,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expectedChain' => 
          array (
            'name' => 'expectedChain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 269,
            'endLine' => 269,
            'startColumn' => 61,
            'endColumn' => 74,
            'parameterIndex' => 1,
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
            'startLine' => 269,
            'endLine' => 269,
            'startColumn' => 77,
            'endColumn' => 85,
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
 * Assert if a job was pushed with chained jobs based on a truth-test callback.
 *
 * @param  string  $job
 * @param  array  $expectedChain
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 269,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertClosurePushed' => 
      array (
        'name' => 'assertClosurePushed',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 290,
                'endLine' => 290,
                'startTokenPos' => 1146,
                'startFilePos' => 8074,
                'endTokenPos' => 1146,
                'endFilePos' => 8077,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 290,
            'endLine' => 290,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert if a closure was pushed based on a truth-test callback.
 *
 * @param  callable|int|null  $callback
 * @return void
 */',
        'startLine' => 290,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertClosureNotPushed' => 
      array (
        'name' => 'assertClosureNotPushed',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 301,
                'endLine' => 301,
                'startTokenPos' => 1178,
                'startFilePos' => 8373,
                'endTokenPos' => 1178,
                'endFilePos' => 8376,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that a closure was not pushed based on a truth-test callback.
 *
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 301,
        'endLine' => 304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'isChainOfObjects' => 
      array (
        'name' => 'isChainOfObjects',
        'parameters' => 
        array (
          'chain' => 
          array (
            'name' => 'chain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 312,
            'endLine' => 312,
            'startColumn' => 41,
            'endColumn' => 46,
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
 * Determine if the given chain is entirely composed of objects.
 *
 * @param  array  $chain
 * @return bool
 */',
        'startLine' => 312,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertNotPushed' => 
      array (
        'name' => 'assertNotPushed',
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
            'startLine' => 324,
            'endLine' => 324,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 324,
                'endLine' => 324,
                'startTokenPos' => 1260,
                'startFilePos' => 8991,
                'endTokenPos' => 1260,
                'endFilePos' => 8994,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 324,
            'endLine' => 324,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if a job was pushed based on a truth-test callback.
 *
 * @param  string|\\Closure  $job
 * @param  callable|null  $callback
 * @return void
 */',
        'startLine' => 324,
        'endLine' => 334,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertCount' => 
      array (
        'name' => 'assertCount',
        'parameters' => 
        array (
          'expectedCount' => 
          array (
            'name' => 'expectedCount',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 342,
            'endLine' => 342,
            'startColumn' => 33,
            'endColumn' => 46,
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
 * Assert the total count of jobs that were pushed.
 *
 * @param  int  $expectedCount
 * @return void
 */',
        'startLine' => 342,
        'endLine' => 350,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'assertNothingPushed' => 
      array (
        'name' => 'assertNothingPushed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Assert that no jobs were pushed.
 *
 * @return void
 */',
        'startLine' => 357,
        'endLine' => 362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pushed' => 
      array (
        'name' => 'pushed',
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
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 28,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 371,
                'endLine' => 371,
                'startTokenPos' => 1463,
                'startFilePos' => 10282,
                'endTokenPos' => 1463,
                'endFilePos' => 10285,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 34,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the jobs matching a truth-test callback.
 *
 * @param  string  $job
 * @param  callable|null  $callback
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 371,
        'endLine' => 382,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pushedRaw' => 
      array (
        'name' => 'pushedRaw',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 390,
                'endLine' => 390,
                'startTokenPos' => 1580,
                'startFilePos' => 10866,
                'endTokenPos' => 1580,
                'endFilePos' => 10869,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 390,
            'endLine' => 390,
            'startColumn' => 31,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the raw pushes matching a truth-test callback.
 *
 * @param  null|\\Closure(string, ?string, array): bool  $callback
 * @return \\Illuminate\\Support\\Collection<int, RawPushType>
 */',
        'startLine' => 390,
        'endLine' => 395,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'listenersPushed' => 
      array (
        'name' => 'listenersPushed',
        'parameters' => 
        array (
          'listenerClass' => 
          array (
            'name' => 'listenerClass',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 404,
            'endLine' => 404,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 404,
                'endLine' => 404,
                'startTokenPos' => 1663,
                'startFilePos' => 11488,
                'endTokenPos' => 1663,
                'endFilePos' => 11491,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 404,
            'endLine' => 404,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the jobs by listener class, passing an optional truth-test callback.
 *
 * @param  class-string  $listenerClass
 * @param  (\\Closure(mixed, \\Illuminate\\Events\\CallQueuedListener, string|null, mixed): bool)|null  $callback
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Events\\CallQueuedListener>
 */',
        'startLine' => 404,
        'endLine' => 418,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'hasPushed' => 
      array (
        'name' => 'hasPushed',
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
            'startLine' => 426,
            'endLine' => 426,
            'startColumn' => 31,
            'endColumn' => 34,
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
 * Determine if there are any stored jobs for a given class.
 *
 * @param  string  $job
 * @return bool
 */',
        'startLine' => 426,
        'endLine' => 429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'connection' => 
      array (
        'name' => 'connection',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 437,
                'endLine' => 437,
                'startTokenPos' => 1867,
                'startFilePos' => 12437,
                'endTokenPos' => 1867,
                'endFilePos' => 12440,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve a queue connection instance.
 *
 * @param  mixed  $value
 * @return \\Illuminate\\Contracts\\Queue\\Queue
 */',
        'startLine' => 437,
        'endLine' => 440,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'size' => 
      array (
        'name' => 'size',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 448,
                'endLine' => 448,
                'startTokenPos' => 1891,
                'startFilePos' => 12633,
                'endTokenPos' => 1891,
                'endFilePos' => 12636,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 448,
            'endLine' => 448,
            'startColumn' => 26,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the size of the queue.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return int
 */',
        'startLine' => 448,
        'endLine' => 456,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pendingSize' => 
      array (
        'name' => 'pendingSize',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 464,
                'endLine' => 464,
                'startTokenPos' => 1966,
                'startFilePos' => 13010,
                'endTokenPos' => 1966,
                'endFilePos' => 13013,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 464,
            'endLine' => 464,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of pending jobs.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return int
 */',
        'startLine' => 464,
        'endLine' => 467,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'delayedSize' => 
      array (
        'name' => 'delayedSize',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 475,
                'endLine' => 475,
                'startTokenPos' => 1995,
                'startFilePos' => 13232,
                'endTokenPos' => 1995,
                'endFilePos' => 13235,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of delayed jobs.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return int
 */',
        'startLine' => 475,
        'endLine' => 478,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'reservedSize' => 
      array (
        'name' => 'reservedSize',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 486,
                'endLine' => 486,
                'startTokenPos' => 2028,
                'startFilePos' => 13472,
                'endTokenPos' => 2028,
                'endFilePos' => 13475,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 486,
            'endLine' => 486,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of reserved jobs.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return int
 */',
        'startLine' => 486,
        'endLine' => 489,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pendingJobs' => 
      array (
        'name' => 'pendingJobs',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 497,
                'endLine' => 497,
                'startTokenPos' => 2061,
                'startFilePos' => 13790,
                'endTokenPos' => 2061,
                'endFilePos' => 13793,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 497,
            'endLine' => 497,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the pending jobs for the given queue.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
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
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'delayedJobs' => 
      array (
        'name' => 'delayedJobs',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 508,
                'endLine' => 508,
                'startTokenPos' => 2107,
                'startFilePos' => 14159,
                'endTokenPos' => 2107,
                'endFilePos' => 14162,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 508,
            'endLine' => 508,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the delayed jobs for the given queue.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
 */',
        'startLine' => 508,
        'endLine' => 511,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'reservedJobs' => 
      array (
        'name' => 'reservedJobs',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 519,
                'endLine' => 519,
                'startTokenPos' => 2153,
                'startFilePos' => 14530,
                'endTokenPos' => 2153,
                'endFilePos' => 14533,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the reserved jobs for the given queue.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
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
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'allPendingJobs' => 
      array (
        'name' => 'allPendingJobs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all pending jobs across every queue.
 *
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
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
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'allDelayedJobs' => 
      array (
        'name' => 'allDelayedJobs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all delayed jobs across every queue.
 *
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
 */',
        'startLine' => 539,
        'endLine' => 542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'inspectJobs' => 
      array (
        'name' => 'inspectJobs',
        'parameters' => 
        array (
          'jobs' => 
          array (
            'name' => 'jobs',
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
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 36,
            'endColumn' => 46,
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
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Map an array of jobs to a collection of inspected jobs.
 *
 * @param  array  $jobs
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
 */',
        'startLine' => 550,
        'endLine' => 564,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'allReservedJobs' => 
      array (
        'name' => 'allReservedJobs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all reserved jobs across every queue.
 *
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Queue\\Jobs\\InspectedJob>
 */',
        'startLine' => 571,
        'endLine' => 574,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'creationTimeOfOldestPendingJob' => 
      array (
        'name' => 'creationTimeOfOldestPendingJob',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 582,
                'endLine' => 582,
                'startTokenPos' => 2432,
                'startFilePos' => 16475,
                'endTokenPos' => 2432,
                'endFilePos' => 16478,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 582,
            'endLine' => 582,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the creation timestamp of the oldest pending job, excluding delayed jobs.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return int|null
 */',
        'startLine' => 582,
        'endLine' => 585,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'push' => 
      array (
        'name' => 'push',
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
            'startLine' => 595,
            'endLine' => 595,
            'startColumn' => 26,
            'endColumn' => 29,
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
                'startLine' => 595,
                'endLine' => 595,
                'startTokenPos' => 2459,
                'startFilePos' => 16744,
                'endTokenPos' => 2459,
                'endFilePos' => 16745,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 595,
            'endLine' => 595,
            'startColumn' => 32,
            'endColumn' => 41,
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
                'startLine' => 595,
                'endLine' => 595,
                'startTokenPos' => 2466,
                'startFilePos' => 16757,
                'endTokenPos' => 2466,
                'endFilePos' => 16760,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 595,
            'endLine' => 595,
            'startColumn' => 44,
            'endColumn' => 56,
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
 * @param  string|object  $job
 * @param  mixed  $data
 * @param  \\UnitEnum|string|null  $queue
 * @return mixed
 */',
        'startLine' => 595,
        'endLine' => 618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'shouldFakeJob' => 
      array (
        'name' => 'shouldFakeJob',
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
            'startLine' => 626,
            'endLine' => 626,
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
 * Determine if a job should be faked or actually dispatched.
 *
 * @param  object  $job
 * @return bool
 */',
        'startLine' => 626,
        'endLine' => 639,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'shouldDispatchJob' => 
      array (
        'name' => 'shouldDispatchJob',
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
            'startLine' => 647,
            'endLine' => 647,
            'startColumn' => 42,
            'endColumn' => 45,
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
 * Determine if a job should be pushed to the queue instead of faked.
 *
 * @param  object  $job
 * @return bool
 */',
        'startLine' => 647,
        'endLine' => 656,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pushRaw' => 
      array (
        'name' => 'pushRaw',
        'parameters' => 
        array (
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
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 2854,
                'startFilePos' => 18731,
                'endTokenPos' => 2854,
                'endFilePos' => 18734,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 2863,
                'startFilePos' => 18754,
                'endTokenPos' => 2864,
                'endFilePos' => 18755,
              ),
            ),
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
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 54,
            'endColumn' => 72,
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
 * Push a raw payload onto the queue.
 *
 * @param  string  $payload
 * @param  \\UnitEnum|string|null  $queue
 * @param  array  $options
 * @return mixed
 */',
        'startLine' => 666,
        'endLine' => 675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'later' => 
      array (
        'name' => 'later',
        'parameters' => 
        array (
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
            'startLine' => 686,
            'endLine' => 686,
            'startColumn' => 27,
            'endColumn' => 32,
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
            'startLine' => 686,
            'endLine' => 686,
            'startColumn' => 35,
            'endColumn' => 38,
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
                'startLine' => 686,
                'endLine' => 686,
                'startTokenPos' => 2933,
                'startFilePos' => 19268,
                'endTokenPos' => 2933,
                'endFilePos' => 19269,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 686,
            'endLine' => 686,
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 2,
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
                'startLine' => 686,
                'endLine' => 686,
                'startTokenPos' => 2940,
                'startFilePos' => 19281,
                'endTokenPos' => 2940,
                'endFilePos' => 19284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 686,
            'endLine' => 686,
            'startColumn' => 53,
            'endColumn' => 65,
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
 * Push a new job onto the queue after (n) seconds.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @param  string|object  $job
 * @param  mixed  $data
 * @param  \\UnitEnum|string|null  $queue
 * @return mixed
 */',
        'startLine' => 686,
        'endLine' => 696,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
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
            'startLine' => 706,
            'endLine' => 706,
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
            'startLine' => 706,
            'endLine' => 706,
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
                'startLine' => 706,
                'endLine' => 706,
                'startTokenPos' => 3043,
                'startFilePos' => 19804,
                'endTokenPos' => 3043,
                'endFilePos' => 19805,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 706,
            'endLine' => 706,
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
 * @param  \\UnitEnum|string  $queue
 * @param  string|object  $job
 * @param  mixed  $data
 * @return mixed
 */',
        'startLine' => 706,
        'endLine' => 709,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
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
            'startLine' => 720,
            'endLine' => 720,
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
            'startLine' => 720,
            'endLine' => 720,
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
            'startLine' => 720,
            'endLine' => 720,
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
                'startLine' => 720,
                'endLine' => 720,
                'startTokenPos' => 3087,
                'startFilePos' => 20198,
                'endTokenPos' => 3087,
                'endFilePos' => 20199,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 720,
            'endLine' => 720,
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
 * @param  \\UnitEnum|string  $queue
 * @param  \\DateTimeInterface|\\DateInterval|int  $delay
 * @param  string|object  $job
 * @param  mixed  $data
 * @return mixed
 */',
        'startLine' => 720,
        'endLine' => 723,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'reserve' => 
      array (
        'name' => 'reserve',
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
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 29,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 732,
                'endLine' => 732,
                'startTokenPos' => 3128,
                'startFilePos' => 20487,
                'endTokenPos' => 3128,
                'endFilePos' => 20490,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Mark the given job as reserved.
 *
 * @param  \\Closure|string|object  $job
 * @param  \\UnitEnum|string|null  $queue
 * @return void
 */',
        'startLine' => 732,
        'endLine' => 744,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pop' => 
      array (
        'name' => 'pop',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 752,
                'endLine' => 752,
                'startTokenPos' => 3242,
                'startFilePos' => 21049,
                'endTokenPos' => 3242,
                'endFilePos' => 21052,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 752,
            'endLine' => 752,
            'startColumn' => 25,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Pop the next job off of the queue.
 *
 * @param  \\UnitEnum|string|null  $queue
 * @return \\Illuminate\\Contracts\\Queue\\Job|null
 */',
        'startLine' => 752,
        'endLine' => 755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
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
            'startLine' => 765,
            'endLine' => 765,
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
                'startLine' => 765,
                'endLine' => 765,
                'startTokenPos' => 3266,
                'startFilePos' => 21309,
                'endTokenPos' => 3266,
                'endFilePos' => 21310,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 765,
            'endLine' => 765,
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
                'startLine' => 765,
                'endLine' => 765,
                'startTokenPos' => 3273,
                'startFilePos' => 21322,
                'endTokenPos' => 3273,
                'endFilePos' => 21325,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 765,
            'endLine' => 765,
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
 * @param  \\UnitEnum|string|null  $queue
 * @return mixed
 */',
        'startLine' => 765,
        'endLine' => 770,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'pushedJobs' => 
      array (
        'name' => 'pushedJobs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the jobs that have been pushed.
 *
 * @return array
 */',
        'startLine' => 777,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'rawPushes' => 
      array (
        'name' => 'rawPushes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the payloads that were pushed raw.
 *
 * @return list<RawPushType>
 */',
        'startLine' => 787,
        'endLine' => 790,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'serializeAndRestore' => 
      array (
        'name' => 'serializeAndRestore',
        'parameters' => 
        array (
          'serializeAndRestore' => 
          array (
            'name' => 'serializeAndRestore',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 798,
                'endLine' => 798,
                'startTokenPos' => 3364,
                'startFilePos' => 22017,
                'endTokenPos' => 3364,
                'endFilePos' => 22020,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 798,
            'endLine' => 798,
            'startColumn' => 41,
            'endColumn' => 72,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Specify if jobs should be serialized and restored when being "pushed" to the queue.
 *
 * @param  bool  $serializeAndRestore
 * @return $this
 */',
        'startLine' => 798,
        'endLine' => 803,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'serializeAndRestoreJob' => 
      array (
        'name' => 'serializeAndRestoreJob',
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
            'startLine' => 811,
            'endLine' => 811,
            'startColumn' => 47,
            'endColumn' => 50,
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
 * Serialize and unserialize the job to simulate the queueing process.
 *
 * @param  mixed  $job
 * @return mixed
 */',
        'startLine' => 811,
        'endLine' => 814,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'releaseUniqueJobLocks' => 
      array (
        'name' => 'releaseUniqueJobLocks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Release the locks for all unique jobs that were pushed.
 *
 * @return void
 */',
        'startLine' => 821,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      'clearReserved' => 
      array (
        'name' => 'clearReserved',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clear all of the reserved jobs.
 *
 * @return void
 */',
        'startLine' => 837,
        'endLine' => 840,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
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
        'startLine' => 847,
        'endLine' => 850,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
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
            'startLine' => 858,
            'endLine' => 858,
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
        'startLine' => 858,
        'endLine' => 861,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 872,
            'endLine' => 872,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 872,
            'endLine' => 872,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Override the QueueManager to prevent circular dependency.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
        'startLine' => 872,
        'endLine' => 877,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
        'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\QueueFake',
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