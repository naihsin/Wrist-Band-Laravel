<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SleepSummary extends Model
{
    protected $table = "sleepsummary";
    protected $primaryKey = "SerialID";
    public $incrementing = true;
    protected $keyType = "bigInteger";
    public $timestamps = false;
}