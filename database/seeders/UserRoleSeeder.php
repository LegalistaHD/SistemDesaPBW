<?php

namespace Database\Seeders;

use App\Models\PermissionModel;
use App\Models\RoleHasPermissionModel;
use App\Models\RoleModel;
use \App\Models\User;
use App\Models\UserHasRoleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRoleSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
            //User
            User::factory()->create(array_merge([
                'email' => 'raihan@gmail.com',
                'name' => 'Raihan',
                'phone' => '082145149626',
                'role_id' => '1',
            ], $default_user_value));
    
            User::factory()->create(array_merge([
                'email' => 'bisma@gmail.com',
                'name' => 'Bisma',
                'phone' => '082145149636',
                'role_id' => '3',
            ], $default_user_value));

            User::factory()->create(array_merge([
                'email' => 'lanang@gmail.com',
                'name' => 'lanang',
                'phone' => '082145149616',
                'role_id' => '8',
            ], $default_user_value));
            
            User::factory()->create(array_merge([
                'email' => 'ayuk@gmail.com',
                'name' => 'ayuk',
                'phone' => '081939197582',
                'role_id' => '2',
            ], $default_user_value));

            User::factory()->create(array_merge([
                'email' => 'ana@gmail.com',
                'name' => 'ana',
                'phone' => '081939197583',
                'role_id' => '4',
            ], $default_user_value));


            User::factory()->create(array_merge([
                'email' => 'juliana@gmail.com',
                'name' => 'juliana',
                'phone' => '081939197581',
                'role_id' => '3',
            ], $default_user_value));

            //Role
            RoleModel::create(['name' => 'Admin']);
            RoleModel::create(['name' => 'Operator']);
            RoleModel::create(['name' => 'Kepala Desa']);
            RoleModel::create(['name' => 'Sekretaris Desa']);
            RoleModel::create(['name' => 'Kepala Bidang']);
            RoleModel::create(['name' => 'Anggota Bidang']);
            RoleModel::create(['name' => 'Kepala Dusun']);
            RoleModel::create(['name' => 'Pengguna']);
            
            

            // //Permission
            PermissionModel::create(['name' => 'Dashboard', 'slug' => 'Dashboard', 'groupby' => '0']);
            PermissionModel::create(['name' => 'Users', 'slug' => 'Users', 'groupby' => '1']);
            PermissionModel::create(['name' => 'Add Users', 'slug' => 'Add Users', 'groupby' => '1']);
            PermissionModel::create(['name' => 'Edit Users', 'slug' => 'Edit Users', 'groupby' => '1']);
            PermissionModel::create(['name' => 'Delete Users', 'slug' => 'Delete Users', 'groupby' => '1']);
            PermissionModel::create(['name' => 'Roles', 'slug' => 'Roles', 'groupby' => '2']);
            PermissionModel::create(['name' => 'Add Roles', 'slug' => 'Add Roles', 'groupby' => '2']);
            PermissionModel::create(['name' => 'Edit Roles', 'slug' => 'Edit Roles', 'groupby' => '2']);
            PermissionModel::create(['name' => 'Delete Roles', 'slug' => 'Delete Roles', 'groupby' => '2']);
            PermissionModel::create(['name' => 'Surat', 'slug' => 'Surat', 'groupby' => '3']);
            PermissionModel::create(['name' => 'Add Surat', 'slug' => 'Add Surat', 'groupby' => '3']);
            PermissionModel::create(['name' => 'Edit Surat', 'slug' => 'Edit Surat', 'groupby' => '3']);
            PermissionModel::create(['name' => 'Delete Surat', 'slug' => 'Delete Surat', 'groupby' => '3']);
            PermissionModel::create(['name' => 'Settings', 'slug' => 'Settings', 'groupby' => '4']);
            PermissionModel::create(['name' => 'Surat Eksternal', 'slug' => 'Surat Eksternal', 'groupby' => '5']);
            PermissionModel::create(['name' => 'Add Surat Eksternal', 'slug' => 'Add Surat Eksternal', 'groupby' => '5']);
            PermissionModel::create(['name' => 'Edit Surat Eksternal', 'slug' => 'Edit Surat Eksternal', 'groupby' => '5']);
            PermissionModel::create(['name' => 'Delete Surat Eksternal', 'slug' => 'Delete Surat Eksternal', 'groupby' => '5']);
            PermissionModel::create(['name' => 'Disposisi', 'slug' => 'Disposisi', 'groupby' => '6']);
            PermissionModel::create(['name' => 'Add Disposisi', 'slug' => 'Add Disposisi', 'groupby' => '6']);
            PermissionModel::create(['name' => 'Edit Disposisi', 'slug' => 'Edit Disposisi', 'groupby' => '6']);
            PermissionModel::create(['name' => 'Delete Disposisi', 'slug' => 'Delete Disposisi', 'groupby' => '6']);
            PermissionModel::create(['name' => 'Validasi Operator', 'slug' => 'Validasi Operator', 'groupby' => '7']);
            PermissionModel::create(['name' => 'Validasi Sekdes', 'slug' => 'Validasi Sekdes', 'groupby' => '8']);
            
            // RoleHasPermission
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '2']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '3']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '4']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '5']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '6']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '7']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '8']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '9']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '11']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '13']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '14']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '15']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '16']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '17']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '18']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '19']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '20']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '21']);
            RoleHasPermissionModel::create(['role_id' => '1', 'permission_id' => '22']);
            
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '11']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '13']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '14']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '15']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '16']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '17']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '18']);
            RoleHasPermissionModel::create(['role_id' => '2', 'permission_id' => '23']);

            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '11']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '13']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '14']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '19']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '20']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '21']);
            RoleHasPermissionModel::create(['role_id' => '3', 'permission_id' => '22']);
            
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '11']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '13']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '14']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '19']);
            // RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '20']);
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '21']);
            // RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '22']);4
            RoleHasPermissionModel::create(['role_id' => '4', 'permission_id' => '24']);

            RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '14']);
            RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '19']);
            // RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '20']);
            RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '21']);
            // RoleHasPermissionModel::create(['role_id' => '5', 'permission_id' => '22']);

            RoleHasPermissionModel::create(['role_id' => '6', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '6', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '6', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '6', 'permission_id' => '14']);

            RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '14']);
            RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '19']);
            // RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '20']);
            RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '21']);
            // RoleHasPermissionModel::create(['role_id' => '7', 'permission_id' => '22']);

            //User biasa
            RoleHasPermissionModel::create(['role_id' => '8', 'permission_id' => '1']);
            RoleHasPermissionModel::create(['role_id' => '8', 'permission_id' => '10']);
            RoleHasPermissionModel::create(['role_id' => '8', 'permission_id' => '11']);
            RoleHasPermissionModel::create(['role_id' => '8', 'permission_id' => '12']);
            RoleHasPermissionModel::create(['role_id' => '8', 'permission_id' => '13']);
            RoleHasPermissionModel::create(['role_id' => '8', 'permission_id' => '14']);

            
            // UserHasRole
            UserHasRoleModel::create(['user_id' => '1', 'role_id' => '1']);
            UserHasRoleModel::create(['user_id' => '2', 'role_id' => '3']);
            UserHasRoleModel::create(['user_id' => '3', 'role_id' => '8']);
        
    }
}
