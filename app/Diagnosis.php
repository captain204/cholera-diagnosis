<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $fillable =[

        'diarrhorea',
        'vomiting',
        'dehydration'
    ];
}
