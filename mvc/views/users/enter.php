
<h1>Данный логин/пароль в системе не найден! Введите данные повторно или зарегистрируйтесь</h1>
<form action="/users/finduser" method="post">
    <label>
        Email  <input type="text" name="login">
    </label>
    <br><br>
    <label>
      Пароль  <input type="text" name="password">
    </label>
    <br><br>
    <label>
        <input type="submit" value="Войти">
    </label>
</form>
<form action="/users/create" method="post">
    <label>
        <input type="submit" value="Зарегестрироваться">
    </label>
</form>

