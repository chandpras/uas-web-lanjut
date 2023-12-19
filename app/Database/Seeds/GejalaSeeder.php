<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $gejalaData = [
            ['kode_gejala' => 'T1', 'gejala' => 'Penglihatan terasa kabur'],
            ['kode_gejala' => 'T2', 'gejala' => 'Mata berair'],
            ['kode_gejala' => 'T3', 'gejala' => 'Mata bengkak'],
            ['kode_gejala' => 'T4', 'gejala' => 'Mata terasa perih'],
            ['kode_gejala' => 'T5', 'gejala' => 'Mata terasa ada yang mengganjal'],
            ['kode_gejala' => 'T6', 'gejala' => 'Penglihatan silau'],
            ['kode_gejala' => 'T7', 'gejala' => 'Terlihat lingkaran cahaya'],
            ['kode_gejala' => 'T8', 'gejala' => 'Penglihatan objek ganda'],
            ['kode_gejala' => 'T9', 'gejala' => 'Mata berwarna merah'],
            ['kode_gejala' => 'T10', 'gejala' => 'Mata terasa gatal'],
            ['kode_gejala' => 'T11', 'gejala' => 'Mata terasa panas'],
            ['kode_gejala' => 'T12', 'gejala' => 'Sakit kepala'],
            ['kode_gejala' => 'T13', 'gejala' => 'Mata terasa sakit'],
            ['kode_gejala' => 'T14', 'gejala' => 'Mata meradang'],
            ['kode_gejala' => 'T15', 'gejala' => 'Mata nyeri hebat'],
            ['kode_gejala' => 'T16', 'gejala' => 'Mata terasa nyeri'],
            ['kode_gejala' => 'T17', 'gejala' => 'Kelainan pada pupil mata'],
            ['kode_gejala' => 'T18', 'gejala' => 'Mata lelah'],
            ['kode_gejala' => 'T19', 'gejala' => 'Sering mengedipkan mata'],
            ['kode_gejala' => 'T20', 'gejala' => 'Peka terhadap cahaya'],
            ['kode_gejala' => 'T21', 'gejala' => 'Penglihatan dekat terasa kabur'],
            ['kode_gejala' => 'T22', 'gejala' => 'Tekanan bola mata meningkat'],
            ['kode_gejala' => 'T23', 'gejala' => 'Penglihatan objek jauh kurang terlihat jelas'],
            ['kode_gejala' => 'T24', 'gejala' => 'Lemak menutupi kornea'],
            ['kode_gejala' => 'T25', 'gejala' => 'Menyipitkan mata untuk melihat benda yang dekat'],
            ['kode_gejala' => 'T26', 'gejala' => 'Sumber cahaya akan berwarna pelangi jika melihat cahaya yang terang'],
            ['kode_gejala' => 'T27', 'gejala' => 'Mata tegang'],
            ['kode_gejala' => 'T28', 'gejala' => 'Terlihat bayangan garis hitam'],
        ];

        $this->db->table('gejala')->insertBatch($gejalaData);
    }
}
