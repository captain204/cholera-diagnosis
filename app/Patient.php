<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable =[

            'firstname',
            'lastname',
            'marital_status',
            'date_birth',
            'phone',
            'email',
            'address',
            'occupation',
            'doc_name',
            'id',

    ];
}
