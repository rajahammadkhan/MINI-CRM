<?php

namespace App\Helpers;

use App\Helpers\Qs;
use App\Models\User;
use Auth;
use Mail;

class Sc
{

    public static function getUserProfile()
    {
        $profile = User::where('id', Auth()->user()->id)->get()->first();
        return $profile;
    }
}
