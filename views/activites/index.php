<ul>

<?php foreach($activites as $activite): ?>

    <li>
        <p><?= $activite['date'] ?></p>
        <p><?= $activite['temps'] ?></p>
    </li>
    

<?php endforeach ?>

</ul>
