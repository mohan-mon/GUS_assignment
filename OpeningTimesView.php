<?php

namespace Arden;

class OpeningTimesView extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        // Render opening times

		//print_r($this->data);
		
		echo "<table id='open_timings'>";
		echo "<tr>";
		echo "<th>Day</th>";
		echo "<th>Opening Time</th>";
		echo "<th>Closing Time</th>";
		echo "</tr>";





		 foreach($this->data as $val) {
			 
				echo "<tr>";
				echo "<td>".$val["dayText"]."</td>";
			if($val["open_time"]!=$val["close_time"])
			{
				echo "<td>".$val["open_time"]."</td>";
				echo "<td>".$val["close_time"]."</td>";
			}else{
				echo "<td colspan='2'; style='text-align:center'>Closed</td>";
			}
			echo "</tr>";
        }
		echo "</table>";



		/*return;
        foreach($this->data as $key => $val) {
            if($key == 'days') {
                foreach($val as $day) {
                    echo '<div>'. $day;

                    echo ' - ';

                    foreach($this->data['opening_hours'] as $d => $hours) {
                        if($d == $day) {
                            echo $hours;
                        }
                    }

                    echo '</div>';
                }
            }

        }
		*/
    }
}