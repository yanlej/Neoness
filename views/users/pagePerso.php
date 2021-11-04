<h1 class= "whitesmoke">Bonjour <?php echo $user['nom'] ?> <?php echo $user['prenom'] ?>, voici vos <span class = "colorInfo">informations :</span></h1>
<br>

<form method = "POST" action ="/users/update" class="formModifPagePerso">

<table class ="table">

    <thead class="table-danger">
        <tr>
            <td class = "tdHead">Nom</td>
            <td class = "tdHead">Prenom</td>
            <td class = "tdHead">Telephone</td>
            <td class = "tdHead">Age</td>
            <td class = "tdHead">Poids</td>
            <td class = "tdHead">Taille</td>
            <td class = "tdHead">IMC</td>
            <td class = "tdHead">Objectif poids</td>
            <td class = "tdHead">Mot de passe</td>
            <td class = "tdHead">Modifier</td>
        </tr>
    </thead>

    <tbody>

            <tr>
                <td class= "whitesmoke"><?php echo $user['nom'] ?></td>
                <td class= "whitesmoke"><?php echo $user['prenom'] ?></td>
                <td class= "whitesmoke"><input type="tel" name="modif_tel" value = "<?php echo $user['telephone'] ?>" required></td>
                <td class= "whitesmoke"><?php echo $user['YEAR(CURRENT_DATE) - YEAR(date_naissance)'] ?></td>
                <td class= "whitesmoke"><input type="number" name="modif_poids" id="modif_poids" value="<?php echo $user['poids'] ?>" required></td>
                <td class= "whitesmoke"><?php echo $user['taille'] ?><input type="hidden" name="modif_taille" id="modif_taille" value="<?php echo $user['taille'] ?>"></td>
                <td class= "whitesmoke"><?php echo $user['imc'] ?></td>
                <td class= "whitesmoke"><input type="number" name="modif_objectif" value="<?php echo $user['objectif_poids'] ?>" required></td>
                <td class= "whitesmoke"><input type="password" id="password" name="modif_mdp" value="<?php echo $user['mdp'] ?>" required>
                                                <label for="checkbox"><input type="checkbox" id="checkbox" class="check"></label></td>
                <td><input type = "submit" name="btn_modifier_perso" value ="Modifier" class ="btn btn-outline-light" onclick="return confirm('Voulez vous vraiment modifier ?')"></td>
            </tr>
    </tbody>

</table>

</form>

<form method="POST" action = "/users/delete">

<label for = "delete_info">
    <span class = "whitesmoke">Si vous voulez supprimez votre compte, cliquer sur </span>
    <input type = "submit" name="btn_supp" value ="Supprimer" class ="btn btn-danger" onclick="return confirm('Voulez vous vraiment supprimer ?')">
</label>

</form>

<br>

<h4 class = "colorTextInfoPerso">Vous avez <?php echo $user['YEAR(CURRENT_DATE) - YEAR(date_naissance)'] ?> ans, vous faites <?php echo $user['taille'] ?> cm pour un poids de <?php echo $user['poids'] ?> kg.<br>
                        <span id = "imcPagePerso"></span><br>
                        Vous pouvez modifié certaine de vos informations dans le tableau ci-dessus à tous moment !<br>
                        Pour tout autre modification de votre profil (hors mot de passe), veuillez contacté un administrateur.<br>
                        L'équipe de Neoness Sport vous souhaite une bonne séance en notre compagnie .
</h4>

<script src="/JS/jquery-3.6.0.js"></script>
<script src="/JS/index.js"></script>