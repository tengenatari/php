<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Policies\CardPolicy;
use Illuminate\Support\Facades\Gate;
class Card extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function setTitle($value){
        $this->attributes['title'] = strtolower($value);
    }
    public function getModalTitle($value)
    {
        $this->attributes['modal_title'] = strtolower($value);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    protected static function booted()
    {

        static::updating(function ($card) {
            if(!Gate::check('create-card', [$card])){
                abort(403);
            }
        });
        static::deleting(function ($card) {
            if(!Gate::check('delete-card', [$card])){
                abort(403);
            }
        });
        static::creating(function($card){
           if(!Gate::check('create-card')){
               abort(401);
           }
        });
    }
}
