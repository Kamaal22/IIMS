<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run the permission seeder first
        $this->call(PermissionSeeder::class);
        
        // Run the role seeder to create roles and assign permissions
        $this->call(RoleSeeder::class);
        
        // Create admin user with admin role
        $admin = User::create([
            'fullname' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        
        // Assign admin role to admin user
        $admin->assignRole('admin');

        // seed categories table concerning the logistics of a company

        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronics and Electricals'
        ]);
        Category::create([
            'name' => 'Furniture',
            'description' => 'Furniture and Fittings'
        ]);
        Category::create([
            'name' => 'Stationary',
            'description' => 'Stationary and Office Supplies'
        ]);
        Category::create([
            'name' => 'PC',
            'description' => 'Personal Computers and Accessories'
        ]);

        User::create([
            'fullname' => 'Abdi Farah Warsame',
            'username' => 'abdifw',
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '1234567890',
            'email' => 'abdi@imt.com',
            'special_permissions' => json_encode(["create", "read", "update", "delete"])

        ]);
        User::create([
            'fullname' => "Jama' Mohamed K'naan",
            'username' => 'jama_knaan',
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '4536728958',
            'email' => 'jama77@imt.com',
            'special_permissions' => json_encode(["create", "read", "update"])

        ]);
        User::create([
            'fullname' => "Wehliye Ahmed Jama",
            'username' => 'wehliye',
            'password' => '$2y$10$3imDjc04ij27tLRQdkKvluunmz3RKXJeighE0AFUzu/sLScso4KDq',
            'phone' => '6437289348',
            'email' => 'jklacoco@gmail.com',
            'special_permissions' => json_encode(["create", "read"])
        ]);




        // // seed items table
        Item::create([
            'name' => 'EPSON L3150',
            'model' => 'EPSON L3150',
            'brand' => 'EPSON',
            'type' => 'unit',
            'serial_number' => '78193274839',
            'sku' => 'RGG0003',
            'description' => 'EPSON L3150 Printer with Scanner and Copier (Black)',
            'price' => 78,
            'quantity' => 8,
            'category' => Category::where('name', 'Electronics')->first()->id
        ]);

        Item::create([
            'name' => 'Samsung Galaxy S21',
            'model' => 'Galaxy S21',
            'brand' => 'Samsung',
            'type' => 'unit',
            'serial_number' => 'ABC123XYZ',
            'sku' => 'S21XYZ',
            'description' => 'Samsung Galaxy S21 5G Smartphone',
            'price' => 799.99,
            'quantity' => 15,
            'category' => Category::where('name', 'Electronics')->first()->id
        ]);

        Item::create([
            'name' => 'Sony 65" OLED TV',
            'model' => 'Bravia A8H',
            'brand' => 'Sony',
            'type' => 'unit',
            'serial_number' => 'OLED654321',
            'sku' => 'SONY654',
            'description' => 'Sony 65" OLED 4K Ultra HD Smart TV',
            'price' => 2499.99,
            'quantity' => 5,
            'category' => Category::where('name', 'Electronics')->first()->id
        ]);

        Item::create([
            'name' => 'Apple MacBook Pro',
            'model' => 'MacBook Pro 13-inch',
            'brand' => 'Apple',
            'type' => 'unit',
            'serial_number' => 'MBP987654',
            'sku' => 'APPLEMBP',
            'description' => 'Apple MacBook Pro with M1 Chip',
            'price' => 1299.99,
            'quantity' => 10,
            'category' => Category::where('name', 'Electronics')->first()->id
        ]);

        Item::create([
            'name' => 'Logitech MX Master 3',
            'model' => 'MX Master 3',
            'brand' => 'Logitech',
            'type' => 'unit',
            'serial_number' => 'LOGI123',
            'sku' => 'MXM3',
            'description' => 'Logitech MX Master 3 Wireless Mouse',
            'price' => 99.99,
            'quantity' => 20,
            'category' => Category::where('name', 'Electronics')->first()->id
        ]);
    }
}