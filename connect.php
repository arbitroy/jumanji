<?php




$host = "rdbms.strato.de";
$dbName = "dbs5414227";
$dbUserName = "dbu1861600";
$dbPassword = "xMNCeamK8_ep7WC$";



// $conn = new mysqli($host,$dbUserName,$dbPassword,$dbName);
$conn = mysqli_connect($host, $dbUserName, $dbPassword, $dbName);

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
$phone = $_REQUEST['phone'];
$city = $_REQUEST['city'];
$country = $_REQUEST['country'];
$millcompany = $_REQUEST['millcompany'];
$role = $_REQUEST['role'];
$address = $_REQUEST['address'];
$farmerNumber = $_REQUEST['farmerNumber'];
$capacity = $_REQUEST['capacity'];
$compEmail = $_REQUEST['compEmail'];


$sql = "INSERT INTO registered (`id`, `firstName`, `lastName`, `email`, `gender`, `dob`, `phone`, `city`, `country`, `millcompany`, `role`, `address`, `farmerNumber`, `capacity`, `compEmail`) VALUES (DEFAULT ,'$firstName','$lastName', '$email','$gender','$dob','$phone',
'$city','$country','$millcompany','$role','$address','$farmerNumber','$capacity','$compEmail')";
if (mysqli_query($conn, $sql)) {
    header("Location:pop-success.php");
    exit();
     
} else {
    header("Location:pop-fail.php");
    exit();

}
mysqli_close($conn);
