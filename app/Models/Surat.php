<?php

namespace App\Models;

use App\Models\User;
use App\Models\JenisSurat;
use App\Models\DetailSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class, 'jenis_surat');
    }

    public function detail_surat()
    {
        return $this->hasMany(DetailSurat::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
