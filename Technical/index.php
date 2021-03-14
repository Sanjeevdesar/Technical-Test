<?php
require('db.php');
$db = new Dbconn();
$db -> Connection();
include "functions.php";
$functions = new Functions();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>View Records</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div>
  
  <div class="option">
      <div class="container">
  <div class="row">
      <form action="" method="post" class="mb-3">
      
       
         
            <select name="Category">
              
          <option value="disabled selected">Choose option</option>
          
            <?php $result = $functions->getAllCategory();
              while($r = $db->fetchAssoc($result)){ ?>
          <option value="<?php echo $r["ID"]; ?>
          "><?php echo $r["CATEGORY"]; ?></option>
         <?php } ?>
        
        </select>
          <input type="submit" name="submit" value="Choose options">
     </form>
   </div>
 </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
  </thead>

    <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['Category'])) {
          $selected = $_POST['Category'];
           $result = $functions->getDocumentByCategoryId($selected);
              while($row = $db->fetchAssoc($result)){ ?>
    <tr>
      <th><?php echo $row["ID"]; ?></th>
      <td><?php echo $row["NAME"]; ?> </td>
       <td><?php echo $row["CREATED_AT"]; ?> </td>
      <td><?php echo $row["UPDATED_AT"]; ?> </td>
      <td> <a href="update.php?docID=<?php echo $row["ID"]; ?>">Edit</a></td>
        <td align="center"><a href="delete.php?docID=<?php echo $row["ID"]; ?>">Delete</a></td>
    </tr>
   <?php } }?>
   <tr>
    <td> <a href="insert.php?catID=<?php echo $selected;?>">Insert new documents for this category</a></td>

   </tr>
     <?php
    }
    ?>
  
</table>
    </div>
  </div>
</div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
  </html>
