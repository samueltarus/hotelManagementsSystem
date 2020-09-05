<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey='role_id';

    protected $fillable = [
        'name',
    ];
    public function user(){

        return $this->belongsTo(User::class);
    }
}
