<?php

use Illuminate\Database\Seeder;

use App\Models\Permissoes\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        		'id' => 1,
            	'nome' => 'super_admin',
                'label' => 'Super Administrador',
                
            ]);

        Role::create([
        		'id' => 2,
            	'nome' => 'admin',
                'label' => 'Administrador',
            ]);

        Role::create([
        		'id' => 3,
            	'nome' => 'usuario',
                'label' => 'Usuário do Sistema',
            ]);

        Role::create([
                'id' => 4,
                'nome' => 'unauthorized',
                'label' => 'Usuários Não Autorizados',
            ]);


    }
}
