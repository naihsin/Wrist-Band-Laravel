<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeasureLog extends Model
{
    protected $table = "measurelog";
    protected $primaryKey = "SerialID";
    public $incrementing = true;
    protected $keyType = "bigInteger";
    public $timestamps = true;
}