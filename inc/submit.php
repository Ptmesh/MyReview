<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $review=$_POST["review"];

    try{
        require_once "db.php";

        $query="INSERT INTO clients ( username , email , review) VALUES (:username , :email , :review);";
        
        $stmt=$pdo->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":review",$review);

        $stmt->execute();

        $pdo=null;
        $stmt=null;

        header("Location:../index.php");

    }catch(PDOException $e){
        die("Query Failed!" . $e->getMessage());
    }

}else{
    header("Location:../index.php");
}