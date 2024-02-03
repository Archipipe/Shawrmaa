<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function restaurant(){
        $this->belongsTo(Restaurant::class);
    }

}
