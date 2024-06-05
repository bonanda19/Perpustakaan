<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jilid extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['name'];
    // protected $primaryKey = 'uuid';

    public function Book(){
        return $this->hasMany(Book::class);
    }
}
