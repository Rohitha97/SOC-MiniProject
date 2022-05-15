<?php

$csv='task\\russia_losses_equipment.csv';

$fh= fopen($csv,'r');

$data=fgetcsv ($fh, 1000, ",");
$all_record_arr = [];

while (($data = fgetcsv ( $fh, 1000, ",")) !== FALSE){
    $all_record_arr[] = $data;
}
fclose($fh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>IT2019012</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="nav co">
    <a class="nav-link active" href="index.php">Task 1</a>
    <a class="nav-link" href="losses.php">Task 2</a>
    <a class="nav-link" href="insert.php">Task 3</a>
    <a class="nav-link" href="IT2019012.php">Task 4</a>
</nav>

<div class="jumbotron text-center co">
  <h1 class="text-light">Ukraine Russia War 2022</h1>
  <h4 class="text-muted">Equipment Losses of Russians</h4>
</div>
  
<div class="container">
      <br/>
      <br/>
      <table class="table" border="1">
        <thead>
            <th>Date</th>
            <th>Day</th>
            <th>Air Craft</th>
            <th>Helicopter</th>
            <th>Tanks</th>
            <th>ARM</th>
            <th>Field Artillery</th>
            <th>MRL</th>
            <th>Fuel Tank</th>
            <th>Drone</th>
            <th>Naval Ship</th>
        </thead>
        <tbody>
            <?php foreach($all_record_arr as $rec){ ?>
                <tr>
                    <td><?=$rec[0]?></td>
                    <td><?=$rec[1]?></td>
                    <td><?=$rec[2]?></td>
                    <td><?=$rec[3]?></td>
                    <td><?=$rec[4]?></td>
                    <td><?=$rec[5]?></td>
                    <td><?=$rec[6]?></td>
                    <td><?=$rec[7]?></td>
                    <td><?=$rec[9]?></td>
                    <td><?=$rec[10]?></td>
                    <td><?=$rec[11]?></td>
                </tr>
            <?php } ?>
        </tbody>
      </table>
</div>

  <footer class="py-3 my-4">
      <div class="border-bottom pb-3 mb-3"></div>
      <h4 class="text-center"><b>SOC Mini Project - Task 02</b></h4> 
      <p class="text-center text-muted">&copy; IT2019012 - Rohitha Rathnayake</p>
  </footer>
</body>
</html>  -->
