<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bodega;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Dispositivo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        //Bodegas
        $bodegas = [
            'PcFactory',
            'SPDigital',
            'Paris',
            'La Polar',
        ];

        foreach ($bodegas as $bodega) {
            Bodega::create([
                'name' => $bodega,
            ]);
        }

        //Marcas
        $marcas = [
            'Sony',
            'Steam',
            'Samsung',
            'LG',
        ];

        foreach ($marcas as $marca) {
            Marca::create([
                'name' => $marca,
            ]);
        }

        //Modelos
        $modelos = [
            ['PlayStation 5', 1], //Consola
            ['WH-CH720N', 1], //Audifono
            ['Xperia 1 III', 1], //Celular
            ['Steam Deck', 2], //Consola
            ['Steam Controller', 2], //Mando
            ['Steam Deck Docking Station', 2],
            ['S23 Ultra', 3], //Celular
            ['Odyssey G5', 3], //Monitor
            ['WA19T6260BV/ZS', 3], //Lavadora
            ['OLED48C3PSA', 4], //Smart-TV
            ['UltraGear 24GN60R-B', 4], //Monitor
            ['GS51MPP', 4], //Refriguerador
        ];

        foreach ($modelos as $modelo) {
            Modelo::create([
                'name' => $modelo[0],
                'id_marca' => $modelo[1]
            ]);
        }

        //Dispositivos
        $dispositivos = [
            ['Consola', 1, 1, 1], //Consola
            ['Consola', 1, 2, 1], //Consola
            ['Consola', 1, 3, 1], //Consola
            ['Audifonos', 1, 1, 2], //Audifono
            ['Audifonos', 1, 4, 2], //Audifono
            ['Celular', 1, 2, 3], //Celular
            ['Celular', 1, 4, 3], //Celular
            ['Celular', 1, 3, 3], //Celular
            ['Consola', 2, 1, 4], //Consola
            ['Consola', 2, 3, 4], //Consola
            ['Mando', 2, 2, 5], //Mando
            ['Dock', 2, 1, 6],
            ['Dock', 2, 3, 6],
            ['Celular', 3, 2, 7], //Celular
            ['Celular', 3, 4, 7], //Celular
            ['Monitor', 3, 4, 8], //Monitor
            ['Lavadora', 3, 1, 9], //Lavadora
            ['Lavadora', 3, 2, 9], //Lavadora
            ['Lavadora', 3, 3, 9], //Lavadora
            ['Lavadora', 3, 4, 9], //Lavadora
            ['Televisor', 4, 1, 10], //Smart-TV
            ['Televisor', 4, 4, 10], //Smart-TV
            ['Monitor', 4, 3, 11], //Monitor
            ['Refrigerador', 4, 2, 12], //Refriguerador
        ];

        foreach ($dispositivos as $dispositivo) {
            Dispositivo::create([
                'name' => $dispositivo[0],
                'id_marca' => $dispositivo[1],
                'id_bodega' => $dispositivo[2],
                'id_modelo' => $dispositivo[3]
            ]);
        }
    }
}
