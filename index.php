<!DOCTYPE html>
<html>
<head>
	<title>Tes Kopnus</title>
</head>
<body>
<table border="1">
	<tr>
		<td>Nama :</td>
		<td>Suhilman</td>
	</tr>
	<tr>
		<td>Keterangan :</td>
		<td>Tes Kopnus 2022</td>
	</tr>

</table>
<?php
echo"<br>------------------------------------------------------------------------------------------------<br><b>1.Piramida</b><br>";
$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
$sum = 0;
$b=$c=$d=0;
for($a=1;$a<11;$a++){
	for ($b=10; $b >$a; $b--) {echo"&nbsp;";}
	$e = (2 * $a ) -1 ;$c=0;
	for ($d=0;$d<$e;$d++){

		$sum = $d+$a;
		if ($sum>$e){ $c = $c+1; $sum = $e - $c;}
		if ($sum>9) {$sum =($sum - 10);}
		echo $sum;
	}
	echo "<br>";
	}

echo"<br><br><br><br>";
echo"<br>--------------------------------------------------------------------------------------------<br><b>2. menentukan ganjil genak 1 - 20</b><br>";
    for($no=0;$no<=20;$no++){
        if($no % 2 == 0){
            echo "$no = ";echo "<font style='color:red;'>genap</font><br>";
        }
        else{
            echo "$no = ";echo "<font style='color:blue;'>ganjil</font><br>";
        }
    }
echo"<br><br><br><br>-----------------------------------------------------------------------------------------------";
echo"<br><b>3. bilangan prima 1-100<br>";



   for($i=0;$i<=100;$i++){ 
        $a = 0; 
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){ 
                $a++;
            }
        }
        if($a == 2){ 
         echo $i.' ';
        }
    }

echo"<br><br><br><br>";
echo"<br>-----------------------------------------------------------------------------------<br><b>4. </b>";
?>
<form method="post">
<input type="text" name = "huruf">
<input type="number" name = "kolom">
<input type="number" name = "baris">
<input type="submit" name="hasil" value="hasil">
<div>
	<?php 

$huruf = @$_POST["huruf"];
$kolom = @$_POST["kolom"];
$baris = @$_POST["baris"];
		$hasil = "";
		for($a = 0; $a<$baris; $a++){
			for($b=0; $b<$kolom; $b++){
				echo $huruf;
			}
			echo "<br>";
		}
		echo "</br></br></br> ----------------------------------------------------------- <b></b></br><b>5. Menentukan bilangan terbesar dan terkecil</b><br>";
		?>
<table border="1">
<tr>
    <th>Nama</th>
    <th>Usia</th>
</tr>
<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="db_kopnus";

    $kon = mysqli_connect($host,$user,$password,$db);

    $hasil=mysqli_query($kon,"select * from mhs");
    while ($data = mysqli_fetch_array($hasil)):
        $nilai[] = $data['nilai'];   
?>
<tr>
    <td><?php echo $data['no']?></td>
    <td><?php echo $data['nilai']?></td>
</tr>
<?php endwhile; ?>
</table>
<br>
Siswa nilai terendah : <?php echo min($nilai); ?><br>
Siswa nilai tertinggi : <?php echo max($nilai); ?><br> 
<?php
		echo "</br></br></br> ----------------------------------------------------------- <b></b></br><b>6. membalikan huruf terdepan menjadi terbelakang :</b><br>";

		$str = "HELLO";
	    for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
	    {
	        $temp = $str[$i];
	        $str[$i] = $str[$j];
	        $str[$j] = $temp;
	    }

		  
		print_r($str);
		echo "</br></br></br> ----------------------------------------------------------- <b></b></br><b>7.Hitung bilangan faktorial :</b><br>";

     
    $a = 1;
    $faktorial = $a;
    $angka=3;
 
    while($a <= $angka){
      $faktorial = $faktorial * $a;
      $a++;
    }
   
    echo "\tAngka Faktorial : ";
    echo $angka;
    echo "\n";
   
    echo "\tHasil Perhitungan Faktorial adalah : ";
    echo $faktorial;
echo "</br></br></br> ----------------------------------------------------------- <b></b></br><b>8. menentukan bilangan yang habis di bagi dengan bilangan tertentu :</b><br>";

	?>
</form>
	<form action="" method="POST">
<input type="text" name="angka" placeholder="masukkan angka">
<input type="submit" name="cari" value="CARI">
</form>
<?php
error_reporting(0);
if($_POST['cari']){
$angka = $_POST['angka'];
echo "Bilangan $angka habis jika dibagi: ";
for ($bagi = 1;$bagi <= $angka;$bagi++)
         {           
             $hasilmod = $angka % $bagi;             
             if($hasilmod == 0){
          echo $bagi;echo ",";
             }
         } 
}
echo "</br></br></br> ----------------------------------------------------------- <b></b></br><b>9. menampilkan Deret bilangan</b><br>"; ?>


	<?php
		$awal = 1;
		$akhir = 100;
		
		echo "Deret Bilangan + 4 <br>";
		echo "Dari $awal ";
		echo "Sampai $akhir ";
		echo "Adalah = </br>";
		
		$i = $awal;
		do {
			echo " $i  ";
			$i+=4;
		}while ($i <= $akhir);
		
	?>
		
						</table>
					</td>
				</tr>
			</table>

</div>
	
</body>
</html>