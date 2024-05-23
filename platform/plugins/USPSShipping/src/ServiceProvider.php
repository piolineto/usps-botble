<?php

namespace Botble\USPSShipping;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class ServiceProvider extends PluginOperationAbstract
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'usps-shipping');
        Log::info('USPSShipping ServiceProvider booted.');
    }
    
    public function activate()
    {
        Log::info('USPSShipping plugin activated.');
    }

    public function deactivate()
    {
        Log::info('USPSShipping plugin deactivated.');
    }

    public function remove()
    {
        Schema::dropIfExists('usps_shipping_configs');
        Schema::dropIfExists('usps_shipping_transactions');
        Log::info('USPSShipping plugin removed and related tables dropped.');
    }
}