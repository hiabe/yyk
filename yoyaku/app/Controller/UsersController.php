<?php

class UsersController extends AppController{
	public $helpers = array('html','form');

	public function index(){
		$this.set('users',$this->User->find('all'));
	}
}