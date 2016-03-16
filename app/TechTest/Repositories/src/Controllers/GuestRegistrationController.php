<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 5:34 AM
 */

namespace TechTest\Repositories\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
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
        $this->countries         = $countries;
    }

    public function index()
    {
        return Response::json( $this->guestRegistration->all() );
    }

    public function store()
    {
        if( Request::isMethod('post') ) {
            $this->guestRegistration->create( array(
                'personal_id'  => Input::get( 'personal_id' ),
                'title'        => Input::get( 'title' ),
                'first_name'   => Input::get( 'first_name' ),
                'last_name'    => Input::get( 'last_name' ),
                'country_code' => Input::get( 'citizenship' ),
                'sex'          => Input::get( 'sex' ),
                'comments'     => Input::get( 'comments' ),
            ) );

            return Response::json( array( 'success' => true ) );
        }

        return Response::json( array( 'success' => false ) );

    }

    public function destroy( $id )
    {
        $this->guestRegistration->delete( $id );

        return Response::json( array( 'success' => true ) );
    }

}