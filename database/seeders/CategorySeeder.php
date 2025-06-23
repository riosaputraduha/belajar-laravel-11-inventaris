<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "Elektronik",
            "Furniture",
            "Alat Tulis Kantor",
            "Peralatan Kebersihan",
            "Kendaraan",
            "Peralatan Dapur",
            "Alat Keselamatan",
            "Perlengkapan Komputer",
            "Dokumen Penting",
            "Peralatan Proyek"
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                "name" => $categoryName,
            ]);
        }
    }
}
