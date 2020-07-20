<?php
namespace Arden;

class ProductsModel extends Model
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
		

        return $this->data;
    }
}