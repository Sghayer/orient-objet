<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php 
class BasesDonnees
{
    private $host='localhost';
    private $dbname='dsi21_g2_2019';
    private $user='root';
    private $pwd='';


    public $connexion = null;


    public function connectDB()
     {
        try { 
         $this->connexion= new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);

         } catch (PDOException $e) { 
                echo $e->getMessage();
         } 
return $this->connexion;
    }
}
 
?> 
</body>
</html>