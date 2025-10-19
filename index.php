<?php
require_once "./database.php";
 

if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$matricule=$_POST['matricule'];
$email=$_POST['email'];


if ($fName!="" && $lName!="" && $matricule!="" && $email="") {
  
$query= "INSERT into students (firstname, lastname, matricule, email) values ('$fName', '$lName','$matricule','$email')";

$result= mysqli_query($connection, $query);



if($result)
{
   echo"<br><br><h1> Data saved successfully</h1>";
}

else{
   echo"<br><br><h1> Try again please</h1>";
}
   }

}


?>

<a href="form.html"><h3>Register a Student</h3></a>;

<?php
//QUERY TO SELECT STUDENTS FROM STUDENTS TABLE
$query="SELECT * FROM students";

//IMPLEMENT QUERY AND GET RESULTS
$result = mysqli_query($connection,$query);

//DECLARE AND DEFINE AN EMPTY ARRAY TO SAVE STUDENTS
$students = [];

//CHECK IF ANY STUDENT IS RETURNED FROM THE DATABASE
if (mysqli_num_rows($result)>0){

    //FETCH ALL RESULTS AND SAVE IN STUDENT ARRAY
    $students = mysqli_fetch_all($result,MYSQLI_ASSOC);
}

echo "<pre>";
print_r ($students);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <style>
        table,tr{
   border:1px solid #333;
   width :50%;
   border-collapse: collapse;
        }
     
        </style>
</head>
<body>
    <h1>Students</h1>

<table>
    <tr>
        <th>First Name</th>
         <th>Last Name</th>;
          <th>Matricule</th>;
           <th>Email</th>;
</tr>

<?php foreach($students as $student): ?>

<tr>
    <td><?=$student["firstname"]?></td>
 <td><?=$student["lastname"]?></td>
 <td><?=$student["matricule"]?></td>
 <td><?=$student["email"]?></td>
</tr>
<?php endforeach?>

</body>
</html>