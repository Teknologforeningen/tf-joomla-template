<?php 
defined('_JEXEC') or die('Restricted access');

$data = $this->data;
$Itemid = JEVHelper::getItemid();
$num_events = count($data['rows']);
$chdate ="";

if( $num_events > 0 ){

    for( $r = 0; $r < $num_events; $r++ ){
        $row = $data['rows'][$r];

        $event_day_month_year   = $row->dup() . $row->mup() . $row->yup();
        // Ensure we reflect multiday setting
        if (!$row->eventOnDate(JevDate::mktime(0,0,0,$row->mup(),$row->dup(),$row->yup()))) continue;

        echo '<div class="event">';
        echo '<div class="small-12">';
		$this->loadedFromTemplate('icalevent.list_row', $row, 0);
        echo '</div></div>';

		$chdate = $event_day_month_year;
	}
} else {
        // No events
		echo '<p>' . JText::_('JEV_NO_EVENTS') . '</p>';
}

// Create the pagination object
if ($data["total"]>$data["limit"]){
	$this->paginationForm($data["total"], $data["limitstart"], $data["limit"]);
}

?>
