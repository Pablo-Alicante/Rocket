<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }
}

$comments = new Comment(['number' => '987654321']);
$newsletter->comments()->save($comments);
// También podemos guardar la relación desde el objeto relacionado
$comments->newsletter()->associate($newsletter);
$comments->save();
