<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }
}
