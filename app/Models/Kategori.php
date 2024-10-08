<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';
    protected $guarded = ['id'];

    public function pakets()
    {
        return $this->hasMany(Paket::class, 'kategori_id');
    }
}
