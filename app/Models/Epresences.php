<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epresences extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'type',
        'is_approve',
        'waktu'
    ];
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
