<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A simple calendar for HTML demo purposes. With PHP and CSS grid.">
    <meta name="author" content="Rici86.com">

    <title>Grid calendar</title>
    
    <link href="main.css" rel="stylesheet">

</head>
<body>
    <div class="calendar-container">
        <div class="cal-nav">
            <button class="button">Prev</button>            
        </div>
        <div class="cal-title">
            <h3>Marzo 2022</h2>
        </div>
        <div class="cal-today">
            <button class="button">Next</button>
        </div>
        
        <div class="cal-days">
            <div class="cal-weekdays">Mon</div>
            <div class="cal-weekdays">Tue</div>
            <div class="cal-weekdays">Wed</div>
            <div class="cal-weekdays">Thu</div>
            <div class="cal-weekdays">Fri</div>
            <div class="cal-weekdays">Sat</div>
            <div class="cal-weekdays">Sun</div>
            
            <?php
                for ($i = 28; $i <= 28; $i++) {
                    echo '
                        <div class="day-before day-'.$i.'" />
                            <span class="number">'.$i.'</span>
                        </div>
                    ';
                }
            ?>
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    if($i == 3){
                        echo '
                            <div class="day-'.$i.' day-today" />
                                <span class="number">'.$i.'</span>
                                <div class="event"><span class="circle blue"></span> <span class="time">11.00</span> <span class="description" title="Conf. call ">Conf. call </span></div>
                                <div class="event"><span class="circle blue"></span> <span class="time">12.00</span> <span class="description" title="Meeting">Meeting</span></div>
                                <div class="event"><span class="circle orange"></span> <span class="time">15.00</span> <span class="description" title="Gym">Gym</span></div>
                            </div>
                        ';
                    }elseif($i == 2){
                        echo '
                            <div class="day-'.$i.'" />
                                <span class="number">'.$i.'</span>
                                <div class="event"><span class="circle purple"></span> <span class="time">08.30</span> <span class="description" title="Coffee">Coffee</span></div>
                            </div>
                        ';
                    }elseif($i == 7){
                        echo '
                            <div class="day-'.$i.'" />
                                <span class="number">'.$i.'</span>
                                <div class="event"><span class="circle purple"></span> <span class="time">14.00</span> <span class="description" title="Lunch">Lunch</span></div>
                            </div>
                        ';
                    }elseif($i == 18){
                        echo '
                            <div class="day-'.$i.'" />
                                <span class="number">'.$i.'</span>
                                <div class="event"><span class="circle orange"></span> <span class="time">14.00</span> <span class="description" title="Meeting">Meeting</span></div>
                            </div>
                        ';
                    }else{
                        echo '
                            <div class="day-'.$i.'" />
                                <span class="number">'.$i.'</span>
                            </div>
                        ';
                    }
                }
            ?>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '
                        <div class="day-after day-'.$i.'" />
                            <span class="number">'.$i.'</span>
                        </div>
                    ';
                }
            ?>                                
        </div>
    </div>
</body>
</html>