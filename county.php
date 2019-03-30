<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class County extends Model
{
    use SoftDeletes;

    protected $table = 'county';
    protected $primaryKey = 'county_id';

    protected $fillable = ['county'];
}
