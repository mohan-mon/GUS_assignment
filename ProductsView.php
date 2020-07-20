<?php

namespace Arden;

class ProductsView extends View
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

		echo "<div class='card_wrapper'>";
		 foreach($this->data as $val) {
			echo "<div class='card'>";
			echo "<div class='card__image'>";
			echo "<img src=./images/".$val['image_path']." width='100%'>";
			echo "</div>";
			echo "<div class='card_title'>";
			echo $val['name'];
			echo "<br><br> Cost: &#x20B9;".$val['cost'];
			echo "</div>";
			echo "</div>";

			}
		echo "</div>";



    }
}