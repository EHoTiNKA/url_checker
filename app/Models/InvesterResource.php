<?php

namespace App\Models;


class InvesterResource extends Model
{
    protected $fillable = ['dns', 'site_id'];
    protected $table = 'invester_resources';
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}