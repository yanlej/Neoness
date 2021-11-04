<form method="POST" action="/users/login" class ="form_connexion_inscription">

    <fieldset>

        <legend>Déjà inscrit ?</legend>

            <p>
                <label for="id_inscrit_nom">Nom :</label>
                <input type="text" name="inscrit_nom" id="id_inscrit_nom" required>
            </p>

            <p>
                <label for="id_inscrit_prenom">Prenom :</label>
                <input type="text" name="inscrit_prenom" id="id_inscrit_prenom" required>
            </p>

            <p>
                <label for="id_inscrit_mdp">Mot de passe :</label>
                <input type="password" name="inscrit_mdp" id="password" required>
                <label for="checkbox"><input type="checkbox" id="checkbox" class="check"></label>
            </p>

            <input type="submit" name="name_inscrit_bouton" class = "btn btn-outline-danger" value="Identifiez">

    </fieldset>

</form>

<script src="/JS/jquery-3.6.0.js"></script>
<script src="/JS/index.js"></script>