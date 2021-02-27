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
                        <td><?= $task['performed'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div>
            <?php for ($i = 1; $i <= $total_page; $i++): ?>
                <a href="/?sort=<?= $sorting ?>&sort_type=<?= $sorting_type ?>&page=<?= $i ?>"><?= $i ?></a>
            <?php endfor; ?>
        </div>
    </div>
</section>
