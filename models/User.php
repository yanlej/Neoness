<?php

session_start();

class User extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "users";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    public function new_inscription(){

        if(isset($_POST['name_bouton'])){

            function validate($data){
        
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $nom = validate($_POST['nom']);
            $prenom = validate($_POST['prenom']);
            $telephone = validate($_POST['telephone']);
            $date_naissance = validate($_POST['ddn']);
            $poids = validate($_POST['poids']);
            $taille = validate($_POST['taille']);
            $imc = $poids / (($taille/100)*($taille/100));
            $objectif = validate($_POST['objectif']);
            $mdp = validate($_POST['mdp']);
            $status = validate($_POST['status']);
        
        
            $req = "INSERT INTO users(nom, prenom, telephone, date_naissance, poids, taille, imc, objectif_poids, mdp, status) VALUES('$nom', '$prenom', '$telephone', '$date_naissance', '$poids', '$taille', '$imc', '$objectif', '$mdp', '$status')";
            
            $result = $this->_connexion->prepare($req);
            $result->execute();
        
            if($result){
        
                echo "<script>alert('Vous vous êtes bien été enregistré !')</script>";
        
            }else{
        
                echo "<p>Erreur</p>";
            }
        
            header("Refresh: 0.1; /");
        }
    }

    public function new_connexion(){

        if(isset($_POST['name_inscrit_bouton'])){

            function validate($data){
        
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $inscrit_nom = validate($_POST['inscrit_nom']);
            $inscrit_prenom = validate($_POST['inscrit_prenom']);
            $inscrit_mdp = validate($_POST['inscrit_mdp']);
        
            if($inscrit_nom !== "" && $inscrit_prenom !== "" && $inscrit_mdp !== ""){
        
                $requeteAdmin = "SELECT status FROM users WHERE nom = '".$inscrit_nom."' AND prenom = '".$inscrit_prenom."' AND mdp = '".$inscrit_mdp."'";

                $resAdmin = $this->_connexion->prepare($requeteAdmin);
                $resAdmin->execute();
                $resuAdmin = $resAdmin->fetch();
                $resuAdminStatus = $resuAdmin['status'];

                if($resuAdminStatus === 'admin' || $resuAdminStatus === 'Admin'){

                    $_SESSION['inscrit_nom'] = $inscrit_nom;
                    $_SESSION['inscrit_prenom'] = $inscrit_prenom;

                    header("Location: /users/admin");
                }
                else{

                    $requete = "SELECT count(*) FROM users WHERE nom = '".$inscrit_nom."' AND prenom = '".$inscrit_prenom."' AND mdp = '".$inscrit_mdp."'";
                
                    $res = $this->_connexion->prepare($requete);
                    $res->execute();
                    $resu = $res->fetch();

                    $count = $resu['count(*)'];
                
                    if($count != 0){
        
                        $_SESSION['inscrit_nom'] = $inscrit_nom;
                        $_SESSION['inscrit_prenom'] = $inscrit_prenom;

                        header("Location: /users/pagePerso");

                    }
                    else{
        
                        echo "<h2>Nom ou Mot de passe incorrect !</h2>";
                        header("Refresh: 3; /users/affichage_connexion");
                    }
                }

            }
            
            else{
        
              echo "<h2>Aucun nom ou mot de passe saisie !</h2>";
              header("Refresh: 3; /users/affichage_connexion");
            }
        
        }
    }

    public function getAllAdmin(){

        $sql = "SELECT *, YEAR(CURRENT_DATE) - YEAR(date_naissance) FROM users ";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function infosPerso(){

        $inscrit_nom = $_SESSION['inscrit_nom'];
        $inscrit_prenom = $_SESSION['inscrit_prenom'];

        $query = "SELECT *, YEAR(CURRENT_DATE) - YEAR(date_naissance) FROM users WHERE nom = '".$inscrit_nom."' AND prenom = '".$inscrit_prenom."'";
                    
        $reponse = $this->_connexion->prepare($query);
        $reponse->execute();
        $rep = $reponse->fetch();
        return $rep;

    }

    public function updateInfo(){

        if(isset($_POST['btn_modifier_perso'])){

            $nomUser = $_SESSION['inscrit_nom'];
            $prenomUser = $_SESSION['inscrit_prenom'];

            function validate($data){
        
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $tel = validate($_POST['modif_tel']);
            $poids = validate($_POST['modif_poids']);
            $taille = validate($_POST['modif_taille']);
            $imc = $poids / (($taille/100)*($taille/100));
            $objectif = validate($_POST['modif_objectif']);
            $mdp = validate($_POST['modif_mdp']);

            if($tel !== '' || $poids !== '' || $objectif !== '' || $mdp !== ''){

                $request = 'UPDATE `users` SET `telephone`= "'.$tel.'",`poids`= "'.$poids.'", `imc`= "'.$imc.'", `objectif_poids`= "'.$objectif.'",`mdp`= "'.$mdp.'" WHERE nom = "'.$nomUser.'" AND prenom = "'.$prenomUser.'"';
                $reponse = $this->_connexion->prepare($request);
                $reponse->execute();

                if($reponse){

                    header("Location: /users/pagePerso");
                }
                
            }else{

                echo '<script>alert("Veuillez remplir les champs vide svp")</script>';
            }

        }

        
    }

    public function deleteUser(){

        if(isset($_POST['btn_supp'])){

            $nomUser = $_SESSION['inscrit_nom'];
            $prenomUser = $_SESSION['inscrit_prenom'];

            $request = 'DELETE FROM `users` WHERE nom = "'.$nomUser.'" AND prenom = "'.$prenomUser.'"';
            $query = $this->_connexion->prepare($request);
            $query->execute();

            echo "<h1>Vous avez bien supprimé votre compte, bonne continuation à vous !</h1>";

            session_destroy();

            header('Refresh: 3 ; /');
        }
    }

    public function deleteUserAdmin(){

        if(isset($_POST['supp'])){

            function validate($data){
        
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $idUser = validate($_POST['id_users']);

            $request = 'DELETE FROM `users` WHERE id_users = "'.$idUser.'"';
            $query = $this->_connexion->prepare($request);
            $query->execute();

            header('Location: /users/admin');
        }
    }

    public function updateInfoAdmin(){

        if(isset($_POST['modif'])){

            function validate($data){
        
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $idUser = validate($_POST['id_users']);
            $nom = validate($_POST['nomAdmin']);
            $prenom = validate($_POST['prenomAdmin']);
            $tel = validate($_POST['telAdmin']);
            $ddn = validate($_POST['dateAdmin']);
            $poids = validate($_POST['poidsAdmin']);
            $taille = validate($_POST['tailleAdmin']);
            $imc = $poids / (($taille/100)*($taille/100));
            $objectif = validate($_POST['objectifAdmin']);
            $status = validate($_POST['statusAdmin']);

                $request = 'UPDATE `users` SET `nom`= "'.$nom.'",`prenom`= "'.$prenom.'", `telephone`= "'.$tel.'",`date_naissance`= "'.$ddn.'", `poids`= "'.$poids.'", `taille`= "'.$taille.'", `imc`= "'.$imc.'", `objectif_poids`= "'.$objectif.'", `status`= "'.$status.'" WHERE id_users = "'.$idUser.'"';
                $reponse = $this->_connexion->prepare($request);
                $reponse->execute();

                header('Location: /users/admin');

        }

        
    }
}

?>