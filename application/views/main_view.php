<section class="mb-5 tasks">
    <div class="container-xxl">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <td>Имя</td>
                    <td>Почта</td>
                    <td>Задача</td>
                    <td>Статус</td>
                </tr>
                <?php foreach ($data as $task): ?>
                    <tr>
                        <td><?= $task['login'] ?></td>
                        <td><?= $task['email'] ?></td>
                        <td><?= $task['task'] ?></td>
                        <td><?= $task['performed'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>
