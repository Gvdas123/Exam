<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class AuthorsModel extends Model
{
    use HasFactory;
    protected $table='auth';
    protected $pimaryKey='id';
    protected $fillable=['Name','Surname'];
    
    public function books(){
    return $this->hasMany(BookModel::class,'author_id');}
    
}