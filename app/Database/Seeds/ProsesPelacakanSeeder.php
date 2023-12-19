<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProsesPelacakanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'gejala' => 'T1, T8, T16, T28',
                'kode_penyakit' => 'M1' // Katarak
            ],
            [
                'gejala' => 'T5, T20',
                'kode_penyakit' => 'M2' // Dry eye (mata kering)
            ],
            [
                'gejala' => 'T13, T17, T22, T26',
                'kode_penyakit' => 'M3' // Glaukoma
            ],
            [
                'gejala' => 'T2, T3, T10, T11, T16',
                'kode_penyakit' => 'M4' // Keratitis
            ],
            [
                'gejala' => 'T12, T18, T19, T23',
                'kode_penyakit' => 'M5' // Myopia
            ],
            [
                'gejala' => 'T2, T9, T24',
                'kode_penyakit' => 'M6' // Pterygium
            ],
            [
                'gejala' => 'T12, T21, T25',
                'kode_penyakit' => 'M7' // Hypermetropi
            ],
            [
                'gejala' => 'T1, T27',
                'kode_penyakit' => 'M8' // Astigmatisma
            ],
        ];

        // Insert data ke dalam tabel proses_pelacakan
        $this->db->table('proses_pelacakan')->insertBatch($data);
    }
}
