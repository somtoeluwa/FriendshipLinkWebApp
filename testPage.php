<?php include 'dbConnect.php' ?>

<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/17/2016
 * Time: 1:51 PM
 */



$sql_query = "SELECT host.* FROM host, `match` where host.h_id = `match`.h_id Group by `match`.h_id;";
$result =  $dbs->query($sql_query);

while ($row = $result->fetch_array()) {
    $counter++;

    echo $counter;
    echo $row['name'];
    echo $row['preference'];
    echo $row['interests'];
    echo $row['interest_nationality'];
    echo $row['vegan'];
   echo "<br><br><br><br><br>";

}

do{
    $sql = "SELECT student.* FROM student inner Join `match` on student.S_ID = `match`.S_ID  WHERE `match`.h_ID = " + $row['h_id'] + ";";
    $result2 = $dbs->query($sql);

} while ($row2 = $result2->fetch_array()); {

        echo $row2['name'];
        echo $row2['age'];
        echo $row2['gender'];
        echo $row2['nationality'];
        echo $row2['diet'];
        echo "<br><br>";

//}

}

/*$sql = "SELECT student.* FROM student inner Join `match` on student.S_ID = `match`.S_ID  WHERE `match`.h_ID =" + $row['h_id'] + ";";
$
while ($row2 = $result2->fetch_array()) {

    echo $row2['name'];
    echo $row2['age'];
    echo $row2['gender'];
    echo $row2['nationality'];
    echo $row2['diet'];
    echo "<br><br>";*/




?>