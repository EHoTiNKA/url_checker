<?php

namespace App\Models;

class Site extends Model
{
    protected $fillable = ['ip', 'dns', 'children_count', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function investerResources()
    {
        return $this->hasMany(InvesterResource::class);
    }
}
