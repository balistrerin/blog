<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = ['body'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
