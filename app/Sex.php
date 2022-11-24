<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    protected $table = 'sexes';
    protected $primaryKey = 'sex_id';
    protected $guarded = ['sex_id','name'];

    public function dogs () {
        return $this->hasMany(Dog::class, 'sex_id');
    }
}
