<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 6:08 AM
 */

namespace TechTest\Repositories\Eloquents;


use TechTest\Repositories\Contracts\CountriesInterface;

class CountriesRepository extends TechTestRepository implements CountriesInterface
{

    /**
     * @return mixed
     */
    function model()
    {
        return 'TechTest\Repositories\Models\Country';
    }
}