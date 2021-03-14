
      <?php

      class Dbconn{

var $host;
		var $uname;
		var $psw;
		var $dbname;
		var $links;
		var $db;
		
		function Connection(){
			
		
			$this->host = "localhost";
			$this->uname = "root";
			$this->psw = "";
			$this->dbname = "Technical";
			
			
			$this->links = mysqli_connect($this->host,$this->uname,$this->psw, $this->dbname) or die("Sorry, couldnot connect to MySQL Server");			
			//return $this->links;
		}


      function exec($sqlMain){
			$result = mysqli_query($this->links, $sqlMain) or die(mysqli_error($this->links));
			return $result;
		}

		function fetchAssoc($result)
		{
			return mysqli_fetch_assoc($result);
		} 

		function insertId()
		{
			return mysqli_insert_id($this->links);
		}
	}

      ?>
  

       