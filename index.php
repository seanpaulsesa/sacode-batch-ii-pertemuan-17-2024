<?php


class Mobil {

// porperti
    public $merk;
    public $model;
    public $tahun;
    public $warna;


    // Method
    public function start()
    {
        echo 'Mobil dinyalakan';
    }

    public function cek($nama, $ket)
    {
        echo 'merek :' . $this->merk. '<br>';
        echo 'model :' . $this->model. '<br>';
        echo 'tahun :' . $this->tahun. '<br>';
        echo 'warna :' . $this->warna. '<br>';
        echo 'keterangan :'. $ket.'<br>';
    }

    public function stop()
    {
        echo 'Mobil dimatikan';
    }
}


class kendaraan extends Mobil {
    public $jenis;
    public function bergerak()
    {
        echo 'kendaraan sedang bergerak';
    }
}

// objek
$mobil = new Mobil();
$kendaraan = new kendaraan();
$mobil->merk = 'Avanza';
$mobil->model = 'nova';
$mobil->tahun = '2023';
$mobil->warna = 'putih';


// Panggil method
$ket =' Lorem15.';

// Panggil method

$mobil->cek('samuel',$ket);
$kendaraan->merk = 'BMW';
$kendaraan->model = 'INOVA';
$kendaraan->tahun = '2023';
$kendaraan->warna = 'Putih';
$kendaraan->cek('sam', '');

?>