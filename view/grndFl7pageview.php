   <html>
    <head>
<link rel="stylesheet" type="text/css" href="view/css/bovenmenu.css">
<link rel="stylesheet" type="text/css" href="view/css/sidemenu.css">
<link rel="stylesheet" type="text/css" href="view/css/groundplanmenu.css">
<link rel="stylesheet" type="text/css" href="view/css/grndFl7pagestyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ground Plan</title>
</head>

<body>
<?php 
    include_once 'model/menumodel.php';  
    $menuStuk = new MenuClass();
    $menuStuk-> bovenmenu('','active','');
    $menuStuk-> sidemenu('','','','','','','active');
    $menuStuk-> floormenu(7,52,52);
?>

</body>
    
</html>