<?php

class CL_ADMIN
{
	public function __construct()
	{
		
		$this->admin_model = new MD_ADMINMODEL();
		$this->temp = new LB_TEMPLATE('admin/header', 'admin/footer');
		$this->temp_simple = new LB_TEMPLATE('', '');
	}

	public function index()
	{	 
		if(!isset($_SESSION['login_admin'])){

			header("Location: admin/adminLogin");

		}else{
			$this->temp->loadcontent('admin/index');
			
			$this->temp->loadview($data);
		}
	}

	public function addStudents()
	{	 
		if(!isset($_SESSION['login_admin'])){

			header("Location: admin/adminLogin");

		}else{

			$this->temp->loadcontent('admin/addStudents');

			$data['students'] = $this->admin_model->students();
			$data['programs'] = $this->admin_model->programs();
			$data['courses'] = $this->admin_model->courses();
			$data['departments'] = $this->admin_model->departments();
			$data['subject_groups'] = $this->admin_model->subject_groups();
			$null = 0;
			foreach ($_POST as $key => $row) {
					echo $row;
				if($row==''){
					$null++;
				}
			}
			if($null==0){

				if($this->admin_model->_insert('students', $_POST)){

					unset($_POST);
					redirect('admin/addStudents?msg=Student Added Successfully&status=1');
				
				}

			}else{
				redirect('admin/addStudents?msg=Error While Adding Student.&status=0');
			}

			$this->temp->loadview($data);
		}
	}


	public function students()
	{	 
		if(!isset($_SESSION['login_admin'])){

			header("Location: admin/adminLogin");

		}else{

			$this->temp->loadcontent('admin/students');

			$data['students'] = $this->admin_model->students();
			// $data['programs'] = $this->admin_model->programs();
			// $data['courses'] = $this->admin_model->courses();
			// $data['departments'] = $this->admin_model->departments();
			// $data['subject_groups'] = $this->admin_model->subject_groups();
			$this->temp->loadview($data);
		}
	}

	public function student()
	{	 
		if(!isset($_SESSION['login_admin'])){

			header("Location: admin/adminLogin");

		}else{

			$this->temp->loadcontent('admin/student');

			$data['students'] = $this->admin_model->students();
			// $data['programs'] = $this->admin_model->programs();
			// $data['courses'] = $this->admin_model->courses();
			// $data['departments'] = $this->admin_model->departments();
			// $data['subject_groups'] = $this->admin_model->subject_groups();
			$this->temp->loadview($data);
		}
	}


	public function adminLogin()
	{
		$this->temp_simple->loadcontent('admin/adminLogin');
		$data['title'] = "My First App";
		$this->temp_simple->loadview($data);
	}


	public function logout()
	{
		session_start();
		session_destroy();
		session_unset();
		header('Location: adminLogin');
	}

	
}