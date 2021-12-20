
<!DOCTYPE html>
<html>
  <head>
    <style>
      
body {
  margin: 0;
  padding: 0;
  font-family: montserrat;
  height: 100vh;
  overflow: hidden;
  background-image: url(../WEB/css/p.jpg);
  background-size: cover;
  background-attachment: fixed;
}
p {
  text-align: center;
  padding: 0 0 20px 0;
  font-style: bold;
  color: white;
  font-size: 100px;
  top: 5%;
  left:35%;
  position: absolute;
  display: block;
}
.utama {
  position: absolute;
  top: 40%;
  left: 40%;
  transform: translate (-50%, -50%);
  width: 400px;
  text-align: center;
  align-items: center;
  background: white;
  border-radius: 10px;
}
.utama h1 {
  text-align: center;
  padding: 0 0 20px 0;
  border-bottom: 1px solid silver;
}
.utama form {
  padding: 0 40px;
  box-sizing: border-box;
}
form .text {
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.text input {
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.text label {
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.text span::before {
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 100%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.text input:focus ~ label,
.text input:valid ~ label {
  top: 5px;
  color: #2691d9;
}
.text input:focus ~ span::before,
.input input:valid ~ span::before {
  width: 100%;
}
.submit {
  width : 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border -radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
}
.submit {
  border-color: #2691d9;
  transition: .5s;
}
.level {
  width : 100%;
  height: 40px;
  border: 1px solid;
  background: #2691d9;
  border -radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  margin-bottom: 20px;
}
.level {
  border-color: #2691d9;
  transition: .5s;
}
    </style>
    <title>Login</title>
  </head>
  <body>
    <p>Selamat Datang</p>
    <div class="utama">
      <h1>Login</h1>
      <form method="POST" action="../WEB/LOGIN/pilih.php">
        <div class="text">
          <input type="text" name="username" required/>
          <span></span>
          <label>Username</label>
        </div>
        <div class="text">
          <input type="password" name="password"required/>
          <span></span>
          <label>Password</label>
        </div>
        <td><select class="level" name="level">
          <option value="Pegawai">Pegawai</option>
          <option value="Admin">Admin</option>
        </select></td>
        <input class="submit" name="flog" type="submit" value="Login"/>
      </form>
    </div>
  </body>
</html>