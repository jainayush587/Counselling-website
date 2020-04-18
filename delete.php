<?php
include "db.php";  //connect with connection page 
/*$ids = $_POST['select'];       // receive ids 

foreach ($ids as $key => $id) {   
    $sql  = "DELETE FROM student_data WHERE id={$id}";  //delete data from users table 
    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location:display2.php');  //after delete redirect to index.php page 
    }
}*/
if (isset($_POST["submit"])) {
    if (count($_POST["ids"]) > 0 ) {
        // Imploding checkbox ids
        $all = implode(",", $_POST["ids"]);
        $sql1 = mysqli_query($conn,"DELETE FROM student_data WHERE data_id in ($all)");
        if ($sql1) {
		//$errmsg ="Data has been deleted successfully";
		header('Location:display2.php'); 
        } else {
            //$errmsg ="Error while deleting. Please Try again."; 
			header('Location:display2.php'); 
        }
    } else {
        //$errmsg = "You need to select atleast one checkbox to delete!";
		header('Location:display2.php'); 
    }  
}
?>