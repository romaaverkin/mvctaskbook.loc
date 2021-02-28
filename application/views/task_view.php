<section>
    <div class="container-xxl">
        <form action="/task/add/" method="post" enctype="multipart/form-data" id="addTaskForm">
            <legend>Новая задача</legend>
            <div class="mb-3">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Электронная почта"
                       aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Текст задачи</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Текст задачи"
                          rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Добавить задачу</button>
        </form>
    </div>
</section>