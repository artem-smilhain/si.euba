<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'license_plate' => 'TOY001',
                'model' => 'Toyota Corolla',
                'capacity' => 5,
                'fuel_type' => 'Gasoline',
                'transmission_type' => 'Automatic',
                'year' => 2021,
                'mileage' => 15000,
                'rental_price' => 60.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'HON001',
                'model' => 'Honda Civic',
                'capacity' => 5,
                'fuel_type' => 'Gasoline',
                'transmission_type' => 'Manual',
                'year' => 2020,
                'mileage' => 20000,
                'rental_price' => 55.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'BMW001',
                'model' => 'BMW 3 Series',
                'capacity' => 5,
                'fuel_type' => 'Diesel',
                'transmission_type' => 'Automatic',
                'year' => 2022,
                'mileage' => 10000,
                'rental_price' => 80.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'MER001',
                'model' => 'Mercedes-Benz C-Class',
                'capacity' => 5,
                'fuel_type' => 'Gasoline',
                'transmission_type' => 'Automatic',
                'year' => 2021,
                'mileage' => 12000,
                'rental_price' => 90.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'AUD001',
                'model' => 'Audi A4',
                'capacity' => 5,
                'fuel_type' => 'Gasoline',
                'transmission_type' => 'Automatic',
                'year' => 2022,
                'mileage' => 9000,
                'rental_price' => 85.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'VW001',
                'model' => 'Volkswagen Passat',
                'capacity' => 5,
                'fuel_type' => 'Diesel',
                'transmission_type' => 'Automatic',
                'year' => 2021,
                'mileage' => 18000,
                'rental_price' => 70.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'LADA2101',
                'model' => 'Lada 2101 (Копейка)',
                'capacity' => 4,
                'fuel_type' => 'Gasoline',
                'transmission_type' => 'Manual',
                'year' => 1975,
                'mileage' => 200000,
                'rental_price' => 20.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'license_plate' => 'LADA2106',
                'model' => 'Lada 2106',
                'capacity' => 4,
                'fuel_type' => 'Gasoline',
                'transmission_type' => 'Manual',
                'year' => 1980,
                'mileage' => 180000,
                'rental_price' => 18.00,
                'status' => 'Available',
                'photo_path' => 'images/vehicle8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
