<?php

require_once('../SG_iCal.php');

function dump_t($x) {
	echo "<pre>".print_r($x,true)."</pre>";
}
$ICS = "ical-crew2.ics";
//echo dump_t(file_get_contents($ICS));

$ical = new SG_iCalReader($ICS);
$query = new SG_iCal_Query();

$evts = $ical->getEvents();
//$evts = $query->Between($ical,strtotime('20100901'),strtotime('20101131'));

$data = array();
foreach($evts as $id => $ev) {
	$jsEvt = array(
		"id" => ($id+1),
		"title" => $ev->getProperty('summary'),
		"start" => $ev->getStart(),
		"end"   => $ev->getEnd()-1,
		"description" => $ev->getDescription()
	);

	if (isset($ev->recurrence)) {
		$count = 0;
		$start = $ev->getStart();
		$freq = $ev->getFrequency();
		if ($freq->firstOccurrence() == $start)
			$data[] = $jsEvt;
		while (($next = $freq->nextOccurrence($start)) > 0 ) {
			if (!$next or $count >= 1000) break;
			$count++;
			$start = $next;
			$jsEvt["start"] = $start;
			$jsEvt["end"] = $start + $ev->getDuration()-1;

			$data[] = $jsEvt;
		}
	} else
		$data[] = $jsEvt;

}
#echo(date('Ymd\n',$data[0]['start']));
#echo(date('Ymd\n',$data[1]['start']));
#dump_t($data);

$events = "events:".json_encode($data).',';

$dis = '<div class="row">
  ';
foreach($data as $key => $val){
	
  $dis.='<div class="col-sm-4"><div class="card-block">
				<h4 class="card-title"><strong>'.$val['title'] .' </strong></h4>
              <p>'. $val['description'].'</p>

			</div>
			<div class="card-footer text-muted">
				<p><small><strong>Start Time:</strong> '. $val['start'].'</small></p>
				<p><small><strong>End Time:</strong>'. $val['end'].'</small></p>
			</div>
			</div>
  ';
	
}
 $dis.='</div>';


			
	
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Calendar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css">
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li><a href="logout" class="btn btn-primary">Logout</a></li>
                </ul>

            </div>
        </nav>
     
		
<?= $dis; ?>		



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/js/mdb.min.js"></script>
        

    </body>

</html>