<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_sendMail
 *
 * @author asksoft
 */
require_once controller;
class C_sendMail_1 extends CAaskController {

    //put your code here
    public $visState = false;

    public function __construct() {
        parent::__construct();
    }

    public function create() {
        //$this->load->view("login.php");
        parent::create();
       
        return;
    }

    public function initialize() {
        parent::initialize();
        try
        {
           
           if(isset($_POST))
           {
            $message=$this->filterPost("message");
            $message.="<br>"; $message.="<br>"; $message.="<br>";
            $message.="<spane><strong>Email : </strong></span>".$this->filterPost("email");
            $message.="<spane><strong>Mobile: </strong></span>".$this->filterPost("mobile");
           // $this->sendMailBoth($this->filterPost("email"),"princessJasmine17@mail.com", $this->filterPost("subject"), $message);
            $message1="<p>Thanks for Visiting. We will contact you soon....!</p>";
            $message1.="<img src='http://worldfree4u2.com/logo.png' style='height:100px;'>";
            $message1.='<h2>@Team WorldFree4u2.com</h1>';
            $message1.="<p>Thanks for visiting .</p>";
           
            $this->sendMail($this->filterPost("email"), "Thanks for Visiting WorldFree4u2", $message1);
            echo $this->printMessage("Success...", "success");
            
           }else{
               echo $this->printMessage("Faild...", "damger");
           }
        } catch (Exception $ex) {

        }
        return;
    }

    public function execute() {
        parent::execute();
        return;
    }

    public function finalize() {
        parent::finalize();
              return;
    }

    public function reader() {
        parent::reader();
        return;
    }

    public function distory() {
        parent::distory();
        return;
    }
}
