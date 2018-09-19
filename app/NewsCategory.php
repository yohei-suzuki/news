<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $connection = 'mysql_news';
    
    protected $table = 'news_categorys';
}
