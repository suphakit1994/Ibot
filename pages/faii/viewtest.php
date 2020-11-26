<?php 
 include('../php/config.php');   
    $sql="SELECT * FROM `our course` WHERE 1 ";
    $result = $conn->query($sql); 
       while($row = $result->fetch_array()) {
           echo "$conn";
        for ($x = 0; $x <= 4; $x++) {
         
         echo "$row[Course_Expension]";
         echo "$row[Age_For_class]";
         echo "$row[Total_course]";
         echo "$row[Lesson]";
         echo "$row[Price]";
         echo "<br>";
           }
       }

 ?>