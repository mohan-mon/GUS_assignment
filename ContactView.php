<?php

namespace Arden;

class ContactView extends View
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
      
		?>
   <div class='form_container' style="display:block">
      <div id='statusMessage'>
                   <?php
                        if ($this->data==1) echo "Request Sent";else
                        if ($this->data==2) echo "Request Failed, please try again.<br>(For admin: Could be because of mailserver issue, data is saved in contactform table)<br>";
                        ?>  
                </div>
        <form name='ContactForm' id='ContactForm' method='post' onsubmit='return validateContactForm()'>
		 <div id='mail_status'></div>
            <div class='input_row'>
                <label style='padding-top: 20px;'>Name</label> <span  id='userName_info' class='info'></span><br />
				<input type='text' class='input_field' name='userName'  id='userName' />
            </div>
            <div class='input_row'>
                <label>Email</label> <span id='userEmail_info' class='info'></span><br />
				<input type='text'  class='input-field' name='userEmail' id='userEmail' />
            </div>

            <div class='input_row'>
                <label>Message</label> <span id='userMessage-info' class='info'></span><br />
                <textarea name='userContent' id='content' class='input-field' cols='60' rows='6'></textarea>
            </div>
            <div>
                <input type='submit' name='send' class='btn-submit'  value='Send' />

             
            </div>
        </form>
		<?php

    }
}

?>