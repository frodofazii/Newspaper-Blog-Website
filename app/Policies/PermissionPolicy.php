<?php

namespace App\Policies;

// use App\Model\user\User;
// use App\Permission;
// use Illuminate\Auth\Access\HandlesAuthorization;


use App\Model\admin\admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    
    public function view(admin $user)
    {
        //
    }

   
   public function create(admin $user)
    {
    
        return $this->getPermission($user,7);
    }

    
    public function update(admin $user)
    {
        return $this->getPermission($user,8);
    }

    
    public function delete(admin $user)
    {
         return $this->getPermission($user,9);
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
