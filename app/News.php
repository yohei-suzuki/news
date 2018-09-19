<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $connection = 'mysql_news';
    
    public function newscategory()
    {
        return $this->hasOne('NewsCategory');
    }
}
