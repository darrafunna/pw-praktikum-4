<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
<?php

abstract class Karyawan {
    public $nomor;
    public $nama;
    public $TTL;
    public $jenisKelamin;
    public $level;

    public function __construct($nomor, $nama, $TTL, $jenisKelamin, $level){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->TTL = $TTL;
        $this->jenisKelamin = $jenisKelamin;
        $this->level = $level;
    }

    abstract public function gaji() : int;

}

class Fulltime extends Karyawan{
    public $status = "Fulltime";
    public function gaji() : int {
        if($this->level == 'Junior'){
            return 2000000;
        }else if($this->level == 'Amateur'){
            return 3500000;
        }else if($this->level == 'Senior'){
            return 3500000;
        }else{
            echo "levelnya apa?";
        }
    }

}

class Parttime extends Karyawan{
    public $status = "Parttime";
    public function gaji() : int {
        if($this->level == 'Junior'){
            return 2000000 * 0.5;
        }else if($this->level== 'Amateur'){
            return 3500000 * 0.5;
        }else if($this->level == 'Senior'){
            return 3500000 * 0.5;
        }else{
            echo "levelnya apa?";
        }
    }

}


$karyawan1 = new Fulltime(1, 'Mutia Ramadhani', 'Jakarta, 25 Januari 1995', 'Perempuan', 'Senior');
$array1 = [$karyawan1->nomor, $karyawan1->nama, $karyawan1->TTL, $karyawan1->jenisKelamin, $karyawan1->level,$karyawan1->status, $karyawan1->gaji()];
$karyawan2 = new Parttime(2, 'Dzaki Ibadurrahman', 'Bandung, 20 April 1999', 'Laki-laki', 'Amateur');
$array2 = [$karyawan2->nomor, $karyawan2->nama, $karyawan2->TTL, $karyawan2->jenisKelamin, $karyawan2->level,$karyawan2->status, $karyawan2->gaji()];
$karyawan3 = new Fulltime(3, 'Danita Muslimah', 'Jakarta , 04 Januari 2002', 'Perempuan', 'Junior');
$array3 = [$karyawan3->nomor, $karyawan3->nama, $karyawan3->TTL, $karyawan3->jenisKelamin, $karyawan3->level,$karyawan3->status, $karyawan3->gaji()];
$karyawan4 = new Parttime(4, 'Jovenda Harahap', 'Surabaya, 15 Maret 2000', 'Laki-laki', 'Amateur');
$array4 = [$karyawan4->nomor, $karyawan4->nama, $karyawan4->TTL, $karyawan4->jenisKelamin, $karyawan4->level,$karyawan4->status, $karyawan4->gaji()];
$karyawan5 = new Fulltime(5, 'Meidita Nisrina', 'Malang, 18 Agustus 1994', 'Perempuan', 'Senior');
$array5 = [$karyawan5->nomor, $karyawan5->nama, $karyawan5->TTL, $karyawan5->jenisKelamin, $karyawan5->level,$karyawan5->status, $karyawan5->gaji()];

?>
</body>
</html>