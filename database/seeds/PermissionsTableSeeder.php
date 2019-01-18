<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PERMISOS DE USUARIOS
        Permission::create([
            'name' => 'Listar Usuarios',
            'slug' => 'users.index',
            'description' => 'Permite listar todos los usuarios del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Usuarios',
            'slug' => 'users.create',
            'description' => 'Permite crear usuarios en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Usuario',
            'slug' => 'users.show',
            'description' => 'Permite ver la información de un usuario'
        ]);
        
        Permission::create([
            'name' => 'Editar Usuario',
            'slug' => 'users.edit',
            'description' => 'Permite editar usuarios en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description' => 'Permite eliminar usuarios en el sistema'
        ]);

        // PERMISOS DE ROLES
        Permission::create([
            'name' => 'Listar Roles',
            'slug' => 'roles.index',
            'description' => 'Permite listar todos los roles del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Roles',
            'slug' => 'roles.create',
            'description' => 'Permite crear roles en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Rol',
            'slug' => 'roles.show',
            'description' => 'Permite ver la información de un usuario'
        ]);
        
        Permission::create([
            'name' => 'Editar Rol',
            'slug' => 'roles.edit',
            'description' => 'Permite editar roles en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description' => 'Permite eliminar roles en el sistema'
        ]);

        // PERMISOS DE PLANTAS
        Permission::create([
            'name' => 'Listar Plantas',
            'slug' => 'plants.index',
            'description' => 'Permite listar todos los plantas del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Plantas',
            'slug' => 'plants.create',
            'description' => 'Permite crear plantas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Planta',
            'slug' => 'plants.show',
            'description' => 'Permite ver la información de una planta'
        ]);
        
        Permission::create([
            'name' => 'Editar Planta',
            'slug' => 'plants.edit',
            'description' => 'Permite editar plantas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar PLanta',
            'slug' => 'plants.destroy',
            'description' => 'Permite eliminar plantas en el sistema'
        ]);
    }
}
