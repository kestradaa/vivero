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

        // PERMISOS DE PERSONAL
        Permission::create([
            'name' => 'Listar Personal',
            'slug' => 'employees.index',
            'description' => 'Permite listar todo el personal del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear Personal',
            'slug' => 'employees.create',
            'description' => 'Permite crear personal en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver Personal',
            'slug' => 'employees.show',
            'description' => 'Permite ver la información del personal'
        ]);
        
        Permission::create([
            'name' => 'Editar Personal',
            'slug' => 'employees.edit',
            'description' => 'Permite editar personal en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar Personal',
            'slug' => 'employees.destroy',
            'description' => 'Permite eliminar personal en el sistema'
        ]);

        // PERMISOS DE BOLSAS
        Permission::create([
            'name' => 'Listar bolsas',
            'slug' => 'bags.index',
            'description' => 'Permite listar todos las bolsas del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear bolsas',
            'slug' => 'bags.create',
            'description' => 'Permite crear bolsas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver bolsas',
            'slug' => 'bags.show',
            'description' => 'Permite ver la información de las bolsas'
        ]);
        
        Permission::create([
            'name' => 'Editar bolsas',
            'slug' => 'bags.edit',
            'description' => 'Permite editar bolsas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar bolsas',
            'slug' => 'bags.destroy',
            'description' => 'Permite eliminar bolsas en el sistema'
        ]);

        // PERMISOS DE PERDIDAS
        Permission::create([
            'name' => 'Listar perdidas',
            'slug' => 'losses.index',
            'description' => 'Permite listar todos las perdidas del sistema'
        ]);
        
        Permission::create([
            'name' => 'Crear perdidas',
            'slug' => 'losses.create',
            'description' => 'Permite crear perdidas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Ver perdidas',
            'slug' => 'losses.show',
            'description' => 'Permite ver la información de las perdidas'
        ]);
        
        Permission::create([
            'name' => 'Editar perdidas',
            'slug' => 'losses.edit',
            'description' => 'Permite editar perdidas en el sistema'
        ]);
        
        Permission::create([
            'name' => 'Eliminar perdidas',
            'slug' => 'losses.destroy',
            'description' => 'Permite eliminar perdidas en el sistema'
        ]);
    }
}
