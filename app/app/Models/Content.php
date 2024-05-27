<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $softCascade = [
        'content_details'
    ];

    /**
     *  content_details hasMany
     */
    public function content_details() 
    {
        return $this->hasMany('App\Models\ContentDetail');
    }

    /**
     *  labels hasMany
     */
    public function labels() 
    {
        return $this->hasMany('App\Models\Label');
    }
}
