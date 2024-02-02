<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;

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
