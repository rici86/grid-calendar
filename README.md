# grid-calendar
A simple calendar with PHP and CSS grid.
It's useful if you need to add a static calendar to a static website for demo purposes, but could also be adapted to receive data from a DB or other sources.

The CSS grid .calendar-container displays the main grid, with a top navigation and title, and a secondary grid (no subgrid yet, because of browser support).
The secondary grid contains the weekdays and days of the month. The days immediately before the start of the month or after its end are added with lighter color. 
PHP is used to cycle each day, and you can add events to a single day in the cycle. You could also add every single day in a static way with HTML divs.
