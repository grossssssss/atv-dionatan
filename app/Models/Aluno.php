<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'curso',
        'curso_id',
        'user_id',
    ];

    public function cursoRelacionado(): BelongsTo
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}