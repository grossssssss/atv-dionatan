<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Aluno $aluno): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role === User::ROLE_ADMIN;
    }

    public function update(User $user, Aluno $aluno): bool
    {
        return $user->role === User::ROLE_PROFESSOR;
    }

    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === User::ROLE_ADMIN;
    }

    public function restore(User $user, Aluno $aluno): bool
    {
        return false;
    }

    public function forceDelete(User $user, Aluno $aluno): bool
    {
        return false;
    }
}