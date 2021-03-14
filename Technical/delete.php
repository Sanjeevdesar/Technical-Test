<?php
require('db.php');
$db = new Dbconn();
$db -> Connection();
include "functions.php";
$functions = new Functions();
$docID=$_REQUEST['docID']; // will get the docid from index.php
$result = $functions->deleteDocumentById($docID);
header("Location: index.php");
?>