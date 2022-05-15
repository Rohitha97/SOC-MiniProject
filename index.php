
<?php
$url1="https://restcountries.com/v3.1/alpha/fi";
$datac= json_decode(file_get_contents($url1),true);

$url2="https://restcountries.com/v3.1/alpha/in";
$datad= json_decode(file_get_contents($url2),true);

$official=$datac[0]['name']['official'];
$flag=$datac[0]['flags']['png'];
$currency=array_keys($datac[0]['currencies'])[0];
$capital=$datac[0]['capital'];
$region=$datac[0]['region'];
$subRegion=$datac[0]['subregion'];
$border=$datac[0]['borders'];
$area=$datac[0]['area'];
$population=$datac[0]['population'];

$official1=$datad[0]['name']['official'];
$flag1=$datad[0]['flags']['png'];
$currency1=array_keys($datad[0]['currencies'])[0];
$capital1=$datad[0]['capital'];
$region1=$datad[0]['region'];
$subRegion1=$datad[0]['subregion'];
$border1=$datad[0]['borders'];
$area1=$datad[0]['area'];
$population1=$datad[0]['population'];

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
  <h1 class="text-light">Rest Country Details</h1> 
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <table class="table table-border">
         <tr><th class="cen"><img src="<?php echo $flag;?>"/></th></tr>
         <tr><th class="cen"><?php echo $official;?></th></tr>
      </table>
      <table class="table">
        <tr>
            <td>Currency</td>
            <td><?php echo $currency;?></td>
            
        </tr>
        <tr>
            <td>Capital</td>
            <td><?php echo join(', ',$capital);?></td>
        </tr>
        <tr>
            <td>Region</td>
            <td><?php echo $region;?></td>
        </tr>
        <tr>
            <td>Sub Region</td>
            <td><?php echo $subRegion;?></td>
        </tr>
        <tr>
            <td>Border</td>
            <td><?php echo join(', ',$border);?></td>
        </tr>
        <tr>
            <td>Area</td>
            <td><?php echo $area;?></td>
        </tr>
        <tr>
            <td>Population</td>
            <td><?php echo $population;?></td>
        </tr>
      </table>
    </div>
    <div class="col">
    <table class="table table-border">
         <tr><th class="cen"><img src="<?php echo $flag1;?>"/></th></tr>
         <tr><th class="cen"><?php echo $official1;?></th></tr>
      </table>
    <table class="table">
        <tr>
        <td>Currency</td>
            <td><?php echo $currency1;?></td>
        </tr>
        <tr>
            <td>Capital</td>
            <td><?php echo join(', ',$capital1);?></td>
        </tr>
        <tr>
            <td>Region</td>
            <td><?php echo $region1;?></td>
        </tr>
        <tr>
            <td>Sub Region</td>
            <td><?php echo $subRegion1;?></td>
        </tr>
        <tr>
            <td>Border</td>
            <td><?php echo join(', ',$border1);?></td>
        </tr>
        <tr>
            <td>Area</td>
            <td><?php echo $area1;?></td>
        </tr>
        <tr>
            <td>Population</td>
            <td><?php echo $population1;?></td>
        </tr>
      </table>
    </div>
  </div>  
</div>

  <footer class="py-3 my-4">
      <div class="border-bottom pb-3 mb-3"></div>
      <h4 class="text-center"><b>SOC Mini Project - Task 01</b></h4> 
      <p class="text-center text-muted">&copy; IT2019012 - Rohitha Rathnayake</p>
  </footer>
</body>
</html>
