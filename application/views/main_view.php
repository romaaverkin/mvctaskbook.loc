<section class="mb-5 tasks">
    <div class="container-xxl">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <td>Id</td>
                    <td>Имя</td>
                    <td>Почта</td>
                    <td>Задача</td>
                    <td>Статус</td>
                </tr>
                <?php foreach ($data as $task): ?>
                    <tr>
                        <td><?= $task['id'] ?></td>
                        <td><?= $task['login'] ?></td>
                        <td><?= $task['email'] ?></td>
                        <td><?= $task['task'] ?></td>
                        <td>
                            <?php if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'):?>
                                <p class="checkbox">
                                    <label>
                                        <input type="checkbox" data-task-id="<?=$item['id']?>" <?=$item['status'] == 1 ? 'checked' : '';?>> Task complete
                                    </label>
                                </p>
                                <hr>
                            <?php endif;?>
                            <h4><span class="label label-success pull-right"><?=$item['status'] > 0 ? 'Success' : ''?></span></h4>

                            <?php if(isset($_SESSION['user']) && $_SESSION['user'] == 'admin'):?>
                                <?php if($task['performed']):?>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Выполнена</label>
                                <?php else:?>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Не выполнена</label>
                                <?php endif;?>
                            <?php else:?>
                                Не выполнена
                            <?php endif?>

                            <?php if($task['performed']):?>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Выполнена</label>
                            <?php else:?>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Не выполнена</label>
                            <?php endif;?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="pagination my_pagination">
            <?php if ($page > 1): ?>
                <a href="/?sort=<?= $sorting ?>&sort_type=<?= $sorting_type ?>&page=<?= $page - 1 ?>"
                   class="btn btn-primary"><<</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_page; $i++): ?>
                <a href="/?sort=<?= $sorting ?>&sort_type=<?= $sorting_type ?>&page=<?= $i ?>"
                   class="btn btn-primary"><?= $i ?></a>
            <?php endfor; ?>
            <?php if ($i - 1 > $page): ?>
                <a href="/?sort=<?= $sorting ?>&sort_type=<?= $sorting_type ?>&page=<?= $page + 1 ?>"
                   class="btn btn-primary">>></a>
            <?php endif; ?>
        </div>
    </div>
</section>
