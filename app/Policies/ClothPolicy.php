<?php

namespace App\Policies;

use App\User;
use App\Cloth;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClothPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return $user->email == 'nikolas-ja@meta.ua';
    }

    /**
     * Determine whether the user can view the cloth.
     *
     * @param  \App\User  $user
     * @param  \App\Cloth  $cloth
     * @return mixed
     */
    public function view(User $user, Cloth $cloth)
    {
        //
    }

    /**
     * Determine whether the user can create cloths.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the cloth.
     *
     * @param  \App\User  $user
     * @param  \App\Cloth  $cloth
     * @return mixed
     */
    public function update(User $user, Cloth $cloth)
    {
        //
    }

    /**
     * Determine whether the user can delete the cloth.
     *
     * @param  \App\User  $user
     * @param  \App\Cloth  $cloth
     * @return mixed
     */
    public function delete(User $user, Cloth $cloth)
    {
        //
    }
}
