<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BookModel extends Model
{
    use HasFactory;
    protected $table='book';
    protected $pimaryKey='id';
    protected $fillable=['title','pages','isbn','short_decription','author_id'];
    
        public function auth(){
    return $this->belongsTo(AuthorsModel::class,'author_id');
    }
}
