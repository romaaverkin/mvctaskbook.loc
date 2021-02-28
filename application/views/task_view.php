<div class="container-xxl">
    <div class="row">
        <div class="panel-heading">Новая задача</div>
        <form action="/task/add/" method="post" enctype="multipart/form-data" id="addTaskForm">
            <div class="form-group">
                <label for="name">Логин</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Логин" required>
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Электронная почта"
                       required>
            </div>
            <div class="form-group">
                <label for="task">Задача</label>
                <textarea class="form-control" rows="3" id="task" name="task" placeholder="Текст задачи"
                          required></textarea>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary pull-right">Новая задача</button>
        </form>
    </div>
</div>