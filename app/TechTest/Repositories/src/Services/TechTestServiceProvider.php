<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 6:51 AM
 */

namespace TechTest\Repositories\Services;


use Illuminate\Support\ServiceProvider;

class TechTestServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TechTest\Repositories\Contracts\GuestRegistrationInterface', 'TechTest\Repositories\Eloquents\GuestRegistrationRepository');
        $this->app->bind('TechTest\Repositories\Contracts\CountriesInterface', 'TechTest\Repositories\Eloquents\CountriesRepository');
    }
}