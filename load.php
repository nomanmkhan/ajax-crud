<?php 
$con = mysqli_connect('localhost', 'root', '', 'ajex_crud');

$sql = "SELECT * FROM student";

echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact</th></tr></table>";
if($data = mysqli_query($con, $sql)){
    while($row = mysqli_fetch_assoc($data)){
        echo "<table><tr><th>$row[id]</th><th>$row[name]</th><th>$row[email]</th><th>$row[contact]</th></tr></table>";
    }
}else{
    echo "Failted to load";
}

?>
