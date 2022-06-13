<?php 

    require_once('../config/database.php');
    $db = new operations();
    
    if(isset($_GET['D_ID']))
    {
        global $db;
        $ID = $_GET['D_ID'];

        if($db->Delete_Record($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:view.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID2']))
    {
        global $db;
        $ID = $_GET['D_ID2'];

        if($db->Delete_Record2($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewcom.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID3']))
    {
        global $db;
        $ID = $_GET['D_ID3'];

        if($db->Delete_Record3($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewzina.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID4']))
    {
        global $db;
        $ID = $_GET['D_ID4'];

        if($db->Delete_Record4($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewresvaj.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID5']))
    {
        global $db;
        $ID = $_GET['D_ID5'];

        if($db->Delete_Record5($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewresvajcom.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID6']))
    {
        global $db;
        $ID = $_GET['D_ID6'];

        if($db->Delete_Record6($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewque.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID7']))
    {
        global $db;
        $ID = $_GET['D_ID7'];

        if($db->Delete_Record7($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewquecom.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID8']))
    {
        global $db;
        $ID = $_GET['D_ID8'];

        if($db->Delete_Record8($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewfact.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID9']))
    {
        global $db;
        $ID = $_GET['D_ID9'];

        if($db->Delete_Record9($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewdzive.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID10']) & isset($_GET['table']))
    {
        global $db;
        $ID = $_GET['D_ID10'];
        $table = $_GET['table'];

        if($db->Delete_Record10($ID, $table))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header('location: '.$_SERVER['HTTP_REFERER']);
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID11']))
    {
        global $db;
        $ID = $_GET['D_ID11'];

        if($db->Delete_Record11($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewpic.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

    if(isset($_GET['D_ID12']))
    {
        global $db;
        $ID = $_GET['D_ID12'];

        if($db->Delete_Record12($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewpublicpic.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }
?>