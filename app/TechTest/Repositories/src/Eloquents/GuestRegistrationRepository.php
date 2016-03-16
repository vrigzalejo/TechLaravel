<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 5:50 AM
 */

namespace TechTest\Repositories\Eloquents;


use TechTest\Repositories\Contracts\GuestRegistrationInterface;

class GuestRegistrationRepository extends TechTestRepository implements GuestRegistrationInterface
{

    /**
     * @return string
     */
    function model()
    {
        return 'TechTest\Repositories\Models\GuestRegistration';
    }
}