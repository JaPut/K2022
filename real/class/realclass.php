<?php
 require_once('./config/database.php');
 $realdb = new database();
 class real extends database
 {
	
	public function view_realvaj()
	{
		global $realdb;
		$query = "select * from vajres where vajres='realvaj'";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
		
	}

	public function view_izdvaj()
	{
		global $realdb;
		$query = "select * from vajres where vajres='izdvaj'";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
		
	}
	
	public function view_konres()
	{
		global $realdb;
		$query = "select * from vajres where vajres='konres'";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
		
	}
	public function view_nosres()
	{
		global $realdb;
		$query = "select * from vajres where vajres='nores'";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
		
	}

	

	public function Store_vajres()
	{
		global $realdb;
		if(isset($_POST['vajres_saves']))
		{
			$vajres = $realdb->check($_POST['vajres']);
			$vajresnos = $realdb->check($_POST['vajresnos']);
			$content = $realdb->check($_POST['content']);
			$name = $realdb->check($_POST['names']);
		   
		if($this->insert_record($vajres, $vajresnos, $content, $name))
			{
				$location = $_SERVER['index.php#needstit'];
				echo '<META HTTP-EQUIV="Refresh" Content="20; URL='.$location.'">';
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}

	function insert_record($a,$b,$c,$d)
	{
		global $realdb;
		
		$query = "insert into vajres (vajres, vajresnos, content, name) values('$a','$b','$c','$d')";
		$result = mysqli_query($realdb->conn,$query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function view_resvaj()
	{
		global $realdb;
		global $resvajid;
		$query = "select * from vajres where vajresnos='$resvajid'";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
		
	}

	public function adview_resvaj()
	{
		global $realdb;
		global $resvajid;
		$query = "select * from vajres";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
		
	}

	public function get_record4($id)
	{
		global $db;
		$sql = "select * from vajres where ID='$id'";
		$data = mysqli_query($db->conn,$sql);
		return $data;

	}

	// Update Record
	public function update4()
	{
		global $db;

		if(isset($_POST['btn_update44']))
		{
			$ID = $_POST['ID'];
			$vajres = $db->check($_POST['vajres']);
			$vajresnos = $db->check($_POST['vajresnos']);
			$content = $db->check($_POST['content']);
			$name = $realdb->check($_POST['names']);

			if($this->update_record44($ID, $vajres, $vajresnos, $content, $name))
			{
				header("location:viewresvaj.php");
			}
			else
			{   
				echo 'kaut kas nav';
			}

		   
		}
	}

	// Update Function 2
	public function update_record44($id, $vajres, $vajresnos, $content, $name)
	{
		global $db;
	   
		$sql = "update vajres set vajres='$vajres', vajresnos='$vajresnos', content='$content' names='$name' where ID='$id'";
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
	
	public function get_record5($id)
	{
		global $db;
		$sql = "select * from realcomments where ID='$id'";
		$data = mysqli_query($db->conn,$sql);
		return $data;

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

// public function insert()
// {
// 		global $realdb;
	   
// 		if(isset($_POST['realcomm_sav']))
// 		{
			
// 			$rcomm_author = xxx;
// 			$rcomm_text = yyy;
			
// 			$query = "insert into xxx (relcomm_id, name, text) values('$rcomm_author','$rcomm_text')";
// 			$ress = mysqli_query($realdb->conn, $query);

// 		}

// }

	public function Store_Realcomm()
	{
		global $realdb;
		global $resvajid;
		if(isset($_POST['realcomm_sav']))
		{
			$rcomm_id = $realdb->check($_POST['rcomm_id']);
			$rcomm_author = $realdb->check($_POST['rcomm_author']);
			$rcomm_text = $realdb->check($_POST['rcomm_text']);
						
			if($this->insert_comrecord($rcomm_id, $rcomm_author, $rcomm_text))
			{
			   header('Location: '.$_SERVER['REQUEST_URI']);
			   			   			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_comrecord($d,$e,$f)
	{
		global $realdb;
		global $resvajid;
		$query = "insert into realcomments (relcomm_id, name, text) values('$d','$e','$f')";
		$result = mysqli_query($realdb->conn, $query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function view_realcomm()
	{
		global $realdb;
		global $resvajid;
		$query = "select * from realcomments where relcomm_id='$resvajid' ORDER BY id DESC";
		$results22 = mysqli_query($realdb->conn,$query);
		return $results22;
	}

	public function adview_realcomm()
	{
		global $realdb;
		global $resvajid;
		$query = "select * from realcomments ORDER BY relcomm_id DESC";
		$results22 = mysqli_query($realdb->conn,$query);
		return $results22;
	}
	
	public function Store_Realque()
	{
		global $realdb;
	   
		if(isset($_POST['realque_save']))
		{
			$jautajums = $realdb->check($_POST['jautajums']);
			$atbilde = $realdb->check($_POST['atbilde']);
			$autors = $realdb->check($_POST['autors']);
						
			if($this->insert_querecord($jautajums,$atbilde,$autors))
			{
			   header('Location: '.$_SERVER['REQUEST_URI']);			   			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_querecord($g,$h,$j)
	{
		global $realdb;

		$query = "insert into que (jautajums, atbilde, autors) values('$g','$h','$j')";
		$result = mysqli_query($realdb->conn,$query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function Store_idRealque()
	{
		global $realdb;
	   
		if(isset($_POST['idque_save']))
		{
			$idjautajums = $realdb->check($_POST['jautajums']);
			$idatbilde = $realdb->check($_POST['atbilde']);
			$idautors = $realdb->check($_POST['autors']);
						
			if($this->insert_idquerecord($idjautajums,$idatbilde,$idautors))
			{
			   header('Location: '.$_SERVER['REQUEST_URI']);			   			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_idquerecord($g,$h,$j)
	{
		global $realdb;

		$query = "insert into que (jautajums, atbilde, autors) values('$g','$h','$j')";
		$result = mysqli_query($realdb->conn,$query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function view_realque1()
	{	global $realdb;
		$query = "select * from que where jautajums='Kas notiek' ORDER BY atbilde DESC LIMIT 6";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}

	public function view_realque2()
	{
		global $realdb;
		$query = "select * from que where jautajums='Kā tas notiek' ORDER BY atbilde DESC LIMIT 6";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}

	public function view_realque3()
	{
		global $realdb;
		$query = "select * from que where jautajums='Ko darīt' ORDER BY atbilde DESC LIMIT 6";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}
	public function view_realque4()
	{
		global $realdb;
		$query = "select * from que where jautajums='Kas vainīgs' ORDER BY atbilde DESC LIMIT 6";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}
	public function view_realque5()
	{
		global $realdb;
		$query = "select * from que where jautajums='Ko var ietekmēt' LIMIT 6";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}
	public function view_realque6()
	{
		global $realdb;
		$query = "select * from que where jautajums='Kas tagad būs' ORDER BY atbilde DESC LIMIT 6";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}

	public function adview_realque()
	{
		global $realdb;
		$query = "select * from que ORDER BY jautajums DESC";
		$result5 = mysqli_query($realdb->conn,$query);
		return $result5;
	}

	public function view_realque1atb()
	{
		global $realdb;
		global $xx3;
		$query = "select * from que where jautajums='$xx3' ORDER BY id DESC";
		$result6 = mysqli_query($realdb->conn,$query);
		return $result6;
	}


	public function get_record6($id)
	{
		global $db;
		$sql = "select * from que where ID='$id'";
		$data = mysqli_query($db->conn,$sql);
		return $data;

	}

	// Update Record
	public function update6()
	{
		global $db;

		if(isset($_POST['btn_update66']))
		{
			$ID = $_POST['ID'];
			$jautajums = $db->check($_POST['jautajums']);
			$atbilde = $db->check($_POST['atbilde']);
			$autors = $db->check($_POST['autors']);

			if($this->update_record66($ID, $jautajums, $atbilde, $autors))
			{
				header("location:viewque.php");
			}
			else
			{   
				echo 'kaut kas nav';
			}

		   
		}
	}

	// Update Function 2
	public function update_record66($id, $jautajums, $atbilde, $autors)
	{
		global $db;
	   
		$sql = "update que set jautajums='$jautajums', atbilde='$atbilde', autors='$autors' where ID='$id'";
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

	public function get_record7($id)
	{
		global $db;
		$sql = "select * from quecomments where ID='$id'";
		$data = mysqli_query($db->conn,$sql);
		return $data;

	}

	// Update Record
	public function update7()
	{
		global $db;

		if(isset($_POST['btn_update77']))
		{
			$ID = $_POST['ID'];
			$name_que = $db->check($_POST['name_que']);
			$name = $db->check($_POST['name']);
			$text = $db->check($_POST['text']);

			if($this->update_record77($ID, $name_que, $name, $text))
			{
				header("location:viewquecom.php");
			}
			else
			{   
				echo 'kaut kas nav';
			}

		   
		}
	}

	// Update Function 2
	public function update_record77($id, $name_que, $name, $text)
	{
		global $db;
	   
		$sql = "update quecomments set name_que='$name_que', name='$name', text='$text' where ID='$id'";
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

	public function Store_quecomm()
	{
		global $realdb;
	
		if(isset($_POST['quecomm_sav']))
		{
			$qcomm_id = $realdb->check($_POST['name_que']);
			$qcomm_author = $realdb->check($_POST['qcomm_author']);
			$qcomm_text = $realdb->check($_POST['qcomm_text']);
						
			if($this->insert_qcomrecord($qcomm_id, $qcomm_author, $qcomm_text))
			{
			   header('Location: '.$_SERVER['REQUEST_URI']);
			   			   			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_qcomrecord($x,$y,$z)
	{
		global $realdb;

		$query = "insert into quecomments (name_que, name, text) values('$x','$y','$z')";
		$result = mysqli_query($realdb->conn, $query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function view_qcomm()
	{
		global $realdb;
		global $xx3;
		$query = "select * from quecomments where name_que ='$xx3'";
		$result79 = mysqli_query($realdb->conn,$query);
		return $result79;
	}

	public function adview_comm()
	{
		global $realdb;
		global $xx3;
		$query = "select * from quecomments ORDER BY name_que DESC";
		$result79 = mysqli_query($realdb->conn,$query);
		return $result79;
	}





	

	public function Store_facts()
	{
		global $realdb;
	   
		if(isset($_POST['facts_save']))
		{
			$facts = $realdb->check($_POST['facts']);
			
						
			if($this->insert_facts($facts))
			{
			   header('Location: '.$_SERVER['REQUEST_URI']);			   			   
			}
			else
			{
				echo '<div> Failed </div>';
			}
		}
	}
 
	function insert_facts($k)
	{
		global $realdb;

		$query = "insert into facts (facts) values('$k')";
		$result = mysqli_query($realdb->conn,$query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	public function view_facts()
	{
		global $realdb;
		$query = "select * from facts";
		$result7 = mysqli_query($realdb->conn,$query);
		return $result7;
	}



	public function get_record8($id)
	{
		global $db;
		$sql = "select * from facts where ID='$id'";
		$data = mysqli_query($db->conn,$sql);
		return $data;

	}

	// Update Record
	public function update8()
	{
		global $db;

		if(isset($_POST['btn_update88']))
		{
			$ID = $_POST['ID'];
			$facts = $db->check($_POST['facts']);
		
			if($this->update_record88($ID, $facts))
			{
				header("location:viewfact.php");
			}
			else
			{   
				echo 'kaut kas nav';
			}

		   
		}
	}

	// Update Function 2
	public function update_record88($id, $facts)
	{
		global $db;
	   
		$sql = "update facts set facts='$facts' where ID='$id'";
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



	

	public function view_atbildi()
	{
		global $realdb;
        global $yyy;
        $query = "select atbilde from que where id='$yyy'";
        $res22 = mysqli_query($realdb->conn,$query);
		return $res22;
	}

	public function view_atbildescomm()
	{
		global $realdb;
        global $zzz;
        $query = "select * from quecomments where comm_id='$zzz'";
        $res22 = mysqli_query($realdb->conn,$query);
		return $res22;
	}

	public function store_atbildecomm()
	{
		global $realdb;

		if(isset($_POST['atbildecomm_save']))
		{
			$cocomm_id = $realdb->check($_POST['comm_id']);
			$cocomm_name = $realdb->check($_POST['name']);
			$cocomm_text = $realdb->check($_POST['text']);
						
			if($this->insert_cocom($cocomm_id, $cocomm_name, $cocomm_text ))
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
 
	function insert_cocom($m,$n,$o)
	{
		global $realdb;
		$query = "insert into quecomments (comm_id, name, text, quecomm_time) values('$m','$n','$o', CURDATE())";
		$result = mysqli_query($realdb->conn, $query);

		if($result)
		   {
			   return true;
		   }
		   else
		   {
			   return false;
		   }
	}

	// upload pic

	function upload_pic()
	{
		global $realdb;

		if (isset($_POST['savep'])) { // if save button on the form is clicked
			// name of the uploaded file
			$filename = $_FILES['myfile']['name'];
		
			// destination of the file on the server
			$destination = '../pasakas/adm/uploads/' . $filename;
		
			// get the file extension
			$extension = pathinfo($filename, PATHINFO_EXTENSION);
		
			// the physical file on a temporary uploads directory on the server
			$file = $_FILES['myfile']['tmp_name'];
			$size = $_FILES['myfile']['size'];
		
			if (!in_array($extension, ['zip', 'pdf', 'docx', 'jpg', 'png', 'jpeg'])) {
				echo "Faila veids var būt tikai .jpg, .png, .jpeg un mazāks par 5MB" ;
			} elseif ($_FILES['myfile']['size'] > 5000000) { // file shouldn't be larger than 1Megabyte
				echo "Failam jābūt mazākam par 5MB!";
			} else {
				// move the uploaded (temporary) file to the specified destination
				if (move_uploaded_file($file, $destination)) {
					$query = "INSERT INTO pics (name, size, downloads) VALUES ('$filename', $size, 0)";
					if (mysqli_query($realdb->conn, $query)) {
						$location = 'http://localhost/projekts5/real/index.php#slide';
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
					}
				} else {
					echo "Failed to upload file.";
				}
			}
		}

// read pic

	

	}


public function view_pic()
	{
		global $realdb;
		$query = "SELECT name FROM publicpics ORDER BY id DESC";
		$result = mysqli_query($realdb->conn,$query);
		return $result;
	}
 }

?>
