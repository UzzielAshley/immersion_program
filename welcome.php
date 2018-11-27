<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$uname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$uname = $row["Username"];
		$email = $row["Email"];

	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $uname.""; ?></h1>
	</center>
</div>