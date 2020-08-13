<?php

namespace App;

use App\Score;
use App\User;
use Illuminate\Database\Eloquent\Model;

class ArcherySession extends Model
{
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
