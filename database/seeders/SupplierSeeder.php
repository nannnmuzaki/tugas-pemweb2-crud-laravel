<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier; // Pastikan mengimpor Model Supplier

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama (opsional, tergantung kebutuhan)
        // Supplier::truncate(); // Atau Supplier::query()->delete();

        // Buat 50 supplier menggunakan SupplierFactory
        Supplier::factory()->count(100)->create();

        // Anda juga bisa membuat satu atau beberapa supplier spesifik secara manual
        // Supplier::create([
        //     'nama_supplier' => 'Supplier Utama',
        //     'alamat' => 'Jl. Contoh No. 123',
        //     'telepon' => '021123456',
        //     'email' => 'utama@supplier.com',
        // ]);
    }
}