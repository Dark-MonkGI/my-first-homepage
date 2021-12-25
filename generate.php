<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		function write(text){
	  		document.getElementById("info").innerHTML = text;

		}

		function readInt(pr){
		    var number = document.getElementById(pr).value;
		    return parseInt(number);
		}

		function guess(){

		    var userAnswer = readInt("userAnswer");
		    get_password(userAnswer);
		}

		function hide(){
			const inputElement1 = document.querySelector("#userAnswer");
   			inputElement1.value = "";
			/*const arr = ["button","userAnswer"];
			for (let i = 0; i < arr.length; i++) {
				document.getElementById(arr[i]).style.display = "none";
			}*/

		}

		function get_password(pass){
			    if(pass > 10) pass = 10;
			    pass = pass * (-1);
			    let g = Math.random().toString(36).slice(pass);
			    write("Ваш пароль: " + g);
			    hide();
		}
	</script>
</head>
<body>

<div class="content">
	<div class="header">
		<a href="index.html">Главная</a>
		<a href="puzzle.html">Загадки</a>
		<a href="guess.html">Угадайка</a>
		<a href="generate.html">Генератор паролей</a>
	</div>
	


<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор:</h1>

			<div class="box">

				<p id="info">Введите число, равное желаемой длине пароля, но не более десяти.</p>
				<input type="text" id="userAnswer">

				<br>
				<a href="#" onClick="guess();" id="button">Ответить</a>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date ("y");?> Ilya_DM
<div>


</body>
</html>