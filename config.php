<?php 
$DB_HOST = 'localhost:3306';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'bookmaniac';

//create connection
$db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$db=mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
/*if(isset($_POST['btnsubmit1']))

 {
 	
 	echo "<script type='text/javascript'>
			                alert('Welcome to BookManiac!!!');
			                window.location.href='http://localhost/BookManiac/category.php'</script>";
			                 

 }
*/

if(isset($_POST['btnsubmit']))
{
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];
		$mypassword1=$_POST['password1'];

		$mysubmit=$_POST['btnsubmit'];


		$q = mysqli_query($db,"SELECT User_Name FROM jacksparrow WHERE User_Name='$myusername'");
		$row = mysqli_fetch_array($q); 
		$username = $row['User_Name'];


		echo "<br>";


			  if ($username == $myusername)
			  {
			      echo "<script type='text/javascript'>
			      alert('User already exists...Please login to continue')
			      window.location.href='http://localhost/BookManiac/login.php'
			      </script>";
			      
			 }
			else
			{
			        $query = "INSERT INTO jacksparrow (User_Name,Password)
			        VALUES ('$myusername','$mypassword')";
			        
			        
			          echo "<script type='text/javascript'>
			                alert('Registration successful...Welcome to BookManiac!!!');
			                window.location.href='http://localhost/BookManiac/category.php'

			        </script>";
			        
			        
			        mysqli_query($db,$query);


			}


  //mysqli_close($db);
}
else if(isset($_POST['btnsubmit1']))
{
	$myusername1=$_POST['uname'];
	$mypass1=$_POST['pass'];
	$mysubmit1=$_POST['btnsubmit1'];


		$q = mysqli_query($db,"SELECT User_Name, password FROM jacksparrow WHERE User_Name='$myusername1' AND password='$mypass1'");
		$row = mysqli_fetch_array($q); 
		$uname = $row['User_Name'];
		$pass=$row['password'];


		echo "<br>";


			  if ($uname == $myusername1 && $pass=$mypass1)
			  {
			      echo "<script type='text/javascript'>
			      alert('Welcome to Medicio!!')
			      window.location.href='http://localhost/BookManiac/category.php'
			      </script>";
			      


			      
			 }
			 else
			 {
			 	echo "<script type='text/javascript'>
			      alert('Please Enter valid data')
			      window.location.href='http://localhost/BookManiac/login.php'
			      </script>";

			  mysqli_query($db,$query);
			}
	 mysqli_close($db);
}



?>
