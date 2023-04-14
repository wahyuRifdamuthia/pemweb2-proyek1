<html>
    <head>
        <title>Balok</title>
    </head>
    <body>
        <div class="container">
            <form method="post">
                <p><b>Panjang: </b></p>
                    <input type="angka" nama="panjang"> <br/>
                <p><b>Lebar: </b></p>
                    <input type="angka" nama="lebar"> <br/>
                <p><b>Tinggi: </b></p>
                    <input type="angka" nama="tinggi"> <br/><br/>
                   
                <input type=submit class="btn btn-primary" name="hitung" value="Hitung">
        </div>
            </form>

        <?php

    class hitung
          {  public $panjang, $lebar, $tinggi;
          
            if(isset($_POST['hitung'])) {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $tinggi = $_POST['tinggi'];
                    $phi = 22/7;
                    $volume = $panjang * $lebar * $tinggi;
                    
                    return "$this->nama Hasil Perhitungan Volume Balok Adalah",$volume;
            }
        }
        

        $objekhitung = new Hitung;
            echo $objekhitung->Hitung
        ?>

    </body>
</html>
