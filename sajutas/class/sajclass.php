<?php
 require_once('./config/database.php');
 $feeldb = new database();
 class feel extends database
 {
	
	public function view_text()
	{
		global $feeldb;
		$query = "select * from feels";
		$result = mysqli_query($feeldb->conn,$query);
		return $result;
		
	}

	
	public function store_life()
	{
		global $feeldb;
		if(isset($_POST['life_sav']))
		{
			$author = $feeldb->check($_POST['author']);
			$life = $feeldb->check($_POST['life_text']);
		   
		if($this->insert_record($author, $life))
		{
			header('Location: '.$_SERVER['REQUEST_URI']);
										  
		 }
		 else
		 {
			 echo '<div> Failed </div>';
		 }
		}
	}

	function insert_record($a, $b)
	{
		global $feeldb;
		
		$query = "insert into feels (author, text) values('$a','$b')";
		$result333 = mysqli_query($feeldb->conn,$query);

		if($result333)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	
	// Update Record
	public function update5()
	{
		global $db;

		if(isset($_POST['btn_update55']))
		{
			$ID = $_POST['ID'];
			$relcomm_id = $db->check($_POST['relcomm_id']);
			$name = $db->check($_POST['name']);
			$text = $db->check($_POST['text']);

			if($this->update_record55($ID, $relcomm_id, $name, $text))
			{
				header("location:viewresvajcom.php");
			}
			else
			{   
				echo 'kaut kas nav';
			}

		   
		}
	}

	// Update Function 2
	public function update_record55($id, $relcomm_id, $name, $text)
	{
		global $db;
	   
		$sql = "update realcomments set relcomm_id='$relcomm_id', name='$name', text='$text' where ID='$id'";
		$result33 = mysqli_query($db->conn,$sql);
		if($result33)
		{
			return true;
		}
		else
		{
			return false;
		}
	}






 }

?>