<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSupportGroupS extends Model
{
    protected $table = "supportsessionss__user";

    protected $fillable = [
        'user_id' , 'support_session_id' , 'time_ss_id'
    ];
}
