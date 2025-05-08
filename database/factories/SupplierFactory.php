<?php

namespace Database\Factories;

use App\Models\Supplier; // Pastikan mengimpor Model Supplier
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash; // Contoh jika ada kolom password
use Illuminate\Support\Str; // Contoh jika butuh string helper

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * The name of the corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class; // Pastikan menunjuk ke model Supplier

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Gunakan $this->faker untuk menghasilkan data dummy
            'nama_supplier' => $this->faker->company(), // Nama perusahaan dummy
            'alamat' => $this->faker->address(), // Alamat dummy
            'telepon' => $this->faker->phoneNumber(), // Nomor telepon dummy
            'email' => $this->faker->unique()->safeEmail(), // Alamat email unik dummy
            // 'created_at' dan 'updated_at' akan dibuat otomatis oleh timestamps
        ];
    }
}