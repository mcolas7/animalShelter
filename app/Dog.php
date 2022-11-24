<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dogs';
    protected $primaryKey = 'dog_id';
    protected $fillable = ['sex_id', 'size_id', 'name','image','breed','color','adopted'];
    protected $guarded = ['dog_id'];

    public function sex() {
        return $this->belongsTo(Sex::class, 'sex_id');
    }

    public function size() {
        return $this->belongsTo(Size::class, 'size_id');
    }
}
