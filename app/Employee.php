<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";

    protected $fillable = [

        "name",
        "lastname",
        "birthday",
        "jobtitle",
        "salary"
        
      ];
}
