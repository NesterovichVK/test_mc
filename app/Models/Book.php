<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;


    protected $guarded = ['id'];


    public function author()
    {
        return $this->belongsToMany(Author::class,'author_books','book_id','author_id','id' );
    }
}
