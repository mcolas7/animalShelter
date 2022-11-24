<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $primaryKey = 'size_id';
    protected $guarded = ['size_id','name'];

    public function dogs () {
        return $this->hasMany(Dog::class, 'size_id');
    }
}
