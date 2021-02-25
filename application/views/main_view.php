<section class="mb-5 tasks">
    <div class="container-xxl">
        <div class="row">
            <?php foreach ($data as $task):?>
            <div class="col-sm">
                <div class="card" style="width: 25rem;">
                    <div class="card-header">
                        <?= $task['performed'] ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $task['login'] ?></li>
                        <li class="list-group-item"><?= $task['email'] ?></li>
                        <li class="list-group-item"><?= $task['task'] ?></li>
                    </ul>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>