<html>
    <body>
        <form name="form" action="" method="post">
            <label>Masukkan Jari-Jari Bola : </label><input type="Angka" name="jari"/>
                <input type=submit value="submit">
        </form>

<?php
class Bola
    {  public $jari;
    }
        if(isset($_POST['jari'])){
        $nilai=$_POST['jari'];

        echo "volume Bola :". 4/3*22/7*$nilai*$nilai*$nilai;
        echo "</br>";
        echo "luas permukaan bola :". 4*22/7*$nilai*$nilai;
        }
?>
    </body>
</html>