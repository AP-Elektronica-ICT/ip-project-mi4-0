
<html>
    <head>
<link rel="stylesheet" type="text/css" href="view/css/grndF1Roomspagestyle.css"> 
<!-- Resources -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ground Plan</title>

<style>
    .main-section{
	width:80%;
	margin:0 auto;
}
.dashbord{
	margin-top:30px;
	margin-right: 10px;
	display: inline-block;
	width:60%;
	color:#fff;
	border-radius: 3px;
}
.title-section{
	border-radius: 5px 5px 0px 0px;
	text-align: center;
	background-color:#7CD6F8;
	padding:7px 0px;
}
.title-section p{
	margin:0px;
	font-size:13px;
}
.icon-text-section{
	background-color:#5BCCF6;
	padding:5px 10px;
}
.icon-section{
	font-size:50px;
	float:left;
	width:20%;
	color:#8BDBF8;
}
.text-section{
	width:80%;
	float:right;
	text-align: right;
}
.text-section h1{
	margin:0px;
	font-size:25px;
}
.detail-section{
	background-color: #52B8DE;
	cursor: pointer;
	border-radius: 0px 0px 5px 5px;
}
.detail-section a{
	color:#fff;
}
.detail-section a p{
	display: inline-block;
	margin: 0px;
	font-size: 12px;
	padding:10px;
}
.detail-section a i{
	float:right;
	padding: 10px 5px 0px 0px;
}
.dashbord .detail-section:hover{
	background-color:#5a5a5a;
}
.download-content .title-section{
	background-color:#B0DA7A;
}
.download-content .icon-text-section{
	background-color: #9CD159;
}
.download-content .detail-section{
	background-color: #8DBC50;
}
.download-content .icon-section{
	color:#B9DE8A;
}
.product-content .title-section{
	background-color:#FF7979;
}
.product-content .icon-text-section{
	background-color:#FF5757;
}
.product-content .icon-section{
	color:#FF8989;
}
.product-content .detail-section{
	background-color:#E64F4F;
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
  <a class="active" href="javascript:location.reload(true)">Floor 1</a>
  <a href="start.php?page=grndFl2pagecontroller">Floor 2</a>
  <a href="start.php?page=grndFl3pagecontroller">Floor 3</a>
  <a href="start.php?page=grndFl4pagecontroller">Floor 4</a>
  <a href="start.php?page=grndFl5pagecontroller">Floor 5</a>
  <a href="start.php?page=grndFl6pagecontroller">Floor 6</a>
</div>
<div class="main-section">
		<div class="dashbord email-content">
			<div class="title-section">
				<p>Module 1</p>
			</div>
			<div class="icon-text-section">
				<div class="icon-section">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="text-section">
					<h1>3 Sensors</h1>
					<span>Daily: Humidity, Temperature and Pressure</span>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="detail-section">
				<a href="#">
					<p>View Detail</p>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="dashbord download-content">
			<div class="title-section">
				<p>Module 2</p>
			</div>
			<div class="icon-text-section">
				<div class="icon-section">
					<i class="fa fa-download" aria-hidden="true"></i>
				</div>
				<div class="text-section">
					<h1>5 Sensors</h1>
					<span>Current, Voltage, Active Power, Reactive Power and Power Factor</span>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="detail-section">
				<a href="#">
					<p>View Detail</p>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="dashbord product-content">
			<div class="title-section">
				<p>Module 3</p>
			</div>
			<div class="icon-text-section">
				<div class="icon-section">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
				</div>
				<div class="text-section">
					<h1>1 Sensor</h1>
					<span> Light off/on</span>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="detail-section">
				<a href="#">
					<p>View Detail</p>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>

		
	</div>       
       
</body>
    
</html>