<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arabicmenu extends Model
{
    public function parent()
    {
        return $this->belongsTo('App\Arabicmenu', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Arabicmenu', 'parent_id');
    }

}
