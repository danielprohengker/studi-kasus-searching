<?php
// Kasus 1
function cari_absensi($daftar, $target) {
    for ($i = 0; $i < count($daftar); $i++) {
        if ($daftar[$i] == $target) {
            return "Siswa bernama $target ketemu di urutan indeks $i";
        }
    }
    return "Data siswa $target tidak ada dalam daftar";
}
$siswa = ["Budi", "Siti", "Rian", "Dewi"];
echo cari_absensi($siswa, "Rian") . "\n";

// Kasus 2
function cari_barang($tumpukan, $target) {
    for ($i = 0; $i < count($tumpukan); $i++) {
        if ($tumpukan[$i] == $target) {
            return "Barang $target ditemukan di indeks $i";
        }
    }
    return "Barang $target tidak ada di tumpukan";
}
$barang = ["Dompet", "Payung", "Kunci Motor", "Botol Minum"];
echo cari_barang($barang, "Kunci Motor") . "\n";

// Kasus 3
function cari_buku($rak, $target) {
    $low = 0; $high = count($rak) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($rak[$mid] == $target) {
            return "Buku nomor seri $target ada di indeks $mid";
        }
        if ($rak[$mid] < $target) $low = $mid + 1;
        else $high = $mid - 1;
    }
    return "Buku dengan nomor seri $target nggak ketemu";
}
$nomor_seri = [101, 103, 105, 110, 120];
echo cari_buku($nomor_seri, 105) . "\n";

// Kasus 4
function cari_ranking($skor_list, $target) {
    $low = 0; $high = count($skor_list) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($skor_list[$mid] == $target) {
            return "Skor $target ditemukan pada posisi indeks $mid";
        }
        if ($skor_list[$mid] < $target) $high = $mid - 1;
        else $low = $mid + 1;
    }
    return "Skor $target tidak terdaftar";
}
$skor = [950, 900, 890, 850, 800];
echo cari_ranking($skor, 890) . "\n";

// Kasus 5
function cari_kamus($kamus, $target) {
    $low = 0; $high = count($kamus) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($kamus[$mid] == $target) {
            return "Istilah '$target' ketemu di indeks $mid";
        }
        if ($kamus[$mid] < $target) $low = $mid + 1;
        else $high = $mid - 1;
    }
    return "Istilah '$target' tidak ditemukan dalam kamus";
}
$istilah = ["AI", "Algorithm", "Big Data", "Cloud"];
echo cari_kamus($istilah, "Algorithm") . "\n";
?>
