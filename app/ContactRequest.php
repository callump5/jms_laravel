<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    //

    public static function countRequests() {
        $count = ContactRequest::where('viewed', 'false')->count();
        return $count;
    }
}
