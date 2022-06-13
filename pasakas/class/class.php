<?php
 require_once('../config/database.php');
//  require_once('./storiescomments.php');
 $db = new database();

 class operations extends database
 {
	 // Insert Record in the Database
	 public function Store_Record()
	 {
		 global $db;
		 if(isset($_POST['btn_save']))
		 {
			 
			 $author = $db->check($_POST['author']);
			 $category = $db->check($_POST['category']);
			 $category1 = $db->check($_POST['category1']);
			 $text = $db->check($_POST['text']);
			 $content = $db->check($_POST['content']);
			 $link = $db->check($_POST['link']);

			
			 if($this->insert_record($category, $category1, $author, $text, $content, $link))
			 {
				header("location:indexadm.php");
				echo '<div> You did it again :) </div>';
				
				
			 }
			 else
			 {
				 echo '<div> Failed </div>';
				 
			 }
		 }
	 }

	 // Insert Record in the Database Using Query    
	 function insert_record($a,$b,$c,$d,$e,$f)
	 {
		 global $db;
		 
		 $dbname = 'table1';
		 $query = "insert into table1 (category, category1, author, text, content, link ) values('$a','$b','$c','$d','$e','$f')";
		 $result = mysqli_query($db->conn,$query);

		 if($result)
            {
				return true;
		    }
            else
            {
                return false;
            }
	 }
	 public function Store_Comm()
	 {
		 global $db;
		
		 if(isset($_POST['comm_save']))
		 {
			 $comm_id = $db->check($_POST['comm_id']);
			 $comm_author = $db->check($_POST['comm_author']);
			 $comm_text = $db->check($_POST['comm_text']);
			 			
			 if($this->insert_record1($comm_id,$comm_author,$comm_text))
			 {
				header('Location: '.$_SERVER['REQUEST_URI']);
				
				
				
			 }
			 else
			 {
				 echo '<div> Failed </div>';
			 }
		 }
	 }

	 // Insert Record in the Database Using Query    
	 function insert_record1($e,$f,$g)
	 {
		 global $db;
		//   require_once('./storiescomments.php');
		 
		//  $xxx = '63';
		 $query = "insert into comments (comm_id,name, comm_text) values('$e','$f','$g')";
		 $result = mysqli_query($db->conn,$query);

		 if($result)
            {
				return true;
		    }
            else
            {
                return false;
            }
	 }

 public function Store_Zina()
        {
            global $db;
            if(isset($_POST['zina_save']))
            {
                $zinnesis = $db->check($_POST['zinnesis']);
                $zinaa = $db->check($_POST['zinaa']);
                
                if($this->insert_records($zinnesis,$zinaa))
                {
                    header("location:../launch/index.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed </div>';
                }
            }
        }

        // Insert Record in the Database Using Query    
        function insert_records($h,$j)
        {
            global $db;
            $query = "insert into zinas (zinnesis, zinaa) values('$h','$j')";
            $result = mysqli_query($db->conn,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

 public function store_domas()
        {
            global $db;
            if(isset($_POST['domas_save']))
            {
                $veids = $db->check($_POST['veids']);
                $title = $db->check($_POST['title']);
                $article = $db->check($_POST['article']);
                $article2 = $db->check($_POST['article2']);
                $article3 = $db->check($_POST['article3']);
                $article4 = $db->check($_POST['article4']);
                $author = $db->check($_POST['author']);
                
                if($this->insert_record2($veids,$title,$article,$article2,$article3,$article4,$author))
                {
                    header("location:../adm/viewdomas.php");
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failedddd </div>';
                }
            }
        }

        // Insert Record in the Database Using Query    
        function insert_record2($k,$l,$m,$n,$o,$p,$r)
        {
            global $db;
            $query = "insert into domas (part, title, date, article, article2 ,article3, article4, author) values('$k','$l',CURDATE() ,'$m','$n','$o','$p','$r')";
            $result = mysqli_query($db->conn,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

	 // View Database Record
	 public function adview_record()
	 {
		 global $db;
		//  require_once('./storiescomments.php');
		
		
		 $query = "select * from table1 ORDER BY category ASC";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }

	 public function adview_record2()
	 {
		 global $db;
		//  require_once('./storiescomments.php');
		
		
		 $query = "select * from comments ORDER BY comm_id ASC";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }
	 
	 public function adview_record3()
	 {
		 global $db;
		//  require_once('./storiescomments.php');
		
		
		 $query = "select * from zinas ORDER BY id ASC";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }
	 public function view_dzive()
	 {
		 global $db;		
		 $query = "select * from feels ORDER BY id ASC";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }

	 public function view_biology()
	 {
		 global $db;		
		 $query = "select * from domas ORDER BY id ASC";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }

	 public function view_record()
	 {
		 global $db;
		 global $xxx;
		 $query = "select * from table1 where id='$xxx'";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }

	 public function view_recordcat()
	 {
		 global $db;
		 global $xx2;
		//  require_once('./storiescomments.php');
		 $query = "select * from table1 where category='$xx2' OR category1='$xx2'";
		//  $query = "select * from table1";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }
	

	 public function view_record2()
	 {
		 global $db;
		 global $xxx;
		 $query = "select * from comments where comm_id='$xxx'";
		 $result = mysqli_query($db->conn,$query);
		 return $result;
	 }

	 public function view_newest() {
		global $db;
		$query = "SELECT * from table1 ORDER BY id DESC LIMIT 1";
		// $query = "SELECT LEFT("content", 10) AS ExtractString from table1 ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($db->conn,$query);
		return $result;
	 }

	 // Get Particular Record
	 public function get_record($id)
	 {
		 global $db;
		 $sql = "select * from table1 where ID='$id'";
		 $data = mysqli_query($db->conn,$sql);
		 return $data;

	 }

	 public function update()
	 {
		 global $db;

		 if(isset($_POST['btn_update']))
		 {
			 $ID = $_POST['ID'];
			 $category = $db->check($_POST['category']);
			 $author = $db->check($_POST['user']);
			 $text = $db->check($_POST['text']);
			 $content = $db->check($_POST['content']);
			 $link = $db->check($_POST['link']);
			

			 if($this->update_record($ID,$category,$author,$text,$content,$link))
			 {
				 $this->set_messsage('<div> Your Record Has Been Updated : )</div>');
				 header("location:view.php");
			 }
			 else
			 {   
				 $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
			 }

			
		 }
	 }

	 // Update Function 2
	 public function update_record($id,$category,$author,$text,$content,$link)
	 {
		 global $db;
		 $sql = "update table1 set category='$category', author='$author', text='$text', content='$content', link='$link' where ID='$id'";
		 $result = mysqli_query($db->conn,$sql);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }



	 public function get_record2($id)
	 {
		 global $db;
		 $sql = "select * from comments where ID='$id'";
		 $data = mysqli_query($db->conn,$sql);
		 return $data;

	 }

	 // Update Record
	 public function update2()
	 {
		 global $db;

		 if(isset($_POST['btn_update2']))
		 {
			 $ID = $_POST['ID'];
			 $name = $db->check($_POST['name']);
			 $comm_text = $db->check($_POST['comm_text']);

			 if($this->update_record2($ID,$name,$comm_text))
			 {
				 $this->set_messsage('<div> Your Record Has Been Updated : )</div>');
				 header("location:view.php");
			 }
			 else
			 {   
				 $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
			 }

			
		 }
	 }

	 // Update Function 2
	 public function update_record2($id,$name,$comm_text)
	 {
		 global $db;
		 $sql = "update comments set name='$name', comm_text='$comm_text' where ID='$id'";
		 $result22 = mysqli_query($db->conn,$sql);
		 if($result22)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 
	 public function get_record3($id)
	 {
		 global $db;
		 $sql = "select * from zinas where ID='$id'";
		 $data = mysqli_query($db->conn,$sql);
		 return $data;

	 }

	 // Update Record
	 public function update3()
	 {
		 global $db;

		 if(isset($_POST['btn_update33']))
		 {
			 $ID = $_POST['ID'];
			 $zinnesis = $db->check($_POST['zinnesis']);
			 $zinaa = $db->check($_POST['zinaa']);

			 if($this->update_record33($ID,$zinnesis,$zinaa))
			 {
				 $this->set_messsage('<div> Your Record Has Been Updated : )</div>');
				 header("location:viewzina.php");
			 }
			 else
			 {   
				 $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
				 echo 'xxx';
			 }

			
		 }
	 }

	 // Update Function 2
	 public function update_record33($id,$zinnesis,$zinaa)
	 {
		 global $db;
		
		 $sql = "update zinas set zinnesis='$zinnesis', zinaa='$zinaa' where ID='$id'";
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

	 public function get_record4($id)
	 {
		 global $db;
		 $sql = "select * from feels where ID='$id'";
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
			 $author = $db->check($_POST['author']);
			 $text = $db->check($_POST['text']);

			 if($this->update_record4($ID,$author,$text))
			 {
				 $this->set_messsage('<div> Your Record Has Been Updated : )</div>');
				 header("location:viewdzive.php");
			 }
			 else
			 {   
				 $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
				 echo 'xxx';
			 }

			
		 }
	 }

	 // Update Function 2
	 public function update_record4($id,$author,$text)
	 {
		 global $db;
		
		 $sql = "update feels set author='$author', text='$text' where ID='$id'";
		 $result4 = mysqli_query($db->conn,$sql);
		 if($result4)
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
		 $sql = "select * from domas where ID='$id'";
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
			 $part = $db->check($_POST['part']);
			 $title = $db->check($_POST['title']);
			 $date = $db->check($_POST['date']);
			 $article = $db->check($_POST['article']);
			 $article2 = $db->check($_POST['article2']);
			 $article3 = $db->check($_POST['article3']);
			 $article4 = $db->check($_POST['article4']);
			 $author = $db->check($_POST['author']);

			 if($this->update_record5($ID,$part,$title,$date,$article,$article2,$article3,$article4,$author))
			 {
				 $this->set_messsage('<div> Your Record Has Been Updated : )</div>');
				 header("location:viewdomas.php");
			 }
			 else
			 {   
				 $this->set_messsage('<div class="alert alert-success"> Something Wrong : )</div>');
				 echo 'xxx';
			 }

			
		 }
	 }

	 // Update Function 2
	 public function update_record5($id,$part,$title,$date,$article,$article2,$article3,$article4,$author)
	 {
		 global $db;
		
		 $sql = "update domas set part='$part', title='$title', date='$date', article='$article', article2='$article2', article3='$article3', article4='$article4', author='$author' where ID='$id'";
		 $result5 = mysqli_query($db->conn,$sql);
		 if($result5)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }

	 public function get_record9($id)
	 {
		 global $domadb;
		 $sql = "select * from domascomments where id='$id'";
		 $data = mysqli_query($domadb->conn,$sql);
		 return $data;
 
	 }
 
	 // Update Record
	 public function update9()
	 {
		 global $domadb;
 
		 if(isset($_POST['btn_updatexx']))
		 {
			 $ID = $_POST['ID'];
			 $domastitle = $domadb->check($_POST['domastitle']);
			 $name = $domadb->check($_POST['name']);
			 $text = $domadb->check($_POST['text']);
 
			 if($this->update_record99($ID, $domastitle, $name, $text))
			 {
				 header("location:viewdomascomm.php");
			 }
			 else
			 {   
				 echo 'kaut kas nav';
			 }
 
			
		 }
	 }
 
	 public function update_record99($id, $domastitle, $name, $text)
	 {
		 global $domadb;
		
		 $sql = "update domascomments set domastitle='$domastitle', name='$name', text='$text' where ID='$id'";
		 $result = mysqli_query($domadb->conn,$sql);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	

	 // Set Session Message
	 public function set_messsage($msg)
	 {
		 if(!empty($msg))
		 {
			 $_SESSION['Message']=$msg;
		 }
		 else
		 {
			 $msg = "";
		 }
	 }

	 // Display Session Message
	 public function display_message()
	 {
		 if(isset($_SESSION['Message']))
		 {
			 echo $_SESSION['Message'];
			 unset($_SESSION['Message']);
		 }
	 }

	 public function view_domacomm()
	{
		global $domadb;
		$query = "select * from domascomments ORDER BY domastitle ASC";
		$res = mysqli_query($domadb->conn,$query);
		return $res;
	}
	 // Delete Record
	 public function Delete_Record($id)
	 {
		 global $db;
		 $query = "delete from table1 where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }

	 public function Delete_Record2($id)
	 {
		 global $db;
		 $query = "delete from comments where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }

	 public function Delete_Record3($id)
	 {
		 global $db;
		 $query = "delete from zinas where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 public function Delete_Record4($id)
	 {
		 global $db;
		 $query = "delete from vajres where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 public function Delete_Record5($id)
	 {
		 global $db;
		 $query = "delete from realcomments where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 public function Delete_Record6($id)
	 {
		 global $db;
		 $query = "delete from que where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 public function Delete_Record7($id)
	 {
		 global $db;
		 $query = "delete from quecomments where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 public function Delete_Record8($id)
	 {
		 global $db;
		 $query = "delete from facts where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
	 public function Delete_Record9($id)
	 {
		 global $db;
		 $query = "delete from feels where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }

	 public function Delete_Record10($id, $table)
	 {
		 global $db;
		
		 $query = "delete from $table where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }

	 public function Delete_Record11($id)
	 {
		 global $db;
		
		 $query = "delete from pics where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }

	 public function Delete_Record12($id)
	 {
		 global $db;
		
		 $query = "delete from publicpics where ID='$id'";
		 $result = mysqli_query($db->conn,$query);
		 if($result)
		 {
			 return true;
		 }
		 else
		 {
			 return false;
		 }
	 }


	 public function Count_Com()
	 {
		 global $db;
		 $query = "SELECT COUNT('comm_id')  from comments";
		 $res3 = mysqli_query($db->conn,$query);
	
		 if($res3)
		 {
			 
		
			$row = mysqli_fetch_array($res3);
			echo "$row[0]";
			
			return true;
		 }
		 else
		 {
			 return false;
		 }
	 }
 }




 

?>

















