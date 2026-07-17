<?php declare(strict_types = 1);

// osfsl-C:/Users/vinsc/Herd/devyanivbl/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Grammars/Grammar.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Query\Grammars\Grammar
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-eb9f42220c2c97080bdf05be6e53ef0648cb9b5cd19a918808c4c518d7ee94c0-8.5.8-6.70.0.3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'filename' => 'C:/Users/vinsc/Herd/devyanivbl/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Grammars/Grammar.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Query\\Grammars',
    'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
    'shortName' => 'Grammar',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 1670,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Grammar',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Concerns\\CompilesJsonPaths',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'operators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'name' => 'operators',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 79,
            'startFilePos' => 593,
            'endTokenPos' => 80,
            'endFilePos' => 594,
          ),
        ),
        'docComment' => '/**
 * The grammar specific operators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bitwiseOperators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'name' => 'bitwiseOperators',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 91,
            'startFilePos' => 720,
            'endTokenPos' => 92,
            'endFilePos' => 721,
          ),
        ),
        'docComment' => '/**
 * The grammar specific bitwise operators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'selectComponents' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'name' => 'selectComponents',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'aggregate\', \'columns\', \'from\', \'indexHint\', \'joins\', \'wheres\', \'groups\', \'havings\', \'orders\', \'limit\', \'offset\', \'lock\']',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 51,
            'startTokenPos' => 103,
            'startFilePos' => 855,
            'endTokenPos' => 141,
            'endFilePos' => 1079,
          ),
        ),
        'docComment' => '/**
 * The components that make up a select clause.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
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
      'compileSelect' => 
      array (
        'name' => 'compileSelect',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 35,
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
 * Compile a select query into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 59,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileComponents' => 
      array (
        'name' => 'compileComponents',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 42,
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
 * Compile the components necessary for a select clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return array
 */',
        'startLine' => 107,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileAggregate' => 
      array (
        'name' => 'compileAggregate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'aggregate' => 
          array (
            'name' => 'aggregate',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 57,
            'endColumn' => 66,
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
 * Compile an aggregated select clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array{function: string, columns: array<\\Illuminate\\Contracts\\Database\\Query\\Expression|string>}  $aggregate
 * @return string
 */',
        'startLine' => 129,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileColumns' => 
      array (
        'name' => 'compileColumns',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 152,
            'endLine' => 152,
            'startColumn' => 55,
            'endColumn' => 62,
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
 * Compile the "select *" portion of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $columns
 * @return string|null
 */',
        'startLine' => 152,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileFrom' => 
      array (
        'name' => 'compileFrom',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile the "from" portion of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @return string
 */',
        'startLine' => 177,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJoins' => 
      array (
        'name' => 'compileJoins',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 189,
            'endLine' => 189,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'joins' => 
          array (
            'name' => 'joins',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 189,
            'endLine' => 189,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile the "join" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $joins
 * @return string
 */',
        'startLine' => 189,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJoinLateral' => 
      array (
        'name' => 'compileJoinLateral',
        'parameters' => 
        array (
          'join' => 
          array (
            'name' => 'join',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\JoinLateralClause',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 40,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expression' => 
          array (
            'name' => 'expression',
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
            'startLine' => 217,
            'endLine' => 217,
            'startColumn' => 65,
            'endColumn' => 82,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compile a "lateral join" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\JoinLateralClause  $join
 * @param  string  $expression
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'supportsStraightJoins' => 
      array (
        'name' => 'supportsStraightJoins',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the grammar supports straight joins.
 *
 * @return bool
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 229,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileWheres' => 
      array (
        'name' => 'compileWheres',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 35,
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
 * Compile the "where" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 240,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileWheresToArray' => 
      array (
        'name' => 'compileWheresToArray',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 45,
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
 * Get an array of all the where clauses for the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return array
 */',
        'startLine' => 265,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'concatenateWhereClauses' => 
      array (
        'name' => 'concatenateWhereClauses',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 56,
            'endColumn' => 59,
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
 * Format the where clause statements into one string.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $sql
 * @return string
 */',
        'startLine' => 279,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereRaw' => 
      array (
        'name' => 'whereRaw',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 293,
            'endLine' => 293,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 293,
            'endLine' => 293,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Compile a raw where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 293,
        'endLine' => 296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBasic' => 
      array (
        'name' => 'whereBasic',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Compile a basic where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 305,
        'endLine' => 312,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBitwise' => 
      array (
        'name' => 'whereBitwise',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 321,
            'endLine' => 321,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile a bitwise operator where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 321,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereLike' => 
      array (
        'name' => 'whereLike',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 335,
            'endLine' => 335,
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
 * Compile a "where like" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 335,
        'endLine' => 344,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNullSafeEquals' => 
      array (
        'name' => 'whereNullSafeEquals',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 44,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 60,
            'endColumn' => 65,
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
 * Compile a "where null safe equals" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 353,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereIn' => 
      array (
        'name' => 'whereIn',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 365,
            'endLine' => 365,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 365,
            'endLine' => 365,
            'startColumn' => 48,
            'endColumn' => 53,
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
 * Compile a "where in" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 365,
        'endLine' => 372,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotIn' => 
      array (
        'name' => 'whereNotIn',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Compile a "where not in" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 381,
        'endLine' => 388,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotInRaw' => 
      array (
        'name' => 'whereNotInRaw',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 399,
            'endLine' => 399,
            'startColumn' => 54,
            'endColumn' => 59,
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
 * Compile a "where not in raw" clause.
 *
 * For safety, whereIntegerInRaw ensures this method is only used with integer values.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 399,
        'endLine' => 406,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereInRaw' => 
      array (
        'name' => 'whereInRaw',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 417,
            'endLine' => 417,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 417,
            'endLine' => 417,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Compile a "where in raw" clause.
 *
 * For safety, whereIntegerInRaw ensures this method is only used with integer values.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 417,
        'endLine' => 424,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNull' => 
      array (
        'name' => 'whereNull',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 433,
            'endLine' => 433,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 433,
            'endLine' => 433,
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
 * Compile a "where null" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 433,
        'endLine' => 436,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotNull' => 
      array (
        'name' => 'whereNotNull',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile a "where not null" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 445,
        'endLine' => 448,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBetween' => 
      array (
        'name' => 'whereBetween',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 457,
            'endLine' => 457,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 457,
            'endLine' => 457,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile a "between" where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 457,
        'endLine' => 466,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereBetweenColumns' => 
      array (
        'name' => 'whereBetweenColumns',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 44,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 60,
            'endColumn' => 65,
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
 * Compile a "between" where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 475,
        'endLine' => 484,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereValueBetween' => 
      array (
        'name' => 'whereValueBetween',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Compile a "value between" where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 493,
        'endLine' => 502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereDate' => 
      array (
        'name' => 'whereDate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 511,
            'endLine' => 511,
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
 * Compile a "where date" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 511,
        'endLine' => 514,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereTime' => 
      array (
        'name' => 'whereTime',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 523,
            'endLine' => 523,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 523,
            'endLine' => 523,
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
 * Compile a "where time" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 523,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereDay' => 
      array (
        'name' => 'whereDay',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 535,
            'endLine' => 535,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 535,
            'endLine' => 535,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Compile a "where day" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 535,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereMonth' => 
      array (
        'name' => 'whereMonth',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Compile a "where month" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 547,
        'endLine' => 550,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereYear' => 
      array (
        'name' => 'whereYear',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 559,
            'endLine' => 559,
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
 * Compile a "where year" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 559,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'dateBasedWhere' => 
      array (
        'name' => 'dateBasedWhere',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 572,
            'endLine' => 572,
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 572,
            'endLine' => 572,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 572,
            'endLine' => 572,
            'startColumn' => 62,
            'endColumn' => 67,
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
 * Compile a date based where clause.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 572,
        'endLine' => 577,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereColumn' => 
      array (
        'name' => 'whereColumn',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 586,
            'endLine' => 586,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 586,
            'endLine' => 586,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile a where clause comparing two columns.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 586,
        'endLine' => 589,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNested' => 
      array (
        'name' => 'whereNested',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 598,
            'endLine' => 598,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile a nested where clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 598,
        'endLine' => 606,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereSub' => 
      array (
        'name' => 'whereSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 49,
            'endColumn' => 54,
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
 * Compile a where condition with a sub-select.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 615,
        'endLine' => 620,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereExists' => 
      array (
        'name' => 'whereExists',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 629,
            'endLine' => 629,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile a where exists clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 629,
        'endLine' => 632,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereNotExists' => 
      array (
        'name' => 'whereNotExists',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Compile a where exists clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 641,
        'endLine' => 644,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereRowValues' => 
      array (
        'name' => 'whereRowValues',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 55,
            'endColumn' => 60,
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
 * Compile a where row values condition.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 653,
        'endLine' => 660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonBoolean' => 
      array (
        'name' => 'whereJsonBoolean',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 669,
            'endLine' => 669,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 669,
            'endLine' => 669,
            'startColumn' => 57,
            'endColumn' => 62,
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
 * Compile a "where JSON boolean" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 669,
        'endLine' => 678,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonContains' => 
      array (
        'name' => 'whereJsonContains',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 687,
            'endLine' => 687,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 687,
            'endLine' => 687,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Compile a "where JSON contains" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 687,
        'endLine' => 695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonContains' => 
      array (
        'name' => 'compileJsonContains',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
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
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
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
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile a "JSON contains" statement into SQL.
 *
 * @param  string  $column
 * @param  string  $value
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 706,
        'endLine' => 709,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonOverlaps' => 
      array (
        'name' => 'whereJsonOverlaps',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 58,
            'endColumn' => 63,
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
 * Compile a "where JSON overlaps" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 718,
        'endLine' => 726,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonOverlaps' => 
      array (
        'name' => 'compileJsonOverlaps',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 737,
            'endLine' => 737,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 737,
            'endLine' => 737,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile a "JSON overlaps" statement into SQL.
 *
 * @param  string  $column
 * @param  string  $value
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 737,
        'endLine' => 740,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'prepareBindingForJsonContains' => 
      array (
        'name' => 'prepareBindingForJsonContains',
        'parameters' => 
        array (
          'binding' => 
          array (
            'name' => 'binding',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 748,
            'endLine' => 748,
            'startColumn' => 51,
            'endColumn' => 58,
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
 * Prepare the binding for a "JSON contains" statement.
 *
 * @param  mixed  $binding
 * @return string
 */',
        'startLine' => 748,
        'endLine' => 751,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonContainsKey' => 
      array (
        'name' => 'whereJsonContainsKey',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 760,
            'endLine' => 760,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 760,
            'endLine' => 760,
            'startColumn' => 61,
            'endColumn' => 66,
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
 * Compile a "where JSON contains key" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 760,
        'endLine' => 767,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonContainsKey' => 
      array (
        'name' => 'compileJsonContainsKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 777,
            'endLine' => 777,
            'startColumn' => 47,
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
 * Compile a "JSON contains key" statement into SQL.
 *
 * @param  string  $column
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 777,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereJsonLength' => 
      array (
        'name' => 'whereJsonLength',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 789,
            'endLine' => 789,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 789,
            'endLine' => 789,
            'startColumn' => 56,
            'endColumn' => 61,
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
 * Compile a "where JSON length" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 789,
        'endLine' => 796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonLength' => 
      array (
        'name' => 'compileJsonLength',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 808,
            'endLine' => 808,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 808,
            'endLine' => 808,
            'startColumn' => 51,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 808,
            'endLine' => 808,
            'startColumn' => 62,
            'endColumn' => 67,
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
 * Compile a "JSON length" statement into SQL.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  string  $value
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 808,
        'endLine' => 811,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileJsonValueCast' => 
      array (
        'name' => 'compileJsonValueCast',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 819,
            'endLine' => 819,
            'startColumn' => 42,
            'endColumn' => 47,
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
 * Compile a "JSON value cast" statement into SQL.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 819,
        'endLine' => 822,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereFullText' => 
      array (
        'name' => 'whereFullText',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 833,
            'endLine' => 833,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 833,
            'endLine' => 833,
            'startColumn' => 51,
            'endColumn' => 56,
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
 * Compile a "where fulltext" clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 833,
        'endLine' => 836,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'whereExpression' => 
      array (
        'name' => 'whereExpression',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 845,
            'endLine' => 845,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 845,
            'endLine' => 845,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile a clause based on an expression.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $where
 * @return string
 */',
        'startLine' => 845,
        'endLine' => 848,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileGroups' => 
      array (
        'name' => 'compileGroups',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'groups' => 
          array (
            'name' => 'groups',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Compile the "group by" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $groups
 * @return string
 */',
        'startLine' => 857,
        'endLine' => 860,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavings' => 
      array (
        'name' => 'compileHavings',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 868,
            'endLine' => 868,
            'startColumn' => 39,
            'endColumn' => 52,
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
 * Compile the "having" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 868,
        'endLine' => 873,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHaving' => 
      array (
        'name' => 'compileHaving',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
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
            'startLine' => 881,
            'endLine' => 881,
            'startColumn' => 38,
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
 * Compile a single having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 881,
        'endLine' => 896,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileBasicHaving' => 
      array (
        'name' => 'compileBasicHaving',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 904,
            'endLine' => 904,
            'startColumn' => 43,
            'endColumn' => 49,
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
 * Compile a basic having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 904,
        'endLine' => 911,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingBetween' => 
      array (
        'name' => 'compileHavingBetween',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 919,
            'endLine' => 919,
            'startColumn' => 45,
            'endColumn' => 51,
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
 * Compile a "between" having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 919,
        'endLine' => 930,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingNull' => 
      array (
        'name' => 'compileHavingNull',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 938,
            'endLine' => 938,
            'startColumn' => 42,
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
 * Compile a having null clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 938,
        'endLine' => 943,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingNotNull' => 
      array (
        'name' => 'compileHavingNotNull',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 951,
            'endLine' => 951,
            'startColumn' => 45,
            'endColumn' => 51,
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
 * Compile a having not null clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 951,
        'endLine' => 956,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingBit' => 
      array (
        'name' => 'compileHavingBit',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 964,
            'endLine' => 964,
            'startColumn' => 41,
            'endColumn' => 47,
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
 * Compile a having clause involving a bit operator.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 964,
        'endLine' => 971,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileHavingExpression' => 
      array (
        'name' => 'compileHavingExpression',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 979,
            'endLine' => 979,
            'startColumn' => 48,
            'endColumn' => 54,
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
 * Compile a having clause involving an expression.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 979,
        'endLine' => 982,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileNestedHavings' => 
      array (
        'name' => 'compileNestedHavings',
        'parameters' => 
        array (
          'having' => 
          array (
            'name' => 'having',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 45,
            'endColumn' => 51,
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
 * Compile a nested having clause.
 *
 * @param  array  $having
 * @return string
 */',
        'startLine' => 990,
        'endLine' => 993,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileOrders' => 
      array (
        'name' => 'compileOrders',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1002,
            'endLine' => 1002,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'orders' => 
          array (
            'name' => 'orders',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1002,
            'endLine' => 1002,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Compile the "order by" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $orders
 * @return string
 */',
        'startLine' => 1002,
        'endLine' => 1009,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileOrdersToArray' => 
      array (
        'name' => 'compileOrdersToArray',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1018,
            'endLine' => 1018,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'orders' => 
          array (
            'name' => 'orders',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1018,
            'endLine' => 1018,
            'startColumn' => 61,
            'endColumn' => 67,
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
 * Compile the query orders to an array.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $orders
 * @return array
 */',
        'startLine' => 1018,
        'endLine' => 1031,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInOrderOf' => 
      array (
        'name' => 'compileInOrderOf',
        'parameters' => 
        array (
          'order' => 
          array (
            'name' => 'order',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1039,
            'endLine' => 1039,
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
 * Compile an "in order of" clause.
 *
 * @param  array  $order
 * @return string
 */',
        'startLine' => 1039,
        'endLine' => 1050,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileRandom' => 
      array (
        'name' => 'compileRandom',
        'parameters' => 
        array (
          'seed' => 
          array (
            'name' => 'seed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1058,
            'endLine' => 1058,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Compile the random statement into SQL.
 *
 * @param  string|int  $seed
 * @return string
 */',
        'startLine' => 1058,
        'endLine' => 1061,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileLimit' => 
      array (
        'name' => 'compileLimit',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1070,
            'endLine' => 1070,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1070,
            'endLine' => 1070,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Compile the "limit" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  int  $limit
 * @return string
 */',
        'startLine' => 1070,
        'endLine' => 1073,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileGroupLimit' => 
      array (
        'name' => 'compileGroupLimit',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1081,
            'endLine' => 1081,
            'startColumn' => 42,
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
 * Compile a group limit clause.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1081,
        'endLine' => 1119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileRowNumber' => 
      array (
        'name' => 'compileRowNumber',
        'parameters' => 
        array (
          'partition' => 
          array (
            'name' => 'partition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1128,
            'endLine' => 1128,
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'orders' => 
          array (
            'name' => 'orders',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1128,
            'endLine' => 1128,
            'startColumn' => 53,
            'endColumn' => 59,
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
 * Compile a row number clause.
 *
 * @param  string  $partition
 * @param  string  $orders
 * @return string
 */',
        'startLine' => 1128,
        'endLine' => 1133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileOffset' => 
      array (
        'name' => 'compileOffset',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1142,
            'endLine' => 1142,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1142,
            'endLine' => 1142,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Compile the "offset" portions of the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  int  $offset
 * @return string
 */',
        'startLine' => 1142,
        'endLine' => 1145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUnions' => 
      array (
        'name' => 'compileUnions',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1153,
            'endLine' => 1153,
            'startColumn' => 38,
            'endColumn' => 51,
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
 * Compile the "union" queries attached to the main query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1153,
        'endLine' => 1174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUnion' => 
      array (
        'name' => 'compileUnion',
        'parameters' => 
        array (
          'union' => 
          array (
            'name' => 'union',
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
            'startLine' => 1182,
            'endLine' => 1182,
            'startColumn' => 37,
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
 * Compile a single union statement.
 *
 * @param  array  $union
 * @return string
 */',
        'startLine' => 1182,
        'endLine' => 1187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'wrapUnion' => 
      array (
        'name' => 'wrapUnion',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1195,
            'endLine' => 1195,
            'startColumn' => 34,
            'endColumn' => 37,
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
 * Wrap a union subquery in parentheses.
 *
 * @param  string  $sql
 * @return string
 */',
        'startLine' => 1195,
        'endLine' => 1198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUnionAggregate' => 
      array (
        'name' => 'compileUnionAggregate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1206,
            'endLine' => 1206,
            'startColumn' => 46,
            'endColumn' => 59,
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
 * Compile a union aggregate query into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1206,
        'endLine' => 1213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileExists' => 
      array (
        'name' => 'compileExists',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1221,
            'endLine' => 1221,
            'startColumn' => 35,
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
 * Compile an exists statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1221,
        'endLine' => 1226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsert' => 
      array (
        'name' => 'compileInsert',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1235,
            'endLine' => 1235,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1235,
            'endLine' => 1235,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Compile an insert statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 */',
        'startLine' => 1235,
        'endLine' => 1260,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertOrIgnore' => 
      array (
        'name' => 'compileInsertOrIgnore',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1271,
            'endLine' => 1271,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1271,
            'endLine' => 1271,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Compile an insert ignore statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1271,
        'endLine' => 1274,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertOrIgnoreReturning' => 
      array (
        'name' => 'compileInsertOrIgnoreReturning',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1287,
            'endLine' => 1287,
            'startColumn' => 52,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1287,
            'endLine' => 1287,
            'startColumn' => 68,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'returning' => 
          array (
            'name' => 'returning',
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
            'startLine' => 1287,
            'endLine' => 1287,
            'startColumn' => 83,
            'endColumn' => 98,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1287,
            'endLine' => 1287,
            'startColumn' => 101,
            'endColumn' => 116,
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
 * Compile an insert or ignore statement with a returning clause into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @param  array  $returning
 * @param  array|null  $uniqueBy
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1287,
        'endLine' => 1290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertGetId' => 
      array (
        'name' => 'compileInsertGetId',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1300,
            'endLine' => 1300,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1300,
            'endLine' => 1300,
            'startColumn' => 56,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1300,
            'endLine' => 1300,
            'startColumn' => 65,
            'endColumn' => 73,
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
 * Compile an insert and get ID statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @param  string|null  $sequence
 * @return string
 */',
        'startLine' => 1300,
        'endLine' => 1303,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertUsing' => 
      array (
        'name' => 'compileInsertUsing',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1313,
            'endLine' => 1313,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1313,
            'endLine' => 1313,
            'startColumn' => 56,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1313,
            'endLine' => 1313,
            'startColumn' => 72,
            'endColumn' => 82,
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
 * Compile an insert statement using a subquery into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $columns
 * @param  string  $sql
 * @return string
 */',
        'startLine' => 1313,
        'endLine' => 1322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileInsertOrIgnoreUsing' => 
      array (
        'name' => 'compileInsertOrIgnoreUsing',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1334,
            'endLine' => 1334,
            'startColumn' => 48,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1334,
            'endLine' => 1334,
            'startColumn' => 64,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 1334,
            'endLine' => 1334,
            'startColumn' => 80,
            'endColumn' => 90,
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
 * Compile an insert ignore statement using a subquery into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $columns
 * @param  string  $sql
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1334,
        'endLine' => 1337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdate' => 
      array (
        'name' => 'compileUpdate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1346,
            'endLine' => 1346,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1346,
            'endLine' => 1346,
            'startColumn' => 51,
            'endColumn' => 63,
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
 * Compile an update statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 */',
        'startLine' => 1346,
        'endLine' => 1359,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdateColumns' => 
      array (
        'name' => 'compileUpdateColumns',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1368,
            'endLine' => 1368,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1368,
            'endLine' => 1368,
            'startColumn' => 61,
            'endColumn' => 73,
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
 * Compile the columns for an update statement.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @return string
 */',
        'startLine' => 1368,
        'endLine' => 1373,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdateWithoutJoins' => 
      array (
        'name' => 'compileUpdateWithoutJoins',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1384,
            'endLine' => 1384,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1384,
            'endLine' => 1384,
            'startColumn' => 66,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1384,
            'endLine' => 1384,
            'startColumn' => 74,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1384,
            'endLine' => 1384,
            'startColumn' => 84,
            'endColumn' => 89,
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
 * Compile an update statement without joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $columns
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1384,
        'endLine' => 1387,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpdateWithJoins' => 
      array (
        'name' => 'compileUpdateWithJoins',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1398,
            'endLine' => 1398,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1398,
            'endLine' => 1398,
            'startColumn' => 63,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1398,
            'endLine' => 1398,
            'startColumn' => 71,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1398,
            'endLine' => 1398,
            'startColumn' => 81,
            'endColumn' => 86,
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
 * Compile an update statement with joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $columns
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1398,
        'endLine' => 1403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileUpsert' => 
      array (
        'name' => 'compileUpsert',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1416,
            'endLine' => 1416,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1416,
            'endLine' => 1416,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
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
            'startLine' => 1416,
            'endLine' => 1416,
            'startColumn' => 66,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
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
            'startLine' => 1416,
            'endLine' => 1416,
            'startColumn' => 83,
            'endColumn' => 95,
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
 * Compile an "upsert" statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  array  $values
 * @param  array  $uniqueBy
 * @param  array  $update
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1416,
        'endLine' => 1419,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'prepareBindingsForUpdate' => 
      array (
        'name' => 'prepareBindingsForUpdate',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 1428,
            'endLine' => 1428,
            'startColumn' => 46,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1428,
            'endLine' => 1428,
            'startColumn' => 63,
            'endColumn' => 75,
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
 * Prepare the bindings for an update statement.
 *
 * @param  array  $bindings
 * @param  array  $values
 * @return array
 */',
        'startLine' => 1428,
        'endLine' => 1437,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileDelete' => 
      array (
        'name' => 'compileDelete',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1445,
            'endLine' => 1445,
            'startColumn' => 35,
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
 * Compile a delete statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return string
 */',
        'startLine' => 1445,
        'endLine' => 1456,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileDeleteWithoutJoins' => 
      array (
        'name' => 'compileDeleteWithoutJoins',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1466,
            'endLine' => 1466,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1466,
            'endLine' => 1466,
            'startColumn' => 66,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1466,
            'endLine' => 1466,
            'startColumn' => 74,
            'endColumn' => 79,
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
 * Compile a delete statement without joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1466,
        'endLine' => 1469,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileDeleteWithJoins' => 
      array (
        'name' => 'compileDeleteWithJoins',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1479,
            'endLine' => 1479,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1479,
            'endLine' => 1479,
            'startColumn' => 63,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1479,
            'endLine' => 1479,
            'startColumn' => 71,
            'endColumn' => 76,
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
 * Compile a delete statement with joins into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $table
 * @param  string  $where
 * @return string
 */',
        'startLine' => 1479,
        'endLine' => 1486,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'prepareBindingsForDelete' => 
      array (
        'name' => 'prepareBindingsForDelete',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 1494,
            'endLine' => 1494,
            'startColumn' => 46,
            'endColumn' => 60,
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
 * Prepare the bindings for a delete statement.
 *
 * @param  array  $bindings
 * @return array
 */',
        'startLine' => 1494,
        'endLine' => 1499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileTruncate' => 
      array (
        'name' => 'compileTruncate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1507,
            'endLine' => 1507,
            'startColumn' => 37,
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
 * Compile a truncate table statement into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return array
 */',
        'startLine' => 1507,
        'endLine' => 1510,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileLock' => 
      array (
        'name' => 'compileLock',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Query\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1519,
            'endLine' => 1519,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1519,
            'endLine' => 1519,
            'startColumn' => 52,
            'endColumn' => 57,
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
 * Compile the lock into SQL.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  bool|string  $value
 * @return string
 */',
        'startLine' => 1519,
        'endLine' => 1522,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileThreadCount' => 
      array (
        'name' => 'compileThreadCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compile a query to get the number of open connections for a database.
 *
 * @return string|null
 */',
        'startLine' => 1529,
        'endLine' => 1532,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'supportsSavepoints' => 
      array (
        'name' => 'supportsSavepoints',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the grammar supports savepoints.
 *
 * @return bool
 */',
        'startLine' => 1539,
        'endLine' => 1542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileSavepoint' => 
      array (
        'name' => 'compileSavepoint',
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
            'startLine' => 1550,
            'endLine' => 1550,
            'startColumn' => 38,
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
 * Compile the SQL statement to define a savepoint.
 *
 * @param  string  $name
 * @return string
 */',
        'startLine' => 1550,
        'endLine' => 1553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'compileSavepointRollBack' => 
      array (
        'name' => 'compileSavepointRollBack',
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
            'startLine' => 1561,
            'endLine' => 1561,
            'startColumn' => 46,
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
 * Compile the SQL statement to execute a savepoint rollback.
 *
 * @param  string  $name
 * @return string
 */',
        'startLine' => 1561,
        'endLine' => 1564,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'wrapJsonBooleanSelector' => 
      array (
        'name' => 'wrapJsonBooleanSelector',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1572,
            'endLine' => 1572,
            'startColumn' => 48,
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
 * Wrap the given JSON selector for boolean values.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1572,
        'endLine' => 1575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'wrapJsonBooleanValue' => 
      array (
        'name' => 'wrapJsonBooleanValue',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1583,
            'endLine' => 1583,
            'startColumn' => 45,
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
 * Wrap the given JSON boolean value.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1583,
        'endLine' => 1586,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'concatenate' => 
      array (
        'name' => 'concatenate',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1594,
            'endLine' => 1594,
            'startColumn' => 36,
            'endColumn' => 44,
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
 * Concatenate an array of segments, removing empties.
 *
 * @param  array  $segments
 * @return string
 */',
        'startLine' => 1594,
        'endLine' => 1599,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'removeLeadingBoolean' => 
      array (
        'name' => 'removeLeadingBoolean',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1607,
            'endLine' => 1607,
            'startColumn' => 45,
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
 * Remove the leading boolean from a statement.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1607,
        'endLine' => 1610,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'substituteBindingsIntoRawSql' => 
      array (
        'name' => 'substituteBindingsIntoRawSql',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1619,
            'endLine' => 1619,
            'startColumn' => 50,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1619,
            'endLine' => 1619,
            'startColumn' => 56,
            'endColumn' => 64,
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
 * Substitute the given bindings into the given raw SQL query.
 *
 * @param  string  $sql
 * @param  array  $bindings
 * @return string
 */',
        'startLine' => 1619,
        'endLine' => 1649,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'getOperators' => 
      array (
        'name' => 'getOperators',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the grammar specific operators.
 *
 * @return array
 */',
        'startLine' => 1656,
        'endLine' => 1659,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'aliasName' => NULL,
      ),
      'getBitwiseOperators' => 
      array (
        'name' => 'getBitwiseOperators',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the grammar specific bitwise operators.
 *
 * @return array
 */',
        'startLine' => 1666,
        'endLine' => 1669,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query\\Grammars',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
        'currentClassName' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
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