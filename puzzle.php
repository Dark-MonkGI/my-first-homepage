<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GeekBrains Student Homepage</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var score = 0;

		function checkAnswer(inputId, answers){
			var userAnswer = document.getElementById(inputId).value;
			userAnswer = userAnswer.toLowerCase();
			for(var i = 0; i < answers.length; i++){
				if(userAnswer == answers[i]){
					score++;
					break;
				}
			}
		}

		function write(text){
   			document.getElementById("end").innerHTML = text;
   		}

		function checkAnswers() {
			score = 0;
			checkAnswer("userAnswer1", ["волна", "волны"]);
			checkAnswer("userAnswer2", ["елка", "ёлка", "доллар"]);
			checkAnswer("userAnswer3", ["лиса", "лис"]);
			write('Отгаданно загадок: ' + score + '<br>Правильные ответы:<br>"Волны, Елка, Лиса".');
			const inputElement1 = document.querySelector("#userAnswer1");
			//Так ты получаешь доступ к элементу с определенным классом.
			inputElement1.value = "";
			const inputElement2 = document.querySelector("#userAnswer2");
			inputElement2.value = "";
			const inputElement3 = document.querySelector("#userAnswer3");
			inputElement3.value = "";
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

			<h1>Игра в загадки</h1>

			<div class="box">
				<p id="end"></p>
				<p>В тихую погоду нет нас нигде, А ветер подует - бежим по воде.</p>
				<input type="text" id="userAnswer1">

				<p>Зимой и летом одним цветом. Кто я? Не доллар ;)</p>
				<input type="text" id="userAnswer2">

				<p>Рыжая плутовка, Хитрая да ловкая, В сарай попала, Кур пересчитала.</p>
				<input type="text" id="userAnswer3">

				<br>
				<a href="#" onClick="checkAnswers();">Ответить</a>

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