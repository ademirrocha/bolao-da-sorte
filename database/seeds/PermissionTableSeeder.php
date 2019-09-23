<?php

use Illuminate\Database\Seeder;


use App\Models\Permissoes\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




        ################################ Permissões Para Users  ##########################################

        Permission::create(['nome' => 'update_user', 'label' => 'Editar o Próprio Usuário', ]);

        Permission::create(['nome' => 'update_users', 'label' => 'Editar Todos os Usuário', ]);

        Permission::create(['nome' => 'view_user', 'label' => 'Visualizar Usuário', ]);

        Permission::create(['nome' => 'delete_user', 'label' => 'Deletar Usuário', ]);

        Permission::create(['nome' => 'confirmar_user', 'label' => 'Confirmar Usuário',]);



       
    }
}
