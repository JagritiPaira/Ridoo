<? php

   $server = "MySQL 3306";
   $username = "root";
   $password = "";
   $dbname = "ride";

   $conn = mysqli_connect($server,$username,$password,$dbname );
   if(isset($_POST['upload'])){



   	if(!empty($_POST['Name']) && !empty($_POST['Phone']) && !empty($_POST['Address') && !empty($_POST['Anum']) && !empty( $_FILES['Afront']) && !empty($_FILES['Aback'])){

    $Name= $_POST['Name'];
	$Phone = $_POST['Phone'];
	$Address = $_POST['Address'];
	$Anum = $_POST['Anum'];
	$Afront = $_FILES['Afront'];
	$Aback = $_FILES['Aback'];


	  $query = "insert into bike(Name,Phone,Address,Anum,,Afront,Aback) values ('$Name' , '$Phone','$Address','$Anum','$Afront','$Aback')";

	$run = mysql_query($conn,$query) or die(mysql_error());

	if($run){

		echo "Successfully submit";
	}
	else{
		echo "not submitted";
	}
}
     else{
     	echo "all fields required";
     }


   	}

   

    
	


	
	// Database connection
	
	



?>