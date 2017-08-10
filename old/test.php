<?php
include('parser/CalFileParser.php');
$cal = new CalFileParser();
$cal->set_timezone('US/Pacific');
$op = $cal->parse('icalexample.ics'); 
echo '<pre>';
foreach($op as $key => $val){
 foreach($val as $nkey => $nval){
    print_r($nval);
 }
}
