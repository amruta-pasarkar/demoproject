<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    protected $table = 'states';

    protected $primaryKey = 'id';


    protected $fillable = ['name','countryID'];
}
