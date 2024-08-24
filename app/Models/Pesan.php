<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesans';

    protected $guarded = ['id'];


    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function Jns_paket()
    {
        return $this->belongsTo(Jns_paket::class);
    }
}
