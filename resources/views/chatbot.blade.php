<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Chatbot </title>
<link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
<div class="glass">
<h1>Ajukan Pertanyaan</h1>
<h2>Silahkan masukan pertanyaan</h2>
<div class="input">
<input
type="text"
id="userBox"
onkeydown="if(event.keyCode == 13){ talk()}"
placeholder="Ingin Bertanya?"
/>
</div>
<p id="chatLog">.............................</p>
</div>

<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>