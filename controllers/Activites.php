<?php

class Activites extends Controller{
    
    // Cette méthode affiche la liste des articles
    
    public function index(){
        // On instancie le modèle "Article"
        $this->loadModel('Activite');

        // On stocke la liste des articles dans $articles
        $activites = $this->Activite->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('activites'));
    }
}



?>