<?php

class Activite extends Model{

    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "activites";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }
}

?>