<?php

namespace PhpJunior\Zawuni;

use Illuminate\Support\ServiceProvider;
use PhpJunior\Zawuni\Builder\ZawuniBuilder;
use PhpJunior\Zawuni\Facades\ZawuniFacades;

class ZawuniServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([ $this->configPath() => config_path('zawuni.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'zawuni');
        $this->registerBuilder();
        $this->registerFacade();
    }

    private function registerBuilder()
    {
        $this->app->bind('zawuni', function ($app) {
            $config = $app['config'];
            return new ZawuniBuilder($config->get('zawuni.font') , $config->get('zawuni.define_class'));
        });
    }

    private function registerFacade()
    {
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Zawuni', ZawuniFacades::class);
        });
    }

    /**
     * @return string
     */
    protected function configPath()
    {
        return __DIR__ . '/../config/zawuni.php';
    }
}
