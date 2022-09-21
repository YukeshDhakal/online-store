
<?php
$conn = mysqli_connect('localhost','root','','register');
$Fullname = $_POST['Fullname'];
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$password = $_POST['Password'];
// $confirm  = $_POST['confirm'];
// $Gender = $_POST['Gender'];

$query = "INSERT INTO `registers`(`Fullname`, `Username`, `Email`, `Phone`, `Password`) VALUES ('$Fullname','$Username','$Email','$Phone','$password');";
$conn->query($query);
header("Location: http://localhost/project/Project.home.html#");
echo '<script>alert("Registration successfull")</script>';

?>