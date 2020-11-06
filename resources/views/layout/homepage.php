<?php


require __DIR__.'/header.php';

?>

                <div class="wrapper">
                    <ul class="characters-list">
                        <?php foreach($characters as $key): ?>
                        <li class="character-card">
                            <a href="character/<?= $key['id'] ?>">
                                <div class="avatar" style="background: #e3e3e3;">
                               <img src="assets/img/<?=$key['image'];?>">

                                </div>
                                <div class="name">
                                <?= $key['last_name']." ".$key['first_name']; ?>
                                </div>
                                </a>
                        </li>

                        <?php endforeach ?>
                    </ul>
                </div>
        </main>
    </body>
</html>
