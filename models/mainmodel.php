<?php
class MD_MAINMODEL extends LB_ezSQL_mysql
{
	private $db;
	public $lastid = NULL;
	public $pages ='';
	public $admin = FALSE;

	public function __construct($admin = FALSE)
	{
		$this->admin = $admin == "admin" ? TRUE : FALSE;

		$this->db = new LB_ezSQL_mysql(_DB_USER,_DB_PASS,_DB_NAME,_DB_HOST);
		parent::__construct(_DB_USER,_DB_PASS,_DB_NAME,_DB_HOST);
		$this->mid = isset($_SESSION['mid']) ? $_SESSION['mid'] : 0;
	}

	public function index(){
		err("Looks Like, you're here by mistake");
		die();
	}

	public function login($username, $password, $check = FALSE)
	{
		$username = $this->db->escape(strtolower($username));
		if(!$check){$password = md5($this->db->escape($password));}
		return $this->db->get_row("SELECT * FROM `user` WHERE `username` = \"$username\" AND `password` = \"$password\";");
	}


	public function _update($table, $vals, $cond, $exec = TRUE)
	{

		if(is_array($vals) && is_array($cond))
		{
			try{
			$vv = '';
			$i = 0;
			$table = "`".trim(strtolower($table))."`";
			foreach($vals as $k=>$v):
				$v = $this->escape($v);
				if($i != 0) $vv .= " ,";
				$vv .= "`$k` = '$v' ";
				$i++;
			endforeach;
			$cc = '';
			$i = 0;
			foreach($cond as $k=>$v):
				$v = $this->escape($v);
				if($i != 0){$cc .= " AND ";}
				else{$cc .= "WHERE ";}
				$cc .= "`$k` = '$v'";
				$i++;
			endforeach;

			$sql = "UPDATE $table SET $vv $cc";
			if($exec)
				return $this->db->query($sql);
			else
				return $sql;
			}
			catch(Exception $e)
			{
				return FALSE;
			}

		}
		return FALSE;
	}

	public function _delete($table, $cond, $exec = TRUE)
	{
		if(is_array($cond))
		{
			try{

				$table = "`".trim(strtolower($table))."`";
				$cc = '';
				$i = 0;
				foreach($cond as $k=>$v):
					if($i != 0){$cc .= " AND ";}
					else{$cc .= "WHERE ";}
					$cc .= "`$k` = '$v'";
					$i++;
				endforeach;

				$sql = "DELETE FROM $table $cc";
				if($exec)
					return $this->db->query($sql);
				else
					return $sql;
			}
			catch(Exception $e)
			{
				return FALSE;
			}

		}
		return FALSE;
	}


	public function _insert($table, $vals, $exec = TRUE)
	{
		if(is_array($vals))
		{
			$vv = '';
			$i = 0;
			$table = "`".trim(strtolower($table))."`";
			foreach($vals as $k=>$v):
				$v = $this->escape($v);
				if($i != 0) $vv .= " ,";
				$vv .= "`$k` = '$v' ";
				$i++;
			endforeach;
			$sql = "INSERT INTO $table SET $vv";
			if($exec)
			{
				$data = $this->db->query($sql);
				if($data)
				{
					$this->lastid = $this->db->insert_id;

				}
				return $data;
			}
			else
				return $sql;

		}
		else
		return FALSE;
	}




	/*
	 * *****************************************************************************************
	 * Main Functions start here
	 */

/*****************************************************************
 * Get all companies, buyers, offers, tips and images from the DB
 ******************************************************************/
	public function get_all_category()
	{
		return $this->get_results("SELECT * FROM `category` ORDER BY `category_id` ASC;");
	}	
	public function get_category_by_id($id)
	{
		return $this->get_row("SELECT * FROM `category` WHERE `category_id` = '$id' ");
	}
}
