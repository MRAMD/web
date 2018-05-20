<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Article extends Model
{
protected $table = 'article';
   protected $fillable = [
        'title','body', 'user_id'
    ];

    
    public function comment()
    {
        return $this->hasMany('App\Comment','article_id','id');
    }
    public function user()
    {
        return $this->hasMany('App\User','id','user_id');
    }
    
}
