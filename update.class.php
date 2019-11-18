
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div class="container">
    <h2>student</h2>
    <table class="table">
    <thead>
        
        <tr>
        <th>Id</th>    
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead> 


<a href="create.php" class="btn btn-primary"> Ajouter</a>
<?php
     $rep = $cnx->prepare('SELECT * FROM students');
        while ($result = $rep->fetch())
            {
              echo "<tr>";
                echo "<td>".$result['id'] . "</td>";
                echo "<td>".$result['firstname'] . "</td>";
                echo "<td>".$result['lastname'] . "</td>";
                echo "<td>".$result['email'] . "</td>";
                echo "<td>".$result['phone'] . "</td>";
				echo "<td><a href='edit.php?id=".$result['id']."' class='btn btn-primary'> Update</a></td>";
				echo "<td><a href='delete.php?id=".$result['id']."' class='btn btn-primary'> Delete</a></td>";
              echo "</tr>";
            }

?>  
</table>
</div>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php 
require 'etudiant.class.php';
$ts= $this->cnx->prepare("UPDATE students SET firstname =:param_firstname, lastname =:param_lastname , email = :param, phone = :param_email, WHERE id =param_id");
$result->bindParam(':param_firstname',$firstname);
$result->bindParam(':param_lastname',$lastname);
$result->bindParam(':param_email',$email);
$result->bindParam(':param_phone',$phone);
$result->bindParam(':param_id',$id);
$result->execute();
?>