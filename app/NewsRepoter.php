<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsRepoter extends Model
{
    protected $connection = 'mysql_news';
    
    protected $table = 'news_repoters';
}
