<?php
//for loop vježbe: https://www.w3resource.com/php-exercises/php-for-loop-exercises.php
//abeceda: slovo Z
for ($i=1; $i <= 7 ; $i++) { 
    for ($x=1; $x <= 7 ; $x++) { 
       if ($i==1 or ($i==2 and $x==6) or ($i==3 and $x==5) or ($i==4 and $x==4) or ($i==5 and $x==3) or ($i==6 and $x==2) or $i==7){
        echo "*";
       } else {
        echo "&nbsp;&nbsp";
       }
           
    }

    echo "<br />";
    }

echo "<hr />";

// Sretan Božić
for ($i=1; $i <= 8 ; $i++) { 
    for ($x=1; $x <= 11 ; $x++) { 
       if (($i==1 and $x==6) or ($i==2 and $x==5) or ($i==2 and $x==7) or ($i==3 and $x==4) or ($i==3 and $x==8) or ($i==4 and $x==3) or ($i==4 and $x==9) or ($i==5 and $x==2) or ($i==5 and $x==10) or ($i==6) or ($i==7 and $x==5) or ($i==7 and $x==7) or ($i==8 and $x==5) or ($i==8 and $x==7)){
        echo "*";
       } else {
        echo "&nbsp;&nbsp";
       }
           
    }

    echo "<br />";
    }

echo "<hr />";


//zadatak 9
echo "<table style= 'width: 270 px'>";
for ($i=1; $i <= 8 ; $i++) { 
    echo "<tr>";
    for ($x=1; $x <=8 ; $x++) { 
        
        if ($x % 2==0){
            echo "<td style= 'height: 30 px; width: 30 px; background-color: #ffffff; border: solid black'>
            
            </td>"; 
            
        }
    
    else{
        echo "<td style= 'height: 30 px; width: 30 px; background-color: #000000; border: solid black'>
        
        </td>";
        
    }
    
    }
    echo "</tr>";  
}
echo "</table>";

echo "<hr />";


//zadatak 10
echo "<table style= 'width: 270 px'>";
for ($i=1; $i <= 10 ; $i++) {
    echo "<tr>";
    for ($x=1; $x <=10 ; $x++) { 
        $sum=$x*$i;
        echo "<td style= 'border: solid black'>
        $sum
            </td>";
        
    }
echo "</tr>";   
}
echo "</table>";

echo "<hr />";


//trokut
for ($i=1; $i <=15 ; $i++) { 

    switch ($i) {
    
        case 1:
            echo $i;
            echo "<br />";
            break;
               
        case $i > 1 && $i <=3 :
            echo $i;
            if ($i>=3) {
                echo "<br />";
            }
            break;
    
        case $i > 3 && $i <=6:
            echo $i;
            if ($i>=6) {
                echo "<br />";
            }
            break;
        
        case $i > 3 && $i <=10:
            echo $i;
            if ($i>=10) {
                echo "<br />";
            }
            break;
    
        case $i > 10 && $i <=15:
            echo $i;
            break;      
        }
    }
echo "<hr />";