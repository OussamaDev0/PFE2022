<?php
 require_once 'dbconn.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $id_user=test_input($_POST['id_user']);
                $user_rating=test_input($_POST['user_rating']);
                $user_review=test_input($_POST['user_review']);
                $id_produit=test_input($_POST['id_produit']);
                $date_time=strtotime(date("Y-m-d h:i:sa"));
                $subReq=$pdo->prepare("INSERT INTO product_review (id_user,id_produit,user_rating,user_review,date_time) VALUES (?,?,?,?,?)");
                $params=array($id_user,$id_produit,$user_rating,$user_review,$date_time);
                $subReq->execute($params);
        }
        header("location:logged_in_for-each-image.php?productID=".$id_produit);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}