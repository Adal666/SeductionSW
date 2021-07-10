<?php

class Home extends Controller
{
    public function __construct()
    {
        $this->home = $this->model("users");
    }

    public function index() {
        $users = $this->home->connect();
        $this->view("pages/login" , compact("users"));
    }

    public function login()
    {
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){

    	} else{
    		$this->view('pages/login');
    	}
    }

    public function register()
    {
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){

    	} else{
    		$this->view('pages/register');
    	}
    }
}
