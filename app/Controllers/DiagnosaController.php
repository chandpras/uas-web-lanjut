<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenyakitModel;
use App\Models\GejalaModel;
use App\Models\ProsesPelacakanModel;

class DiagnosaController extends BaseController
{
    public function index()
    {
        $gejalaModel = new GejalaModel();
        $data['gejala'] = $gejalaModel->findAll(); // Ambil data gejala dari model

        return view('diagnosa_form', $data); // Tampilkan halaman diagnosa
    }

    public function prosesDiagnosa()
    {
        $gejalaTerpilih = $this->request->getPost('gejala'); // Ambil gejala yang dipilih dari form

        // Proses Forward Chaining untuk diagnosa
        $prosesPelacakanModel = new ProsesPelacakanModel();
        $gejalaPenyakit = $prosesPelacakanModel->findAll();

        $penyakitDitemukan = [];

        foreach ($gejalaPenyakit as $aturan) {
            $gejalaPenyakitArr = explode(', ', $aturan['gejala']);

            $intersect = array_intersect($gejalaTerpilih, $gejalaPenyakitArr);

            if (count($intersect) == count($gejalaPenyakitArr)) {
                $penyakitDitemukan[] = $aturan['kode_penyakit'];
            }
        }

        if (!empty($penyakitDitemukan)) {
            $penyakitModel = new PenyakitModel();
            // Mengambil data penyakit berdasarkan kode penyakit yang ditemukan
            $data['penyakit'] = $penyakitModel->whereIn('kode_penyakit', $penyakitDitemukan)->findAll();
        } else {
            $data['penyakit'] = []; // Jika tidak ada penyakit yang ditemukan
        }

        return view('diagnosa_result', $data); // Tampilkan hasil diagnosa
    }
}
