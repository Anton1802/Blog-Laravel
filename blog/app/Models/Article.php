<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function nameCategory()
        {

             return $this->hasOne('App\Models\Category', 'id', 'id_category');

        }


}
