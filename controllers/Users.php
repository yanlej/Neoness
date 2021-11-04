<?php

class Users extends Controller{
    
    // Cette méthode affiche la liste des utilisateurs
    
    public function index(){
        // On instancie le modèle "Article"
        $this->loadModel('User');

        // On stocke la liste des articles dans $users
        $users = $this->User->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('users'));
    }

    public function admin(){

        $this->loadModel('User');

        $users = $this->User->getAllAdmin();
        $this->User->deleteUserAdmin();

        $this->render('admin', compact('users'));
    }

    public function DeleteUpdateAdmin(){

        $this->loadModel('User');

        $this->User->deleteUserAdmin();
        $this->User->updateInfoAdmin();
    }

    public function affichage_inscription(){

        $this->render('inscription');
    }

    public function affichage_connexion(){

        $this->render('connexion');
    }

    public function login(){

        $this->loadModel('User');

        $this->User->new_connexion();
    }

    public function inscription(){

        $this->loadModel('User');

        $this->User->new_inscription();
    }

    public function pagePerso(){

        $this->loadModel('User');

        $user = $this->User->infosPerso();

        $this->render('pagePerso', compact('user'));
    }

    public function update(){

        $this->loadModel('User');

        $this->User->updateInfo();

    }

    public function delete(){

        $this->loadModel('User');
        
        $this->User->deleteUser();
    }
}

?>