<?php
// Fungsi (prosedur) untuk menghitung diskon berdasarkan total belanja
function hitungDiskon($totalBelanja) {
    $diskon = 0; // Default: tidak ada diskon (total belanja < Rp. 50.000)

    if ($totalBelanja >= 100000) {
        $diskon = 0.10 * $totalBelanja; // Diskon 10% untuk total belanja >= Rp. 100.000
    } elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja; // Diskon 5% untuk total belanja Rp. 50.000 - Rp. 99.999
    }

    return $diskon; // Mengembalikan nilai diskon
}

// Fungsi bantu untuk format Rupiah
function rupiah($angka) {
    return "Rp. " . number_format($angka, 0, ",", ".");
}

// Contoh penggunaan: beberapa skenario total belanja
$daftarBelanja = [120000, 75000, 30000];

foreach ($daftarBelanja as $totalBelanja) {
    $diskon = hitungDiskon($totalBelanja);       // Memanggil fungsi hitungDiskon()
    $totalBayar = $totalBelanja - $diskon;       // Total yang harus dibayar

    echo "Total belanja: " . rupiah($totalBelanja) . "<br>";
    echo "Diskon: " . rupiah($diskon) . "<br>";
    echo "Total yang harus dibayar: " . rupiah($totalBayar) . "<br><br>";
}
?>
