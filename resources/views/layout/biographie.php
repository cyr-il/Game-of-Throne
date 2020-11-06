<?php


require __DIR__.'/header.php';


?>

                <section class="character-page">
                    <div class="col-8">
                            <h2><?= $detail['first_name']." ". $detail['last_name']?></h2>
                            <div class="bio">
                                <h3>Biographie</h3>
                                <p><?=$detail['biography'] ?></p>
                            </div>
                    </div>
                    <div class="col-4">
                    <?php foreach ($detail['house'] as $key) : ?>
                            <div class="avatar" style="background: #<?=$key['colour'];?>;">
                            <?php endforeach ?>
                                <img src="/assets/img/<?=$detail['image'];?>" alt="<?=$detail['first_name'];?>">
                            </div>
                            <div class="infos">
                                <h3>Maisons</h3>
                                <div class="houses">

                                    <ul>
                                        <?php foreach ($detail['house'] as $key) : ?>
                                        <li class="house-logo" style="background: #<?=$key['colour'];?>;">
                                            <a href="/house/<?=$key['id'];?>">
                                                <img src="/assets/img/houses/<?=$key['image'];?>" alt="<?=$key['name'];?>">
                                            </a>
                                        </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                <ul class="meta">
                                    <li><span>Rang : </span><?=$detail['title']['name'];?></li>
                                    <li><span>Mère : </span><?=$detail['mother']['first_name']." ". $detail['mother']['last_name'];?></li>
                                    <li><span>Père : </span><?=$detail['father']['first_name']." ". $detail['father']['last_name'];?></li>
                                </ul>
                            </div>
                        </div>
                </section>
            </div>
        </main>
    </body>
</html>
