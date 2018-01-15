<html lang="fr">
<head>
	<title>Formulaire Allburotic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- BOOTSTRAP STYLES-->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- STAR RATING STYLES-->
	<link rel="stylesheet" href="assets/css/star-rating.css" type="text/css"/>
   	<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    
</head>


<body id="page-top">
    <?php
       require "view/header.php";
       echo $content;
       require "view/footer.php";
    ?>
</body>