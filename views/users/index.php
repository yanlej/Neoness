<table class ="table">

    <thead class="table-danger">
        <tr>
            <td class = "tdHead">Nom</td>
            <td class = "tdHead">Prenom</td>
            <td class = "tdHead">Telephone</td>
            <td class = "tdHead">Date de naissance</td>
            <td class = "tdHead">Poids</td>
            <td class = "tdHead">Taille</td>
            <td class = "tdHead">Objectif poids</td>
            <td class = "tdHead">Mot de passe</td>
            <td class = "tdHead">Status</td>
        </tr>
    </thead>

    <tbody>

        <?php foreach($users as $user): ?>
            <tr>
                <td class= "tdBody"><?= $user['nom'] ?></td>
                <td class= "tdBody"><?= $user['prenom'] ?></td>
                <td class= "tdBody"><?= $user['telephone'] ?></td>
                <td class= "tdBody"><?= $user['date_naissance'] ?></td>
                <td class= "tdBody"><?= $user['poids'] ?></td>
                <td class= "tdBody"><?= $user['taille'] ?></td>
                <td class= "tdBody"><?= $user['objectif_poids'] ?></td>
                <td class= "tdBody"><?= $user['mdp'] ?></td>
                <td class= "tdBody"><?= $user['status'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>   