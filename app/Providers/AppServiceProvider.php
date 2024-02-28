<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Dedoc\Scramble\Scramble;
use Dedoc\Scramble\Support\Generator\OpenApi;
use Dedoc\Scramble\Support\Generator\SecurityScheme;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	
	public function register(): void
	{
		// 		

	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void
	{

		// Scramble::routes(function (Route $route) {
		// 	return Str::startsWith($route->uri, 'api/');
		// });

		Scramble::extendOpenApi(function (OpenApi $openApi) {
			$openApi->secure(
				SecurityScheme::http('bearer', 'JWT')
			);
		});

		$this->registerBladeComponents('forms');
		$this->registerBladeComponents('button');

	}

	protected function registerBladeComponents(string $folder_name): void
	{
		$componentsPath = resource_path('views/components/' . $folder_name);

		$files = collect(File::allFiles($componentsPath));

		$files->each(function ($file) use ($folder_name) {
			$componentName = $folder_name . '.' . $file->getBasename('.blade.php');
			Blade::component('components.' . $folder_name . '.' . $file->getBasename('.blade.php'), $componentName);
		});
	}
}
