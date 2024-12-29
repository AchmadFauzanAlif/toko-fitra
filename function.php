<?php  
$conn = mysqli_connect("localhost", "root", "", "toko-fitra");

function query($tes){
    global $conn;
    $result = mysqli_query($conn, $tes);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}


?>