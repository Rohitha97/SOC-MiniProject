<?php
// db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = " ukrainerussianwar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
 if($conn === false)
    {
       die("ERROR: Could not connect. " . mysqli_connect_error());
    }

 // Insert csv data into database 
$csv='task\\russia_losses_equipment.csv';

$fh= fopen($csv,'r');

$Data=fgetcsv ($fh, 1000, ",");

while (($Data = fgetcsv ( $fh, 1000, ",")) !== FALSE){
     $sql = "INSERT INTO losses (date, day, aircraft, helucopter, tank, APC, fieldartillery, mrl, fultank, drone, navalship) VALUES ('$Data[0]','$Data[1]','$Data[2]','$Data[3]','$Data[4]','$Data[5]','$Data[6]','$Data[7]','$Data[9]','$Data[10]','$Data[11]')";
    
     $result = mysqli_query($conn, $sql);
}
     if(!isset($result))
     {
       echo "<script type=\"text/javascript\">
             alert(\"ERROR!! Can't Insert Data.\");
             window.location = \"index.php\"
             </script>";    
     }
     else {
         echo  "<script type=\"text/javascript\">
                alert(\"CSV File Data has been successfully Added to the database.\");
                window.location = \"index.php\"
                </script>";
     }

fclose($fh);

?>



