<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A simple calendar for with PHP and CSS grid. Conceived for static HTML demo purposes, but it could receive data from a DB or other sources.">
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
    <div class="readme">
        <h1>Grid-calendar by <a href="https://www.rici86.com">Rici86</a> </h1>
        <p>
            A simple calendar with PHP and CSS grid. It's useful if you need to add a static calendar to a static website for demo purposes, but could also be adapted to receive data from a DB or other sources.
            <br>The CSS grid .calendar-container displays the main grid, with a top navigation and title, and a secondary grid (no subgrid yet, because of browser support). 
            <br>The secondary grid contains the weekdays and days of the month. The days immediately before the start of the month or after its end are added with lighter color. PHP is used to cycle each day, and you can add events to a single day in the cycle. You could also add every single day in a static way with HTML divs.
        </p>
    </div>
</body>
</html>