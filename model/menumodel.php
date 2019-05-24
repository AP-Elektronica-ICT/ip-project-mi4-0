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
        
        <div id='room$i'><a href='start.php?page=grnd{$floor}R{$i}pagecontroller'>Room $i </a></div>
        ";
}
        echo"
        </div>
        </div>
        ";
    }

}
?>