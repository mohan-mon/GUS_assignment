<?php
namespace Arden;

class ContactModel extends Model
{
    public function __construct()
    {

		$this -> db = new DB();

		$this->getData();


    }

    public function getData()
    {


		$query="SELECT name, cost, no_of_orders, image_path FROM product_details order by no_of_orders Desc Limit 5;";

		$this->data=$this->db->select($query);
		
		//print_r($this->data);

        return $this->data;
    }

	public function setData($name,$email,$content)
	{
		

	$toEmail = "mohankrishna.mon@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, "Contact", $content, $mailHeaders)) {
	   return 1;
	}
		$this->data=$this->db->insert($name,$email,$content);



	return 2;

	
	}






}