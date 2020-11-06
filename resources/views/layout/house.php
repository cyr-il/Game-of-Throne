<?php
require __DIR__.'/header.php';
?>

<h2><?= $detailhouse['name'] ?></h2>


<ul class="characters-list">
    <?php foreach ($detailhouse['character'] as $character ) : ?>
                <li class="character-card">
                    <a href="/character/<?= $character['id'] ?>">
                        <div class="avatar" style="background: #<?= $detailhouse['colour'] ?>;">

                            <img src="/assets/img/<?= $character['image'] ?>" alt="<?= $character['first_name'] ?>">
                        </div>
                        <div class="name">
                            <?= $character['first_name']." ". $character['last_name']?>
                        </div>
                        </a>
                </li>
                <?php endforeach ?>
            </ul>
        </main>
    </body>
</html>
