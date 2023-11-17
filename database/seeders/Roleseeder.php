<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $role1= Role::create(['name' =>'admin']);
       $role2= Role::create(['name' =>'usuario']);

       Permission::create(['name' =>'inicio'])->syncRoles([$role1, $role2]);

       Permission::create(['name' =>'usuario.index'])->syncRoles([$role1]);
       Permission::create(['name' =>'usuario.create'])->syncRoles([$role1]);
       Permission::create(['name' =>'usuario.edit'])->syncRoles([$role1]);
       Permission::create(['name' =>'usuario.destroy'])->syncRoles([$role1]);

       Permission::create(['name' =>'citas.index'])->syncRoles([$role1, $role2]);
       Permission::create(['name' =>'citas.create'])->syncRoles([$role1, $role2]);
       Permission::create(['name' =>'citas.edit'])->syncRoles([$role1, $role2]);
       Permission::create(['name' =>'citas.destroy'])->syncRoles([$role1]);

       Permission::create(['name' =>'inventario.index'])->syncRoles([$role1]);
       Permission::create(['name' =>'inventario.create'])->syncRoles([$role1]);
       Permission::create(['name' =>'inventario.edit'])->syncRoles([$role1]);
       Permission::create(['name' =>'inventario.destroy'])->syncRoles([$role1]);
    }
}
