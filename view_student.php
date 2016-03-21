<?php include 'dbConnect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
</head>
<body>
<header>
    <div id ="logo">
        <a href="index.html"><img src="images/fi-logo.png" alt="Demo" width="200"></a>
    </div>

    <h1><a href="index.html">FriendshipLink WebApp</a></h1>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
                <a class="active dropbtn" href="#">New</a>
                <div class="dropdown-content">
                    <a href="new_student.php">New Student Details</a>
                    <a href="new_host.php">New Host Details</a>
                </div>
            </li>
            <li  class="dropdown">
                <a href="#" class="dropbtn">View</a>
                <div class="dropdown-content">
                    <a href="view_student.php">View Students </a>
                    <a href="#">View Hosts</a>
                    <a href="#">View Match</a>
                </div>
            </li>
            <li><a href="#">Create Match</a></li>
            <li><a href="#">Generate Report</a></li>
        </ul>
    </nav>
</header>
<main>
<h2>Student Table</h2>


    <table style="margin-left: auto; margin-right: auto;">
        <tr>
            <th class="table-style">S_ID</th>
            <th class="table-style">Name</th>
            <th class="table-style">Address</th>
            <th class="table-style">PostCode</th>
            <th class="table-style">Telephone Number</th>
            <th class="table-style">E-mail Address</th>
            <th class="table-style">Home Country</th>
            <th class="table-style">Age:</th>
            <th class="table-style">Gender:</th>
            <th class="table-style">Marital Status</th>
            <th class="table-style">Married Details</th>
            <th class="table-style">University</th>
            <th class="table-style">Course of Study</th>
            <th class="table-style">End of Study Date</th>
            <th class="table-style">Special Interests</th>
            <th class="table-style">Special Diet</th>
            -->
        <?php

            $sql_query = "SELECT * FROM student";
            $result =  $dbs->query($sql_query);

            if(mysqli_num_rows($result)>0){
                $counter = 0;

            while ($row = $result->fetch_array())
            {
                $counter++;
            ?>
        <tr>
            <td><?php echo $counter;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['postcode'];?></td>;
            <td><?php echo $row['phoneNbr'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['nationality'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['ifMarried'];?></td>
            <td><?php echo $row['university'];?></td>
            <td><?php echo $row['course'];?></td>
            <td><?php echo $row['endOfStudy'];?></td>
            <td><?php echo $row['interests'];?></td>
            <td><?php echo $row['diet'];?></td>
        </tr>
        <?php
            }
        }
        $result->close();
        $dbs->close();
        ?>
</table>
</main>
</body>
</html>


