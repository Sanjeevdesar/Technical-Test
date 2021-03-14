		<?php
		class Functions
		{


		function getAllCategory() //getting category by ID
			{
				global $db;
				
				$sql = "select * from CATEGORIES ORDER BY ID desc";
				$result = $db->exec($sql);
				return $result;
			}

			function getDocumentByCategoryId($id)  //getting document by categoryID
			{
				global $db;
				$sql = "SElECT * FROM DOCUMENTS WHERE CATEGORY_ID = '".$id."'";
				$result = $db->exec($sql);
				return $result;
			}

			function getDocumentByDocumentId($id)  //getting document by categoryID
			{
				global $db;
				$sql = "SElECT * FROM DOCUMENTS WHERE ID = '".$id."'";
				$result = $db->exec($sql);
				return $result;
			}

			function deleteDocumentById($id)  //deleting document by id
			{
				global $db;
				$sql = "DELETE FROM DOCUMENTS WHERE ID=$id";
				$result = $db->exec($sql);
				return $result;
			}

			

			function insert($catID, $name, $created_at, $updated_at) //insertng documents
	       {
	       	global $db;
	       	$sql = "INSERT INTO documents
						SET
							CATEGORY_Id = '".$catID."',
							NAME = '".$name."',
							CREATED_AT = '".$created_at."',	
							UPDATED_AT='".$updated_at."'
							";
							$db->exec($sql);
			 return $db->insertId();
			}



			 function update($id,$name, $created_at, $updated_at)
 {
  global $db;
  
  $sql = "update documents set 
			NAME='".$name."',
			CREATED_AT='".$created_at."',
			UPDATED_AT='".$updated_at."'
			where ID='".$id."'
			";
  $db->exec($sql);
 }

	 


		}

			?>