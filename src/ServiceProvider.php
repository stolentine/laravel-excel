<?php

namespace Stolentine\Excel;

use Stolentine\Excel\Export\Adaptors\MaatwebsiteAdaptor;
use Stolentine\Excel\Export\IExcelExport;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $exportAdaptor = MaatwebsiteAdaptor::class; //todo from config

        app()->bind(IExcelExport::class, $exportAdaptor);
    }
}
