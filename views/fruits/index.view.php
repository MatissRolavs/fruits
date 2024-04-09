<h1>FRUITS</h1>

<ul>
<?php foreach ($fruits as $fruit){ ?>
    <li>
        One <a href="/show?id=<?= $fruit["id"] ?>"><?= $fruit["name"] ?></a> has <?= $fruit["calories"] ?> calories
        <form class="delete-form" method="POST" action="/delete">
            <button>Delete</button>
        </form>
    </li>
<?php } ?>
</ul>