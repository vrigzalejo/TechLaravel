<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 6:08 AM
 */

namespace TechTest\Repositories\Models;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * @var string
     */
    protected $table = 'country';

    public $timestamps = false;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $fillable = [
        'country_code',
        'country_name',
    ];


}