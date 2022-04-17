<?php require_once 'securityProfile.php'; ?>
<?php
    require_once 'dbconn.php';
    session_start();
    $iduser=$_SESSION['PROFILE']['id_user'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ville_nom=test_input($_POST['ville_nom']);
            $ville_nom_reg=test_input($_POST['ville_nom_reg']);
            $ville_cp=test_input($_POST['ville_cp']);
            $cli_nom=test_input($_POST['cli_nom']);
            $cli_prenom=test_input($_POST['cli_prenom']);
            $cli_tel=test_input($_POST['cli_tel']);
            $cli_adresse=test_input($_POST['cli_adresse']);

            $requetVille=$pdo->prepare("INSERT INTO ville(ville_cp,ville_nom,ville_nom_reg) VALUES (?,?,?)");
            $params=array($ville_cp,$ville_nom,$ville_nom_reg);
            $requetVille->execute($params);
            $idVilleRequete=$pdo->prepare("SELECT id_ville FROM ville WHERE(ville_cp=? AND ville_nom=? AND ville_nom_reg=?)");
            $idVilleRequete->execute($params);
            $idVille=$idVilleRequete->fetch();

            $params2=array($cli_nom,$cli_prenom,$cli_adresse,$cli_tel,$idVille['id_ville'],$iduser);
            $requetAjoutClient=$pdo->prepare("INSERT INTO client(cli_nom,cli_prenom,cli_adresse,cli_tel,id_ville,id_user) VALUES (?,?,?,?,?,?)");
            $requetAjoutClient->execute($params2);
            header("location:profile.php");
        }


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
