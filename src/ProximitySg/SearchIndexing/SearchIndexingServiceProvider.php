<?php namespace ProximitySg\SearchIndexing;

use Illuminate\Support\ServiceProvider;

class SearchIndexingServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	public function boot()
	{
		$this->package('proximity-sg/search-indexing');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
	}

}