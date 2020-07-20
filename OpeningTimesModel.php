<?php
namespace Arden;

class OpeningTimesModel extends Model
{
    public function __construct()
    {



		$this -> db = new DB();





		$this->getData();


    }

    public function getData()
    {


		$query="SELECT
			CASE
				WHEN day =1 THEN 'Monday'
				WHEN day =2 THEN 'Tuesday'
				WHEN day =3 THEN 'Wednesday'
				WHEN day =4 THEN 'Thursday'
				WHEN day =5 THEN 'Friday'
				WHEN day =6 THEN 'Saturday'
				WHEN day =7 THEN 'Sunday'
			END AS dayText,
			 open_time, close_time
			FROM business_hour order by day asc;";

		$this->data=$this->db->select($query);

//		print_r($this->data);




        return $this->data;
    }
}