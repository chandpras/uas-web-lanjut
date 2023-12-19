<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    public function run()
    {
        $penyakitData = [
            ['kode_penyakit' => 'M1', 'jenis_penyakit' => 'Katarak'],
            ['kode_penyakit' => 'M2', 'jenis_penyakit' => 'Dry eye (mata kering)'],
            ['kode_penyakit' => 'M3', 'jenis_penyakit' => 'Glaukoma'],
            ['kode_penyakit' => 'M4', 'jenis_penyakit' => 'Keratitis'],
            ['kode_penyakit' => 'M5', 'jenis_penyakit' => 'Myopia'],
            ['kode_penyakit' => 'M6', 'jenis_penyakit' => 'Pterygium'],
            ['kode_penyakit' => 'M7', 'jenis_penyakit' => 'hypermetropi'],
            ['kode_penyakit' => 'M8', 'jenis_penyakit' => 'Astigmatisma'],
        ];

        $this->db->table('penyakit')->insertBatch($penyakitData);
    }
}
