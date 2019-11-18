<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
          <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name </th>
                    <th> Email </th>
                    <th>Phone</th>
                    <th>Operation</th>
                
                </tr>
          </thead>
          <a href="create.php" class="btn btn-primary"> Ajouter</a>
    <tbody>
   <?php
   include 'etudiant.class.php';
   $etudiant= new Etudiant;
   $listetud= $etudiant->readALLEtudiant();
   while($data= $listetud->fetch()){
    ?>
    <tr>
    <td><?= $data['id'] ?></td> 
    <td><?= $data['firstname'] ?></td> 
    <td><?= $data['lastname'] ?></td> 
    <td><?= $data['email'] ?></td> 
    <td><?= $data['phone'] ?></td> 
    <td><a href="update.class.php" class="btn btn-primary"> update</a>
    <a href="delete.class.php" class="btn btn-primary">delete</a></td>
    </tr>
    <?php
    
   }
            ?>
        </tbody>
    </table>
</body>
</html>