<?php namespace Smalldogs\Html5Inputs;

use Illuminate\Support\ServiceProvider;

class Html5InputsServiceProvider extends ServiceProvider {

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

    public function boot ()
    {
        $this->package('smalldogs/html5inputs');

    }

}
