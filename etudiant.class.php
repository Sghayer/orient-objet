<?php
 require 'dbconnect.class.php';
  class Etudiant
  {
    private $cnx;
    
    public function __construct(){
        $db = new BasesDonnees;
        $this->cnx = $db->connectDB();

    }

    public function readALLEtudiant(){
        try{
            $req='SELECT * FROM students';
            $result=$this->cnx->prepare($req);
            $result->execute();
            return $result;
        }
        catch(PDOException $e){
echo $e->getMessage();
        }
    }
        public function creatEtudiant($firstname,$lastname,$email,$phone){
            
            try{
                $req="INSERT INTO students(firstname,lastname,email,phone) values(:param_firstname,:param_lastname,:param_email,:param_phone)  ";
                $result=$this->cnx->prepare($req);
                $result->bindParam(':param_firstname',$firstname);
                $result->bindParam(':param_lastName',$lastname);
                $result->bindParam(':param_email',$email);
                $result->bindParam(':param_phone',$phone);

                $result->execute();
                return $result;
            }
            catch(PDOException $e){
    echo $e->getMessage();
            }
    }

public function deleteetudiant($id){
    try{
        $sql = 'DELETE FROM students where id = : clt_id';
        $result= $this->cnx->prepare($sql);
        $result->bindparam(":clt_id",$id);
        $result=execute();
    return $result;
    }catch(PDOException $exception){
    echo $exception->getMessage();
}
}
public function updateetudiant(){
    $ts= $this->cnx->prepare("UPDATE students SET firstname =:param_firstname, lastname =:param_lastname , email = :param, phone = :param_email, WHERE id =param_id");
    $result->bindParam(':param_firstname',$firstname);
    $result->bindParam(':param_lastname',$lastname);
    $result->bindParam(':param_email',$email);
    $result->bindParam(':param_phone',$phone);
    $result->bindParam(':param_id',$id);
    $result->execute();
}
}