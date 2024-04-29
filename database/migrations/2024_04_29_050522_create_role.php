<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleArchivo = Role::create(['name' => 'archivo']);
        $roleUsuario = Role::create(['name' => 'usuario']);
        $roleAdmision = Role::create(['name' => 'admision']);

        $user = User::find(1);
        $user->assignRole($roleUsuario);

        $user = User::find(2);
        $user->assignRole($roleAdmin);


        permission = Permission::create(['name' => 'users.index'])->assignRole($roleAdmin, $roleArchivo);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};