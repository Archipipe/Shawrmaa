<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Restaurant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
