<?php

namespace App\Policies;

// use App\Model\user\User;
// use App\Role;
// use Illuminate\Auth\Access\HandlesAuthorization;

use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

   

    public function view(User $user)
    {
        //
    }

    
    public function create(admin $user)
    {
    
        return $this->getPermission($user,10);
    }

    
    public function update(admin $user)
    {
        return $this->getPermission($user,11);
    }

    
    public function delete(admin $user)
    {
         return $this->getPermission($user,12);
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
   
    public function restore(admin $user)
    {
        //
    }

   
    public function forceDelete(admin $user)
    {
        //
    }
}
