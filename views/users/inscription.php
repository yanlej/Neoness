<form method = 'POST' action ="/users/inscription" class="form_connexion_inscription">

    <fieldset>

        <legend>Inscription à NeoNess</legend>

            <p>
                <label for="id_nom">Nom :</label>
                <input type="text" name="nom" id="id_nom" required>
            </p>

            <p>
                <label for="id_prenom">Prénom :</label>
                <input type="text" name="prenom" id="id_prenom" required>
            </p>

            <p>
                <label for="id_tel">N° de téléphone :</label>
                <input type="tel" name="telephone" id="id_tel"required>
            </p>

            <p>
                <label for="id_date_de_naissance">Date de naissance :</label>
                <input type="date" name="ddn" id="id_date_de_naissance"required>
            </p>

            <p>
                <label for="id_poids">Votre poids (en kg):</label>
                <input type="number" name="poids" id ="id_poids" required>
            </p>

            <p>
                <label for="id_taille">Votre taille (en centimétre) :</label>
                <input type="number" name="taille" id="id_taille" required>
            </p>

            <p id="id_bouton_imc">
                <button type="button" id="bouton_imc" class = "btn btn-outline-success">Calculez votre IMC</button>
                <span id="imc"></span>
            </p>

            <p>
                <label for="id_objectif">Votre objectif de poids :</label>
                <input type="number" name="objectif" id="id_objectif" required>
            </p>

            <p>
                <label for="id_mdp">Mot de passe :</label>
                <input type="password" name="mdp" id="id_mdp" required>
            </p>

            <p>
                <input type="hidden" name="status" id="id_status" value="adherent">
            </p>

            <input type="submit" name="name_bouton" class = "btn btn-outline-danger" value="Envoyez">

    </fieldset>
</form>

<script src="/JS/jquery-3.6.0.js"></script>
<script src="/JS/index.js"></script>