<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['Judul','slug', 'Jilid', 'Tahun', 'NoLemari', 'Bagian', 'image'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('Judul','LIKE','%'. $search .'%')
                         ->orWhere('Jilid','LIKE','%'. $search .'%');
        });
    }

   
}
