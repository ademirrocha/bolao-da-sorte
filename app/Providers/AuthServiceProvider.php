<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

use App\User;
use App\Models\Permissoes\Permission;
use App\Models\Permissoes\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
        ///*
        $permissions = Permission::with('roles')->get();

        $roles = Role::all();

         foreach ($roles as $role) {

            $gate->define($role->nome, function(User $user) use ($role){
                 return $user->hasAnyRoles($role->nome);
            });

         }


        
        foreach ($permissions as $permission) {

            $gate->define($permission->nome, function(User $user) use ($permission){
                 return $user->hasPermission($permission);
            });

        }


        $gate->before(function(User $user, $ability){
            if($user->hasAnyRoles('super_admin'))
            return true;

        });
        
        
        
        //*/
    }
}
