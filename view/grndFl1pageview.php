   <html>
    <head>
<link rel="stylesheet" type="text/css" href="view/css/groundplanpagestyle.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ground Plan</title>
<style>
    img {
    border: 2px solid black;   
}
    div{
        overflow: auto;
    }

#container {
    position: relative;    
}

#example {
   position: absolute;
   top: 10px;
   left: 10px; 
    
   padding: 5px;
   background-color: white;
   border: 2px solid red;
}
    
</style>
</head>

<body>
<div class="topnav">
  <a href="start.php?page=monitorpagecontroller">Monitor</a>
  <a href="#Control">Control</a>
  <a class="active" href="javascript:location.reload(true)">Ground Plan</a>
  <a href="start.php?page=contactpagecontroller">Contact</a>
</div>

<div class="sidebar">
  <a class="active" href="">Floor 1</a>
  <a href="">Floor 2</a>
  <a href="">Floor 3</a>
  <a href="">Floor 4</a>
  <a href="">Floor 5</a>
  <a href="">Floor 6</a>
</div>
<div>
   <div id="container">
    <img src="images/Floor1.png" width="500px" height="200px">
    <div id="example">This is my div</div>
</div>
</body>
    
</html>