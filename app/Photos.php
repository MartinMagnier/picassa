<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = 'photos';

    public function utilisateur() {
        return $this->belongsTo("App\User", "utilisateur_id");
    }
}
