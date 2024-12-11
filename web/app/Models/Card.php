<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Events\UserSaved;
use App\Events\UserDeleted;

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

    protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'deleted' => UserDeleted::class,
    ];
}
