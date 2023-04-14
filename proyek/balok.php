<form method="post">
                <p><b>Panjang: </b></p>
                    <input type="angka" nama="panjang"> <br/>
                <p><b>Lebar: </b></p>
                    <input type="angka" nama="lebar"> <br/>
                <p><b>Tinggi: </b></p>
                    <input type="angka" nama="tinggi"> <br/><br/>
                   
                <input type=submit name="hitung" value="Hitung">

</form>

 <?php

            if(isset($_POST['hitung'])) {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $tinggi = $_POST['tinggi'];

                   $volume = $panjang * $lebar * $tinggi;
                   $luas_permukaan = 2 * ($panjang * $lebar * $lebar * $tinggi * $panjang * $tinggi);

                   echo "Volume Balok" . $volume;
                   echo "<br>Luas Permukaan Balok" . $luas_permukaan;
            }

        ?>