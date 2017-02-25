<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>My Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.ico" />

	<!-- Здесь подключение сторонних стилей -->
	<link rel="stylesheet" href="libs/animate/animate.min.css" />
	<link rel="stylesheet" href="libs/fontAwesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<!-- Мои стили -->
	<link rel="stylesheet" href="style/fonts.css" />
	<link rel="stylesheet" href="style/main.css" />
	<link rel="stylesheet" href="style/media.css" />
</head>
<body>



<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <?php foreach ($Post_one as $post): ?>
            <div class="col-md-4">
                <h2><?=$post['title'];?></h2>
                <p><?=$post['full_desc'];?></p>
                <p><a class="btn btn-default" href="/" role="button">View details &raquo;</a></p>
            </div>
        <? endforeach; ?>
    </div>
</div>





<!-- Подключение библиотек для поддержки IE HTML5 тегов и CSS3 -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<script src="libs/jquery/jquery-3.1.1.min.js" type="javascript"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- Здесь остальные скрипты после подключения библиотеки JQuery -->
<!-- Мои скрипты -->
<script src="js/common.js" type="javascript"></script>

</body>
</html>