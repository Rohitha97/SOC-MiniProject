<?php
require_once __DIR__ .'/db/dbcon.php';


class API {
  function Select(){
    $conn = new DbConnection();
    $row_arr=array();
    $sql="SELECT *  FROM losses ORDER BY id";
    $stm=$conn->prepare($sql);
    $stm->execute();
    $return_arr=array();


    while($row=$stm->fetch(PDO::FETCH_ASSOC)){
        $row_arr[$row['id']] = array(
          'date'           => $row['date'],
          'day'            => $row['day'],
          'aircraft'       => $row['aircraft'],
          'helucopter'     => $row['helucopter'],
          'tank'           => $row['tank'],
          'APC'            => $row['APC'],
          'fieldartillery' => $row['fieldartillery'],
          'MRL'            => $row['mrl'],
          'fultank'        => $row['fultank'],
          'drone'          => $row['drone'],
          'navalship'      => $row['navalship'],
        );
        // array_push($row_arr);
        $fp = fopen('task/IT2019012.json', 'w');
    }
    fwrite($fp, json_encode($row_arr));
    return json_encode($row_arr);
    fclose($fp);    
  }
}
$API = new API;
header('Content-Type: application/json');
echo $API-> Select();

