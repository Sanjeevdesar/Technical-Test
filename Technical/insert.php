<?php
require('db.php');
$db = new Dbconn();
$db -> Connection();
include "functions.php";
$functions = new Functions();
$catID=$_REQUEST['catID']; // will get the docid from index.php
$dt2=date("Y-m-d H:i:s");
if(isset($_POST['newDocument']) && $_POST['newDocument']==1)
{
	 
	$NAME = $_POST['DocumentName'];
	
 $result = $functions->insert($catID, $NAME, $dt2, $dt2);
	$message = "New Record Inserted Successfully";
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert New Record</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	

		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="update">
			<h5>Insert New Record</h5>
			<form name="form" method="post" action=""> 
				<input type="hidden" name="newDocument" value="1" />
				<p><input type="text" name="DocumentName" placeholder="Enter Document Name" required /></p>
				<p><input name="submit" type="submit" value="Submit" /></p>
			</form>
			<p style="color:red;"><?php if(isset($message)) echo $message; ?></p>
		</div>
</div>
		</div>
	</div>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</body>
</html>
