<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 3/16/16
 * Time: 11:24 PM
 */

namespace TechTest\Repositories\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use TechTest\Repositories\Eloquents\CountriesRepository;

class CountryController extends Controller
{
    private $countries;

    public function __construct(
        CountriesRepository $countries
    )
    {
        $this->countries         = $countries;
    }

    public function index()
    {
        return Response::json( $this->countries->all() );
    }
}