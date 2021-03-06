<div class="container-xxl">
    <h3><?= $data ?></h3>
</div>
<div class="container-xxl">
    <div class="row">
        <div class="panel-heading">Пожалуйста авторизуйтесь</div>
        <form action="/user/login/" method="post" enctype="multipart/form-data" id="addTaskForm">
            <div class="form-group">
                <label for="name">Логин</label>
                <input type="text" class="form-control" id="name" name="user" placeholder="Логин" required>
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Электронная почта"
                       required>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary pull-right">Зарегистрироваться</button>
        </form>
    </div>
</div>