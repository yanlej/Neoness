<table class ="table">

    <thead class="table-danger">
        <tr>
            <td class = "tdHead">#</td>
            <td class = "tdHead">Nom</td>
            <td class = "tdHead">Prenom</td>
            <td class = "tdHead">Telephone</td>
            <td class = "tdHead">Date de naissance</td>
            <td class = "tdHead">Poids</td>
            <td class = "tdHead">Taille</td>
            <td class = "tdHead">IMC</td>
            <td class = "tdHead">Objectif poids</td>
            <td class = "tdHead">Mot de passe</td>
            <td class = "tdHead">Status</td>
            <td class = "tdHead">Modifier</td>
            <td class = "tdHead">Supprimer</td>
        </tr>
    </thead>

    <tbody>

        <?php 

        $nbreUsers = 1;

        foreach($users as $user): ?>

            <form method="POST" action="/users/DeleteUpdateAdmin">

                <tr>
                    <input type="hidden" name="id_users" value="<?= $user['id_users']?>">
                    <td class= "whitesmoke"><?= $nbreUsers ++ ?></td>
                    <td class= "whitesmoke"><input type="text" name="nomAdmin" value="<?= $user['nom'] ?>" class = "inputAdmin" required></td>
                    <td class= "whitesmoke"><input type="text" name="prenomAdmin" value="<?= $user['prenom'] ?>" class = "inputAdmin" required></td>
                    <td class= "whitesmoke"><input type="tel" name="telAdmin" value="<?= $user['telephone'] ?>" class = "inputAdmin" required></td>
                    <td class= "whitesmoke"><input type="date" name="dateAdmin" value="<?= $user['date_naissance'] ?>" required></td>
                    <td class= "whitesmoke"><input type="number" name="poidsAdmin" value="<?= $user['poids'] ?>" class = "inputAdmin" required></td>
                    <td class= "whitesmoke"><input type="number" name="tailleAdmin" value="<?= $user['taille'] ?>" class = "inputAdmin" required></td>
                    <td class= "whitesmoke"><?= $user['imc'] ?></td>
                    <td class= "whitesmoke"><input type="number" name="objectifAdmin" value="<?= $user['objectif_poids'] ?>" class = "inputAdmin" required></td>
                    <td class= "whitesmoke"><?= $user['mdp'] ?></td>
                    <td class= "whitesmoke"><input type="text" name="statusAdmin" value="<?= $user['status'] ?>" class = "inputAdmin" required></td>
                    <td><input type="submit" name="modif" class = "btn btn-success" value="Modifier" onclick="return confirm('Etes-vous sur de vouloir modifier cet utilisateur ?')"></td>
                    <td><input type="submit" name="supp" class = "btn btn-warning" value="Supprimer" onclick="return confirm('Voulez vous vraiment supprimer cette utilisateur ?')"></td>
                </tr>

            </form>

        <?php endforeach ?>
    </tbody>

</table>