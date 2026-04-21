<?php

// --- LINEAR SEARCH ---

// Kasus 1: Absensi Kelas
function cari_absensi($daftar, $target) {
    for ($i = 0; $i < count($daftar); $i++) {
        if ($daftar[$i] == $target) return $i;
    }
    return -1;
}

$siswa = ["Budi", "Siti", "Rian", "Dewi"];
$h1 = cari_absensi($siswa, "Rian");
echo "Kasus 1: Rian di indeks $h1\n";

// Kasus 2: Lost and Found
function cari_barang($tumpukan, $target) {
    for ($i = 0; $i < count($tumpukan); $i++) {
        if ($tumpukan[$i] == $target) return $i;
    }
    return -1;
}

$barang = ["Dompet", "Payung", "Kunci Motor", "Botol Minum"];
$h2 = cari_barang($barang, "Kunci Motor");
echo "Kasus 2: Kunci Motor di indeks $h2\n";


// --- BINARY SEARCH ---

// Kasus 3: Buku Perpustakaan
function cari_buku($rak, $target) {
    $low = 0; $high = count($rak) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($rak[$mid] == $target) return $mid;
        if ($rak[$mid] < $target) $low = $mid + 1;
        else $high = $mid - 1;
    }
    return -1;
}

$nomor_seri = [101, 103, 105, 110, 120];
$h3 = cari_buku($nomor_seri, 105);
echo "Kasus 3: Buku 105 di indeks $h3\n";

// Kasus 4: Ranking Tryout (Terurut besar ke kecil)
function cari_ranking($skor_list, $target) {
    $low = 0; $high = count($skor_list) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($skor_list[$mid] == $target) return $mid;
        if ($skor_list[$mid] < $target) $high = $mid - 1;
        else $low = $mid + 1;
    }
    return -1;
}

$skor = [950, 900, 890, 850, 800];
$h4 = cari_ranking($skor, 890);
echo "Kasus 4: Skor 890 di indeks $h4\n";

// Kasus 5: Kamus Istilah
function cari_kamus($kamus, $target) {
    $low = 0; $high = count($kamus) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($kamus[$mid] == $target) return $mid;
        if ($kamus[$mid] < $target) $low = $mid + 1;
        else $high = $mid - 1;
    }
    return -1;
}

$istilah = ["AI", "Algorithm", "Big Data", "Cloud"];
$h5 = cari_kamus($istilah, "Algorithm");
echo "Kasus 5: Algorithm di indeks $h5\n";

?>
