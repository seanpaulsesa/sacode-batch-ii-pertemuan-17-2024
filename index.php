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

// objek
$mobil = new Mobil();
$mobil->merk = 'Avanza';
$mobil->model = 'nova';
$mobil->merk = '2023';
$mobil->merk = 'putih';


// Panggil method
$ket =' Lorem15'.;

// Panggil method
$mobil->cek('samuel',$ket);


?>