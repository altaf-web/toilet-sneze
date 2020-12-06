<?php
  class Request {
    public $action=null;
    public $dataAsArr = null;

    public function __construct() {
      $action = $_POST['action'];
      $this->dataAsArr = array();
      //$_POST['form_data'],$this->dataAsArr);
      echo $this->default($action);
    }

    public function default($action) {
      return $this->init($action);
    }

    public function init($action) {
      $ret=0;
      switch($action){
        case "send_email": 
          $ret = $this->sendEmail($_POST['btnTxtVal'],$_POST['email']);
        break;

        default:
        break;
      }

      return $ret;
    }

    public function sendEmail($btnTxtVal,$email) {

      $message ='<table border="1" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">';

      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

      $message='
      <tr><td colspan="2"><h1 style="text-align: center; color: green;">Notification</h1></tr>
      <tr><td>Link: </td><td><a href="https://youtu.be/zyxKfJngyso">video link</a></td></tr>
      <tr><td>Text: </td><td>'.($btnTxtVal).'</td></tr>
      <tr><td>Price: </td><td>$99</td></tr>
      </table>';
      
       $result  = mail($email,"Email has been recieved", $message,$headers);
          return true;
    }

  }
  new Request();  
?>