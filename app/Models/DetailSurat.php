<?php

namespace App\Models;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailSurat extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function surat()
    {
        return $this->belongsTo(Surat::class, 'id');
    }
}
