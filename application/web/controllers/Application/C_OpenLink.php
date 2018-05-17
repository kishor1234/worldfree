<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_OpenLink
 *
 * @author asksoft
 */
require_once controller;
class C_OpenLink extends CAaskController {

    //put your code here
    public $visState = false;

    public function __construct() {
        parent::__construct();
    }

    public function create() {
        //$this->load->view("login.php");
        parent::create();
        $this->isLoadView("header", false, array());
        return;
    }

    public function initialize() {
        parent::initialize();
        $choise=$this->encript->decdata($_REQUEST["v"]);
        if(array_key_exists($choise, $this->viewConfig))
        {
            switch($choise)
            {
                case 'VPlayer':
                    if(isset($_REQUEST["p"])){$_SESSION["vurl"]=urldecode($_REQUEST["p"]);
                    redirect("http://linkshrink.net/zvpG=".  urlencode("https://worldfree4u2.com/?r=".$this->encript->encdata("C_OpenLink") . "&v=" . $this->encript->encdata("VPlayer")));
                    }else{
                        $this->isLoadView($choise, false, array()); 
                    }
                    break;
                default :
                     $this->isLoadView($choise, false, array());
                    break;
            }
           
        }  else {
             $this->isLoadView("PageNotFount404", false, array());
        }
        
       
        return;
    }

    public function execute() {
        parent::execute();
        return;
    }

    public function finalize() {
        parent::finalize();
        $this->isLoadView("footer", false, array());
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
