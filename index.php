<?php
echo "Hello World!"
      $datetimepicker = new \Kendo\UI\DateTimePicker('datetimepicker');
    $datetimepicker->min(new DateTime('1900-01-01'))
                   ->max(new DateTime('2099-12-31'))
                   ->value(new DateTime('today', new DateTimeZone('UTC')));
    
?>
