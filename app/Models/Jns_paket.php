<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jns_paket extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pesans()
    {
        return $this->hasMany(Pesan::class);
    }

}
