<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';
    protected $fillable = [
        'item','unit','type'
    ];
}
