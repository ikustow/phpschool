<!DOCTYPE html>
<h1>Добро пожаловать {{user.name}}</h1>
<form>
    <label>
        Email  <input type="text" name="login" value={{user.email}}>
    </label>
    <br><br>
   <label>
        Имя  <input type="text" name="name" value={{user.name}}>
    </label>
    <br><br>
    <label>
        Возраст  <input type="text" name="age" value={{user.age}}>
    </label>
    <br><br>
    <label>
        О себе  <input type="text" name="info" value={{user.info}}>
    </label>
    <br><br>
    <label>
        Аватар  <input type="text" name="avatar" value={{user.avatar}}>
    </label>
    <br><br>
   </form>
<form action="/users/loadpicture" method="post">
    </label>
        <input type="submit" value="Загрузить картинку">
    </label>
</form>