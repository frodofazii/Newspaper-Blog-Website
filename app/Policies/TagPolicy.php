<?php

namespace App\Policies;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;
class TagPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tag.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tag  $tag
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create tags.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
    
        return $this->getPermission($user,13);
    }

    
    public function update(admin $user)
    {
        return $this->getPermission($user,14);
    }

    
    public function delete(admin $user)
    {
         return $this->getPermission($user,15);
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
     * Determine whether the user can restore the tag.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tag  $tag
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tag.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tag  $tag
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
