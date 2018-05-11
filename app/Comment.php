<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Comment extends Model
{
    protected $table = 'comment';
   protected $fillable = [
        'body', 'user_id','article_id','replay'
    ];
   public function article()
  {
       return $this->belongsTo('App\Article');
   }
}
