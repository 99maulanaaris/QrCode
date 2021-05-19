<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class);
    }

    public function formatDate()
    {
        return Carbon::parse($this->attributes['waktuCheckin'])->translatedFormat('l, d F Y');
    }
}
