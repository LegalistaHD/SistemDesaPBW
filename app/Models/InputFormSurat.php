<?php

namespace App\Models;

use App\Models\JenisSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InputFormSurat extends Model
{
    use HasFactory;
    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class, 'jenisSurat_id', 'id');
    }
}
