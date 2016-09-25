<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscripts extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'birth_date', 'source', 'amount'];
}
