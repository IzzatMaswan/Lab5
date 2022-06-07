<html>
    <body>
    <?php
    $monthDays = array ('January' => 31, 'February' => 28,
    'March' => 31, 'April' => 30,
    'May' => 31, 'June' => 30,
    'July' => 31, 'August' => 31,
    'September' => 30, 'October' => 31,
    'November' => 30, 'December' => 31);
    
    foreach ($monthDays as $key => $day)
    {
        echo "$key $day <br>";
    }
        echo "<br>";
    ?>
    
    <?php
   foreach($monthDays as $key => $day30)
   {
       if($day30 == 30)
       {
           echo "$key $day30 <br>";
       }
   }
    ?>
    </body>
</html>