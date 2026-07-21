<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Azure PHP & MySQL Demo</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
            background:#f4f4f4;
        }

        h1{
            color:#0078D4;
        }

        table{
            width:60%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }

        th{
            background:#0078D4;
            color:white;
        }

        tr:nth-child(even){
            background:#f2f2f2;
        }

        .success{
            color:green;
            font-weight:bold;
        }
    </style>

</head>

<body>

<h1>Azure IIS + PHP + MySQL Demo</h1>

<p class="success">
✅ Database Connected Successfully
</p>

<h2>Student Records</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
</tr>

<?php

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";

    }

}
else{

    echo "<tr>";
    echo "<td colspan='3'>No Records Found</td>";
    echo "</tr>";

}

$conn->close();

?>

</table>

</body>
</html>
