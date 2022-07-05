<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $table='posts';
    protected  $fillable=['title','text','preview_image','main_image','cat_id','tag_id'];
    public  function  category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }
    public  function  tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class ,'post_tags','post_id','tag_id');
    }
}
