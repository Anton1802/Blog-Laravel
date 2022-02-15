<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    public function category()
        {

             return $this->hasOne('App\Models\Category', 'id', 'category_id');

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

    public function author()
    {

       return $this->hasOne('App\Models\User', 'id', 'user_id');

    }


}
