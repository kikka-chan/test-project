<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**リレーション_ひとつの投稿がひとりのユーザーに属す*/
class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
