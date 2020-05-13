<html>
<head>
<title> hjgkjgkj </title>
</head>
<body><?php 
include "include/db_config.php";

$query = "SELECT * FROM admins";
if(!$conn){
echo mysqli_connect_error($conn);
}
else {
echo "successful";
}
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));

echo $row['pass'];
phpinfo();
mysqli_close($conn);
echo "<h5> vbnjhh </h5>"
?></body>
</html>
