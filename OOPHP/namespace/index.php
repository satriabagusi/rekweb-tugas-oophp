<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimotor", "Shonen Jump", 30000, 100, "Komik");
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50, "Game");

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Services\User as ServicesUser;
use App\Produk\User as ProdukUser;
new ServicesUser();

echo "<hr>";

new ProdukUser();
?>