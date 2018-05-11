<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once controller;
class C_SaveAlumniForm extends CAaskController {

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
        try {
            $data=  array_merge($_POST, array("ip"=>$_SERVER["REMOTE_ADDR"]));
            
            $sql=$this->insert("alumni", $_SESSION["db_1"], $data);
            $this->adminDB[$_SESSION["db_1"]]->query($sql);
            $this->sendMail($this->filterPost("email"), "Alumni Registrtion Success", "Thank for Participating on Alumni Program");
            $this->printMessage("Success...!", "success");
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