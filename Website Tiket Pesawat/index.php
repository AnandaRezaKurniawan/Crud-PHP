
<html>
<head>
  <title>LOGIN APLIKASI PENJUALAN TIKET PESAWAT dan KERETA API</title>
</head>
<style>
* {
font-family: 'Open Sans';
font-size:100%;
margin: 0;
padding: 0;
}
body {
background-image: url('halaman/image/bandara.jpg');
background-repeat: no-repeat;
background-size: 1519px 730px;
}
input:focus {
outline: none;
}
form {
background:#brown;
border-radius:10px;
padding:20px;
padding-top:30px;
width:300px;
margin:0 auto;
margin-top: 50px;
box-shadow:0px 15px 30px #40403d;
}
h1 {
text-align:center;
font-size:2.0em;
font-weight:700;
color:white;
margin-bottom:24px;
}
h1:hover{
font-size:2.4em;
}
input {
width:250px;
background:#c7ccd0;
border:0;
padding:20px;
border-radius:10px;
margin-bottom: 5px;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
color: black;
font-style: italic;
}
::-moz-placeholder { /* Firefox 19+ */
color: white;
font-style: italic;
}
:-ms-input-placeholder { /* IE 10+ */
color: white;
font-style: italic;
}
:-moz-placeholder { /* Firefox 18- */
color: white;
font-style: italic;
}
.btn {
width: 290px;
padding:20px;
border-radius:10px;
border:0;
background:#326799;
font-size:1.2em;
color:#fff;
box-shadow:0px 3px 0px #0b4072;
cursor: pointer;
}
.btn:active {
top:3px;
box-shadow:none;
outline: none;
}

	.war {
		color:white;
}
</style>
</style>
	<title>Aplikasi Tiket</title>
</head>
<body>
  <h1>SELAMAT DATANG di APLIKASI PENJUALAN TIKET PESAWAT dan KERETA API</h1>
	<div>
		<form action="proseslogin.php" method="POST">
				<h1>Silakan Login</h1>
				<br>
      <label>Username</label>
      <input type="text" name="username" placeholder="Username .." required="required">
 		<br>
      <label>Password</label>
      <input type="password" name="password" placeholder="Password .." required="required">
      <br><br>
				<input type="submit" name="submit" value="login" class="btn">
				<center><a href="register.php" class="war" >Daftar Akun</a></center>

		</form>
	</div>
</body>
</html>