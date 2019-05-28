
<html>
    <head>

<link rel="stylesheet" type="text/css" href="view/css/bovenmenu.css">
<link rel="stylesheet" type="text/css" href="view/css/sidemenu.css">
<link rel="stylesheet" type="text/css" href="view/css/roomspagestyle.css"> 
<!-- Resources -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ground Plan</title>
<style>
    
    body{
        line-height: 1.5em;
    }
</style>
</head>

<body>
<?php 
    include_once 'model/menumodel.php';  
    $menuStuk = new MenuClass();
    $menuStuk-> bovenmenu('','active','');
    $menuStuk-> sidemenu('active','','','','','','');
    $menuStuk-> modulemenu('1','1');
?>

</body>
    
</html>