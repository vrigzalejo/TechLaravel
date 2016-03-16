<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 5:46 AM
 */

namespace TechTest\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

class GuestRegistration extends Model
{

    /**
     * @var string
     */
    protected $table = 'guest_registration';

    public $timestamps = false;


    /**
     * @var array
     */
    protected $guarded = [ ];


    /**
     * @var array
     */

    protected $fillable = [
        'personal_id',
        'title',
        'first_name',
        'last_name',
        'country_code',
        'sex',
        'comments',
    ];


}