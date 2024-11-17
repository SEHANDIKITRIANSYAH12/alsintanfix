<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            EquipmentSeeder::class,
            FarmerSeeder::class,
            UsageSeeder::class,
            // Add other seeders here if needed
        ]);

        // Create a default user
        $user = User::factory()->create([
            'name' => 'John',
            'last_name' => 'Doe',
            'password' => 'password',
            'email' => 'test@example.com',
        ]);

        // Assign the 'admin' role to the user
        $adminRole = Role::where('name', 'admin')->first();
        if ($adminRole) {
            $user->assignRole($adminRole);
        }
    }
}
