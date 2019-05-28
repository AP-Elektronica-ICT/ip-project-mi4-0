<?php
    
    class MenuClass{
     
   public function bovenmenu($monitor,$groundplan,$contact){
        
        echo "
            <div class='topnav'>
              <a class='$monitor' href='start.php?page=monitorpagecontroller'>Monitor</a>
              <a class='$groundplan' href='start.php?page=grndFl1pagecontroller'>Ground Plan</a>
              <a class='$contact' href='start.php?page=contactpagecontroller'>Contact</a>
            </div>";
        }
        
    public function sidemenu($F1,$F2,$F3,$F4,$F5,$F6,$F7){
        echo"
        <div class='sidebar'>
            <a class='$F1' href='start.php?page=grndFl1pagecontroller'>Floor 0</a>
            <a class='$F2' href='start.php?page=grndFl2pagecontroller'>Floor 1</a>
            <a class='$F3' href='start.php?page=grndFl3pagecontroller'>Floor 2</a>
            <a class='$F4' href='start.php?page=grndFl4pagecontroller'>Floor 3</a>
            <a class='$F5' href='start.php?page=grndFl5pagecontroller'>Floor 4</a>
            <a class='$F6' href='start.php?page=grndFl6pagecontroller'>Floor 5</a>
            <a class='$F7' href='start.php?page=grndFl7pagecontroller'>Floor 6</a>
        </div>
        ";
        
        
    }
        
        
    public function floormenu($floor,$endroom,$startroom){
        echo"
        <div class='plattegrond'>
        <div id='container'>
        <img src='images/Floor$floor.png' width='1500px' height='850px'>
        
        ";
        for ($i = $startroom; $i <= $endroom; $i++) {
        echo"
        
        <div id='room$i'><a href='start.php?page=grndpagecontroller&room=$i'>Room $i </a></div>
        ";
}
        echo"
        </div>
        </div>
        ";
    }
        public function modulemenu($rm,$humi,$temp,$pressure,$current,$voltage,$activeP,$reactiveP,$PF,$Light){
            echo "
            <div class='main-section'>
		<div class='dashbord email-content'>
			<div class='title-section'>
				<p>Module 1 Environment</p>
			</div>
			<div class='icon-text-section'>
				<div class='icon-section'>
					<i class='fa fa-envelope-o' aria-hidden='true'></i>
				</div>
				<div class='text-section'>
					<h1>3 Sensors</h1>
					<span>
					   <br>
					   Humidity: $humi
					   <br>
					   Temperature: $temp
					   <br>
					   Pressure: $pressure</span>
				</div>
				<div style='clear:both;'></div>
			</div>
			<div class='detail-section'>
				<a href='start.php?page=Modulecontroller&module=1&room=$rm'>
					<p>View Detail</p>
					<i class='fa fa-arrow-right' aria-hidden='true'></i>
				</a>
			</div>
		</div>
		<div class='dashbord download-content'>
			<div class='title-section'>
				<p>Module 2 Plugin</p>
			</div>
			<div class='icon-text-section'>
				<div class='icon-section'>
					<i class='fa fa-download' aria-hidden='true'></i>
				</div>
				<div class='text-section'>
					<h1>5 Sensors</h1>
					<span>
					 <br>
					 Current: $current
					 <br>
					 Voltage: $voltage
				     <br>
				     Active Power: $activeP
				     <br>
				     Reactive Power: $reactiveP
				     <br>
				     Power Factor: $PF
                     </span>
				</div>
				<div style='clear:both;'></div>
			</div>
			<div class='detail-section'>
				<a href='start.php?page=Modulecontroller&module=2&room=$rm'>
					<p>View Detail</p>
					<i class='fa fa-arrow-right' aria-hidden='true'></i>
				</a>
			</div>
		</div>
		<div class='dashbord product-content'>
			<div class='title-section'>
				<p>Module 3 Light controller </p>
			</div>
			<div class='icon-text-section'>
				<div class='icon-section'>
					<i class='fa fa-credit-card' aria-hidden='true'></i>
				</div>
				<div class='text-section'>
					<h1>1 Sensor</h1>
					<span><br> Light off/on:$Light </span>
				</div>
				<div style='clear:both;'></div>
			</div>
			<div class='detail-section'>
				<a href='start.php?page=Modulecontroller&module=3&room=$rm'>
					<p>View Detail</p>
					<i class='fa fa-arrow-right' aria-hidden='true'></i>
				</a>
			</div>
		</div>

		
	</div>       
            
            
            
            ";
        }

}
?>