<?php

namespace App\Models;

use App\Models\Surat;
use App\Models\InputFormSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisSurat extends Model
{
    use HasFactory;
    public function surats()
    {
        return $this->hasMany(Surat::class, 'jenisSurat_id');
    }
    public function formInput()
    {
        return $this->hasMany(InputFormSurat::class, 'jenisSurat_id');
    }
}
