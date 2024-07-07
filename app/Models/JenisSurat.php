<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\InputFormSurat;

class JenisSurat extends Model
{
    use HasFactory;
    public function surats()
    {
        return $this->hasMany(Surat::class, 'jenis_surat_id');
    }
    public function formInput()
    {
        return $this->hasMany(InputFormSurat::class, 'jenis_surat_id');
    }
}
