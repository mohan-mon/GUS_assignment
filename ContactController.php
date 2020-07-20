<?php

namespace Arden;

class ContactController extends BaseController
{


private $status=3;
public function __construct($userName=NULL,$userEmail=NULL,$userContent=NULL)
    {

		if($userName==NULL)
		{
		return;
		}
		else {
		$model = new ContactModel();
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userContent = $userContent;

		$this->status=$model->setData($this->userName,$this->userEmail,$this->userContent);

	}



       

    }

    public function getModelData() {
        return "";
    }  
	
	public function getResponse() {
        return $this->status;
    }
}