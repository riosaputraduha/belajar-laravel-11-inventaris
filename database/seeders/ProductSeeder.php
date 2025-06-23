<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ["name" => "Laptop ASUS", "description" => "Laptop ASUS ROG", "sku" => "ASUS123", "price" => 15000000, "stock" => 10, "category_id" => 1],
            ["name" => "Meja Kantor", "description" => "Meja kerja kayu", "sku" => "FUR001", "price" => 500000, "stock" => 20, "category_id" => 2],
            ["name" => "Pulpen", "description" => "Pulpen hitam", "sku" => "ATK100", "price" => 5000, "stock" => 200, "category_id" => 3],
            ["name" => "Sapu Lantai", "description" => "Sapu plastik", "sku" => "PK001", "price" => 15000, "stock" => 30, "category_id" => 4],
            ["name" => "Motor Honda", "description" => "Honda Beat", "sku" => "KND001", "price" => 17000000, "stock" => 5, "category_id" => 5],
            ["name" => "Wajan Stainless", "description" => "Wajan anti lengket", "sku" => "DPR001", "price" => 75000, "stock" => 15, "category_id" => 6],
            ["name" => "Tabung Pemadam Api", "description" => "Alat pemadam api ringan", "sku" => "ALKS01", "price" => 300000, "stock" => 8, "category_id" => 7],
            ["name" => "Mouse Logitech", "description" => "Mouse wireless", "sku" => "PKOMP01", "price" => 200000, "stock" => 25, "category_id" => 8],
            ["name" => "Lemari Arsip", "description" => "Lemari besi arsip", "sku" => "DP001", "price" => 800000, "stock" => 7, "category_id" => 9],
            ["name" => "Bor Listrik", "description" => "Bor listrik daya tinggi", "sku" => "PP001", "price" => 650000, "stock" => 12, "category_id" => 10],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
