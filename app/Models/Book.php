<?php

namespace App\Models;


use App\Models\jilid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [ 'Jilid_id', 'Judul', 'Tahun', 'NoLemari', 'Bagian', 'image'];
    public function jilid(){
        return $this->belongsTo(jilid::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('Judul','LIKE','%'. $search .'%')
                         ->orWhere('Tahun','LIKE','%'. $search .'%');
        });
    }

   
}
