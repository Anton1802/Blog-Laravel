<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;

    public function nameCategory()
        {

             return $this->hasOne('App\Models\Category', 'id', 'id_category');

        }

    public function pastDate()
    {
        $date = Carbon::now();
        $create_data = $this->created_at;

        if($date->diffInDays($create_data) == 1)
        return $date->diffInDays($create_data) . ' день назад';

        else if($date->diffInDays($create_data) == 0)
        return 'Сегодня';

        else if($date->diffInDays($create_data) == 2)
        return $date->diffInDays($create_data) . ' дня назад';

        else if($date->diffInDays($create_data) == 3)
        return $date->diffInDays($create_data) . ' дня назад';

        else if($date->diffInDays($create_data) == 4)
        return $date->diffInDays($create_data) . ' дня назад';

        else if($date->diffInDays($create_data) >= 5)
        return $date->diffInDays($create_data) . ' дней назад';

    }

    public function getNameAuthor($id_user)
    {

       return $this->find($id_user)->hasOne('App\Models\User', 'id', 'user_id')->first()['name'];


    }


}
