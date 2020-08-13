<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ArcherySession extends Model
{
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
