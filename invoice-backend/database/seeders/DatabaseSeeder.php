<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use App\Models\Counter;
use App\Models\Product;
use App\Models\Invoice;
use App\Models\InvoiceItem;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Counter::factory(1)->create();
        Product::factory(10)->create();
        Customer::factory(20)->create();
        Invoice::factory(10)->create();
        InvoiceItem::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
