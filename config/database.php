<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
        'sqlite_testing' => [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => ''
        ],
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'unix_socket' => env('DB_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'base_temporal_api' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_TEMPORAL_DEV'),
            'port' => env('DB_PORT_TEMPORAL_DEV'),
            'database' => env('DB_DATABASE_TEMPORAL_DEV'),
            'username' => env('DB_USERNAME_TEMPORAL_DEV'),
            'password' => env('DB_PASSWORD_TEMPORAL_DEV'),
            'unix_socket' => env('DB_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'suite_crm' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SUITECRM'),
            'port' => env('DB_PORT_SUITECRM'),
            'database' => env('DB_DATABASE_SUITECRM'),
            'username' => env('DB_USERNAME_SUITECRM'),
            'password' => env('DB_PASSWORD_SUITECRM'),
            'unix_socket' => env('DB_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'sugar_dev' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SUGAR_DEV'),
            'port' => env('DB_PORT_SUGAR_DEV'),
            'database' => env('DB_DATABASE_SUGAR_DEV'),
            'username' => env('DB_USERNAME_SUGAR_DEV'),
            'password' => env('DB_PASSWORD_SUGAR_DEV'),
            'unix_socket' => env('DB_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'sugar_prod' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SUGAR_PROD'),
            'port' => env('DB_PORT_SUGAR_PROD'),
            'database' => env('DB_DATABASE_SUGAR_PROD'),
            'username' => env('DB_USERNAME_SUGAR_PROD'),
            'password' => env('DB_PASSWORD_SUGAR_PROD'),
            'unix_socket' => env('DB_SOCKET'),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'strapi' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL_STRAPI'),
            'host' => env('DB_HOST_STRAPI'),
            'port' => env('DB_PORT_STRAPI'),
            'database' => env('DB_DATABASE_STRAPI'),
            'username' => env('DB_USERNAME_STRAPI'),
            'password' => env('DB_PASSWORD_STRAPI'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'base_intermedia' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_BASE_INTERMEDIA'),
            'port' => env('DB_PORT_BASE_INTERMEDIA'),
            'database' => env('DB_DATABASE_BASE_INTERMEDIA', ''),
            'username' => env('DB_USERNAME_BASE_INTERMEDIA', ''),
            'password' => env('DB_PASSWORD_BASE_INTERMEDIA', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'sugar_sz_prod' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SZ_SUGAR_PROD'),
            'port' => env('DB_PORT_SZ_SUGAR_PROD'),
            'database' => env('DB_DATABASE_SZ_SUGAR_PROD'),
            'username' => env('DB_USERNAME_SZ_SUGAR_PROD'),
            'password' => env('DB_PASSWORD_SZ_SUGAR_PROD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'base_intermedia_sz' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_SZ_BASE_INTERMEDIA'),
            'port' => env('DB_PORT_SZ_BASE_INTERMEDIA'),
            'database' => env('DB_DATABASE_SZ_BASE_INTERMEDIA'),
            'username' => env('DB_USERNAME_SZ_BASE_INTERMEDIA'),
            'password' => env('DB_PASSWORD_SZ_BASE_INTERMEDIA'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'sugar_cla_prod' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_CLA_SUGAR_PROD'),
            'port' => env('DB_PORT_CLA_SUGAR_PROD'),
            'database' => env('DB_DATABASE_CLA_SUGAR_PROD'),
            'username' => env('DB_USERNAME_CLA_SUGAR_PROD'),
            'password' => env('DB_PASSWORD_CLA_SUGAR_PROD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'base_intermedia_cla' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_CLA_BASE_INTERMEDIA'),
            'port' => env('DB_PORT_CLA_BASE_INTERMEDIA'),
            'database' => env('DB_DATABASE_CLA_BASE_INTERMEDIA'),
            'username' => env('DB_USERNAME_CLA_BASE_INTERMEDIA'),
            'password' => env('DB_PASSWORD_CLA_BASE_INTERMEDIA'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'sugar_tyc_prod' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_TYC_SUGAR_PROD'),
            'port' => env('DB_PORT_TYC_SUGAR_PROD'),
            'database' => env('DB_DATABASE_TYC_SUGAR_PROD'),
            'username' => env('DB_USERNAME_TYC_SUGAR_PROD'),
            'password' => env('DB_PASSWORD_TYC_SUGAR_PROD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'base_intermedia_tyc' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_TYC_BASE_INTERMEDIA'),
            'port' => env('DB_PORT_TYC_BASE_INTERMEDIA'),
            'database' => env('DB_DATABASE_TYC_BASE_INTERMEDIA'),
            'username' => env('DB_USERNAME_TYC_BASE_INTERMEDIA'),
            'password' => env('DB_PASSWORD_TYC_BASE_INTERMEDIA'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', ''),
            'port' => env('DB_PORT', ''),
            'database' => env('DB_DATABASE', ''),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', ''),
            'port' => env('DB_PORT', ''),
            'database' => env('DB_DATABASE', ''),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],
        'oracle_s3s' => [
            'driver'         => 'oracle',
            'tns'            => '',
            'host'           => env('DB_S3S_HOST'),
            'port'           => env('DB_S3S_PORT'),
            'database'       => env('DB_S3S_DATABASE'),
            'username'       => env('DB_S3S_USERNAME'),
            'password'       => env('DB_S3S_PASSWORD'),
            'charset'        => env('DB_S3S_CHARSET'),
            'prefix_schema'  => env('DB_S3S_PREFIX_SCHEMA'),
            'edition'        => 'ora$base',
            'server_version' => env('DB_S3S_SERVER_VERSION'),
            'load_balance'   => 'yes',
            'options' => [PDO::ATTR_PERSISTENT =>1,]
        ],
        'CB_bdd_centralizada' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_CENTRALIZADA_PROD'),
            'port' => env('DB_PORT_CENTRALIZADA_PROD'),
            'database' => env('DB_DATABASE_CENTRALIZADA_PROD'),
            'username' => env('DB_USERNAME_CENTRALIZADA_PROD'),
            'password' => env('DB_PASSWORD_CENTRALIZADA_PROD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],'omotenashi' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_OMOTENASHI_PROD'),
            'port' => env('DB_PORT_OMOTENASHI_PROD'),
            'database' => env('DB_DATABASE_OMOTENASHI_PROD'),
            'username' => env('DB_USERNAME_OMOTENASHI_PROD'),
            'password' => env('DB_PASSWORD_OMOTENASHI_PROD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
        'nuevos_exonerados' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST_NEWEXONERADOS_PROD'),
            'port' => env('DB_PORT_NEWEXONERADOS_PROD'),
            'database' => env('DB_DATABASE_NEWEXONERADOS_PROD'),
            'username' => env('DB_USERNAME_NEWEXONERADOS_PROD'),
            'password' => env('DB_PASSWORD_NEWEXONERADOS_PROD'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
