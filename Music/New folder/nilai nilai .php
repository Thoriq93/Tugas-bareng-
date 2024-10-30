<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
 <left><h3> MASUKKAN NILAI </h3></left>
        <form method="POST">
        <td><input thoriq="thoriq" type="text" placeholder="Enter your name"/></br></td><td><left> 
        <td><input name="nilai1" type="text" placeholder="Enter a number" value ="<?php echo $nilai1;?>"/></br></td><td><left> 
        <td><input type="submit" name="submit" value="SUBMIT"/><br/></td></left>
        </td></left><?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1  >= 0 && $nilai1  <= 0) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = E.  <br> Keterangan = THORIQ TIDAK LULUS. ';
            } else if ($nilai1  >= 0 && $nilai1  <= 1) {
                echo 'Nilai : ' . $nilai1  . ' <br> Grade = D.  <br> Keterangan = THORIQ TIDAK LULUS. ';
            } else if ($nilai1  >= 0 && $nilai1  <= 2) {
                echo 'Nilai : ' . $nilai1  . ' <br> Grade = C.  <br> Keterangan = THORIQ LULUS. ';
            } else if ($nilai1  >= 0 && $nilai1  <=3) {
                echo 'Nilai : ' . $nilai1  . ' <br> Grade = B.  <br> Keterangan = THORIQ LULUS. ';
            } else if ($nilai1  >= 0 && $nilai1  <= 4) {
                echo 'Nilai : ' . $nilai1  . ' <br> Grade = A.  <br> Keterangan = THORIQ LULUS. ';
            } 
   
   else{
                echo 'Nilai : ' . $nilai1 . ' Jangan Suka-Suka Kau Memasukkan Nilai TU.';
            }
          ?> </td></center> 
        </form>
  </table>
    </body>
</html>
