<?php

function generatePdf($gejala, $hasilDiagnosis)
{
    require_once APPPATH . 'ThirdParty/tcpdf/tcpdf.php';

    // Buat objek PDF
    $pdf = new TCPDF();

    // Set properti dokumen
    $pdf->SetCreator('Nama Anda');
    $pdf->SetAuthor('Nama Anda');
    $pdf->SetTitle('Hasil Diagnosa');
    $pdf->SetSubject('PDF Hasil Diagnosa');

    // Tambahkan halaman
    $pdf->AddPage();

    // Tambahkan konten ke PDF
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Write(10, 'Gejala: ' . implode(', ', $gejala));
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Write(10, 'Hasil Diagnosis:');
    $pdf->Ln();
    foreach ($hasilDiagnosis as $item) {
        $pdf->Write(10, '- ' . $item['jenis_penyakit']);
        $pdf->Ln();
    }

    // Simpan PDF ke file
    $pdfFilePath = FCPATH . 'assets/hasil_diagnosa.pdf';
    $pdf->Output($pdfFilePath, 'F');

    return $pdfFilePath;
}
