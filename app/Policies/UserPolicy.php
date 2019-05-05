<?php

namespace App\Policies;

// use App\Model\user\User;
// use App\User;
// use Illuminate\Auth\Access\HandlesAuthorization;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
    
        return $this->getPermission($user,4);
    }

    
    public function update(admin $user)
    {
        return $this->getPermission($user,5);
    }

    
    public function delete(admin $user)
    {
         return $this->getPermission($user,6);
    }


 protected function getPermission($user,$p_id)
    {
         foreach ($user->roles as $role) {
        foreach ($role->permissions as $permission) {
               if($permission->id==$p_id)
               {
                return true;

               }

        }       
      }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete(admin $user)
    {
        //
    }
}
