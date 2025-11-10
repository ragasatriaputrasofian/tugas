<?php

<<<<<<< HEAD
class LuasLingkaran {

    public const phi = 3.14;
    public int $jari;
=======
namespace App\Math;

class LuasLingkaran {

    public const phi = 3.14;
    protected int $jari;
    
    public function __construct($isiJari = 1) {
        $this->jari = $isiJari; //10
    }
>>>>>>> 3cb0a3e (first commit)

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }
<<<<<<< HEAD
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

LuasLingkaran::testing(); //panggil static method
=======

    public function __destruct() {
        echo "<br/>";
        echo "udah ah cape";
    }
}
>>>>>>> 3cb0a3e (first commit)
