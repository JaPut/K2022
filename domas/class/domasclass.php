<?php
 require_once('./config/database.php');
 $domasdb = new database();
 class domas extends database
 {
	
	public function view_biology()
	{
		global $domasdb;
		global $type;
		$query = "select * from domas where part='$type'";
		$result = mysqli_query($domasdb->conn,$query);
		return $result;
		
	}

	public function view_biologybytitle()
	{
		global $domasdb;
		global $xxx;
		$query = "select * from domas where title='$xxx' ORDER BY id DESC";
		$result = mysqli_query($domasdb->conn,$query);
		return $result;
		
	}



    public function store_domas()
	{
		global $domasdb;
		

		if(isset($_POST['domas_save']))
		{
			// $dcomm_did = $domasdb->check($_POST['did']);
			$dom_part = $domasdb->check($_POST['veids']);
			$dom_title = $domasdb->check($_POST['title']);
			$dom_date = $domasdb->check($_POST['name']);
			$dom_article = $domasdb->check($_POST['article']);
			$dom_article2 = $domasdb->check($_POST['article2']);
			$dom_article3 = $domasdb->check($_POST['article3']);
			$dom_article4 = $domasdb->check($_POST['article4']);
			$dom_author = $domasdb->check($_POST['author']);
						
			if($this->insert_comrecord($dom_part, $dom_title, $dom_date, $dom_article, $dom_article2, $dom_article3, $dom_article4, $dom_author))
			{
				echo '<div> labi teikts :) </div>';
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">'; 			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_comrecord($a,$b,$c,$d,$e,$f,$g,$h)
	{
		global $domasdb;
		$query = "insert into domascomments (part, title, date, article, article2, article3, article4, author) values('$a','$b', CURDATE(), '$c','$d','$e','$f','$g', '$f',)";
		$result = mysqli_query($domasdb->conn, $query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

    public function store_domascomm()
	{
		global $domasdb;
		global $dcomm_title;

		if(isset($_POST['domascomm_save']))
		{
			// $dcomm_did = $domasdb->check($_POST['did']);
			$dcomm_title = $domasdb->check($_POST['title']);
			$dcomm_name = $domasdb->check($_POST['name']);
			$dcomm_text = $domasdb->check($_POST['text']);
						
			if($this->insert_domrecord($dcomm_title, $dcomm_name, $dcomm_text ))
			{
				echo '<div> labi teikts :) </div>';
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">'; 			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_domrecord($a,$b,$c)
	{
		global $domasdb;
		$query = "insert into domascomments (domastitle, name, text, date) values('$a','$b','$c', CURDATE())";
		$result = mysqli_query($domasdb->conn, $query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function view_domascomm()
	{
		global $domasdb;
        global $xxx;
        $query = "select * from domascomments where domastitle='$xxx' ORDER BY id DESC";
        $res22 = mysqli_query($domasdb->conn,$query);
		return $res22;
	}

}

?>