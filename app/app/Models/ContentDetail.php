<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentDetail extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    /**
     *  content belongsTo
     */
    public function content() 
    {
        return $this->belongsTo('App\Models\Content');
    }
}
