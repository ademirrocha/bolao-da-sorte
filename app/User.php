<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Permissoes\Permission;
use App\Models\Permissoes\Role;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){

        return $this->belongsToMany(Role::class);

    }


    public function hasPermission(Permission $permission){

         return $this->hasAnyRoles($permission->roles);


    }


    public function hasAnyRoles($roles){

       
        if ( is_array($roles) || is_object($roles)  ){
            foreach ($roles as $role) {

                return $this->hasAnyRoles($role->nome);
            }
        }

        return $this->roles->contains('nome', $roles);
        
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'cpf', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
