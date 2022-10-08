<?php

/**
 * PHP Version 8.1.11
 * Laravel Framework 9.34.0
 *
 * @category Service Provider
 *
 * @package Laravel
 *
 * @author CWSPS154 <codewithsps154@gmail.com>
 *
 * @license MIT License https://opensource.org/licenses/MIT
 *
 * @link https://github.com/CWSPS154
 *
 * Date 05/10/22
 * */

namespace CWSPS154\BootstrapUiComponents;

use CWSPS154\BootstrapUiComponents\View\Components\Ui\Input;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BootstrapUiComponentsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/buicomponents.php','buicomponents');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views/','bui-components');
        Blade::componentNamespace('CWSPS154\\BootstrapUiComponents\\View\\Components','buicomponents');
    }
}
