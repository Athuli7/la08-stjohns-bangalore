<?php

use Illuminate\Support\Facades\Facade;

return [

	/*
    |--------------------------------------------------------------------------
    | Tenant Specific
    |--------------------------------------------------------------------------
    |
    */

	'url' => env('APP_URL', 'http://127.0.0.1:8000'),
	'asset_url' => env('ASSET_URL'),
	'locale' => 'en',
	'fallback_locale' => 'en',
	'faker_locale' => 'en_US',
	'site_short_name' => env('SITE_SHORT_NAME', ''),
	'site_long_name' => env('SITE_LONG_NAME', ''),
	'zegen' => [
		'theme' => env('ZEGEN_THEME', 'red'),
		'home_layout' => env('ZEGEN_HOME_LAYOUT', "01"),
		'organization_layout' => env('ZEGEN_ORGANIZATION_LAYOUT', "01"),
	],
	'routing' => [
		'public_pages' => env('ROUTING_PREFIX_PUBLIC_PAGES', 'pages'),
		'organizations' => env('ROUTING_PREFIX_ORGS', 'orgs'),
	],

	/*
    |--------------------------------------------------------------------------
    | App Specific
    |--------------------------------------------------------------------------
    |
    */

	'name' => env('APP_NAME', 'Laravel'),
	'env' => env('APP_ENV', 'production'),
	'debug' => (bool) env('APP_DEBUG', false),
	'timezone' => 'UTC',

	'key' => env('APP_KEY'),
	'cipher' => 'AES-256-CBC',
	'maintenance' => [
		'driver' => 'file',
		// 'store'  => 'redis',
	],

	/*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

	'providers' => [

		/*
         * Laravel Framework Service Providers...
         */
		Illuminate\Auth\AuthServiceProvider::class,
		Illuminate\Broadcasting\BroadcastServiceProvider::class,
		Illuminate\Bus\BusServiceProvider::class,
		Illuminate\Cache\CacheServiceProvider::class,
		Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
		Illuminate\Cookie\CookieServiceProvider::class,
		Illuminate\Database\DatabaseServiceProvider::class,
		Illuminate\Encryption\EncryptionServiceProvider::class,
		Illuminate\Filesystem\FilesystemServiceProvider::class,
		Illuminate\Foundation\Providers\FoundationServiceProvider::class,
		Illuminate\Hashing\HashServiceProvider::class,
		Illuminate\Mail\MailServiceProvider::class,
		Illuminate\Notifications\NotificationServiceProvider::class,
		Illuminate\Pagination\PaginationServiceProvider::class,
		Illuminate\Pipeline\PipelineServiceProvider::class,
		Illuminate\Queue\QueueServiceProvider::class,
		Illuminate\Redis\RedisServiceProvider::class,
		Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
		Illuminate\Session\SessionServiceProvider::class,
		Illuminate\Translation\TranslationServiceProvider::class,
		Illuminate\Validation\ValidationServiceProvider::class,
		Illuminate\View\ViewServiceProvider::class,

		/*
         * Package Service Providers...
         */

		/*
         * Application Service Providers...
         */
		App\Providers\AppServiceProvider::class,
		App\Providers\AuthServiceProvider::class,
		// App\Providers\BroadcastServiceProvider::class,
		App\Providers\EventServiceProvider::class,
		App\Providers\RouteServiceProvider::class,

	],

	/*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

	'aliases' => Facade::defaultAliases()->merge([
		// 'ExampleClass' => App\Example\ExampleClass::class,
	])->toArray(),
];
