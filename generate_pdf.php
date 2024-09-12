<?php
// Cek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $email = htmlspecialchars($_POST['email']);

    // Include TCPDF library (via Composer autoload atau manual)
    require_once('vendor/autoload.php'); // Jika menggunakan Composer
    // require_once('path/to/tcpdf.php'); // Jika menggunakan instalasi manual

    // Buat instance TCPDF
    $pdf = new TCPDF();

    // Atur informasi dokumen
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Aplikasi Pembuatan PDF');
    $pdf->SetTitle('Data Pengguna');
    $pdf->SetSubject('PDF dari Formulir');

    // Tambahkan halaman
    $pdf->AddPage();

    // Atur font
    $pdf->SetFont('helvetica', '', 12);

    // Buat konten PDF
    $html = "
    <h1>Data Pengguna</h1>
    <p><strong>Nama:</strong> $nama</p>
    <p><strong>Alamat:</strong> $alamat</p>
    <p><strong>Email:</strong> $email</p>
    ";

    // Tulis konten ke PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Set nama file yang akan diunduh
    $nama_file = 'data_pengguna_' . time() . '.pdf';

    // Output PDF dan unduh file
    $pdf->Output($nama_file, 'D');
}
?>
