<?php

namespace App\Policies;

//use App\Model\user\User;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function view(admin $user)
    {
        //
    }
    public function create(admin $user)
    {
    
        return $this->getPermission($user,1);
    }

    
    public function update(admin $user)
    {
        return $this->getPermission($user,2);
    }

    
    public function delete(admin $user)
    {
         return $this->getPermission($user,3);
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
     * Determine whether the user can restore the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function forceDelete(admin $user)
    {
        //
    }
}
