<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 5:34 AM
 */

namespace TechTest\Repositories\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use TechTest\Repositories\Eloquents\CountriesRepository;
use TechTest\Repositories\Eloquents\GuestRegistrationRepository;

class GuestRegistrationController extends Controller
{
    private $guestRegistration;
    private $countries;

    public function __construct(
        GuestRegistrationRepository $guestRegistration,
        CountriesRepository $countries
    )
    {
        $this->guestRegistration = $guestRegistration;
        $this->countries = $countries;
    }

    public function index() {
        return Response::json($this->guestRegistration->all());
    }

}