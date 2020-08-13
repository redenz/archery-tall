<?php

namespace App;

use App\ArcherySession;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function archerySession()
    {
        return $this->belongsTo(ArcherySession::class);
    }
}
