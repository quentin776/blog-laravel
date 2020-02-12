<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $contact = ['title', 'content'];
    public function Contact() {
        return $this->hasMany( 'App\Contact' );
    }
}


