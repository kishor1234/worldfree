<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_PostReport
 *
 * @author asksoft
 */

require_once controller;
class C_PostReport extends CAaskController {

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
        try{
            if(isset($_POST)){
                $data=  array_merge($_POST,array("ip"=>$_SERVER["REMOTE_ADDR"]));
               
                $sql=$this->insert("report", $_SESSION["db_1"], $data);
                $this->adminDB[$_SESSION["db_1"]]->query($sql);
                $message="Thanks for Reporting...<br> Your Query is below.<br>".$this->filterPost("message");
                $this->sendMail($this->filterPost("email"), "Thanks for Reporting", $message);
                echo $this->printMessage("Report Post successfully. Your Report is under review", "success");
            }  else {
                echo $this->printMessage("Faild to post Report..Try again leater", "danger");
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