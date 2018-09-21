<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Like Lovers</title>
	<meta charset="utf-8">
    <meta name="description" content="Накрутка в инстаграм подписчиков, лайков, просмотров, комментариев... Оптом. Для реселлеров и не только.">
    <meta name="keywords" content="Накрутка инстаграм подписчиков лайков просмотров комментариев раскрутка продвижение Instagram">
    <meta name="author" content="Scorpion">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<!-- JS -->
	<script src="semantic/dist/semantic.min.js"></script>
	<script src="js/jquery/jquery-3.1.0.min.js"></script>
	<script>
		function showHide(idDiv) {
			$('#'+idDiv).toggle('fast');
		}
		function recShow(idModal) {
			$('#'+idModal).show('fast');
		}
		function recClose(idModal) {
			$('#'+idModal).hide('fast');
		}
	</script>
</head>
<body>
	<!-- menu -->
	<div id="menu" class="ui left fixed vertical menu inverted">
  		<div class="ui inverted segment">
    		<button class="ui inverted basic button icon" onClick="showHide('menu');"><i class="content icon"></i></button>
  		</div>
  		<a class="item" href="#welcome">Welcome</a>
	</div>
	<!-- Site content !-->
	<div class="pusher">
		<!-- menu button -->
		<button class="ui inverted button mesto icon" onClick="showHide('menu');"><i class="content icon"></i></button>
		<!-- welcome -->
		<div id="welcome" class="back-welcome">
			<div class="ui container vis">
				<img class="ui small circular image float-left" src="/images/avatar.jpg" alt="" />
				<h1>Like Lovers</h1>
				<h2>Сервис накрутки инстаграм!</h2>
				<!-- contacts button ??? -->
			</div>
		</div>
	</div>
</body>
</html>