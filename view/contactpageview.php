
<head>
<link rel="stylesheet" type="text/css" href="view/css/bovenmenu.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact</title>
</head>

<body>

<?php 
    include_once 'model/menumodel.php';  
    $bovenStuk = new MenuClass();
    $bovenStuk-> bovenmenu('','','active');
?>


</body>