<?php
​
namespace LucasRodrigues\BtnCrud\Providers;
​
use Illuminate\Support\ServiceProvider;
​
class BtnCrudServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'btncrud');
        require __DIR__ . '/../Helpers/btncrud.php';
    }

    public function register()
    {

    }
}