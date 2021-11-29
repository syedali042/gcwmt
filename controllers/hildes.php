<?php

class CL_HILDES
{
	public function __construct()
	{
		$this->model = new MD_MAINMODEL();
		$this->temp = new LB_TEMPLATE('header', 'footer');
	}

	public function index()
	{
		$this->temp->loadcontent('index');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function about()
	{
		$this->temp->loadcontent('about');
		
		$data['title'] = "My First App";
		$data['name'] = "Nadeem Akram";
		$data['category'] = $this->model->get_all_category();

		$this->temp->loadview($data);
	}
	
}