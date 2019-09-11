<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = "PersonalID";
    public $incrementing = false;
    protected $keyType = "string";
    public $timestamps = false;
}