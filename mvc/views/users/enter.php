
<h1>Введите логин / пароль</h1>
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
        <input type="submit" value="Зарегистрироваться">
    </label>
</form>
