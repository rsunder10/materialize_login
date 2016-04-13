<?php
class Database{
  private $host;
  private $user;
  private $pass;
  private $db;
  public $mysqli;

  public function __construct() {
    $this->db_connect();
  }

  private function db_connect(){
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'baby';

    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
    return $this->mysqli;
  }

  public function db_num($sql){
        $result = $this->mysqli->query($sql);
        return $result->num_rows;
  }

	public function escape_string($sql){
		return $this->mysqli->real_escape_string($sql);
	}
	public function insert_data($sql){
		return $this->mysqli->query($sql);
	}
	public function update_data($sql){
		return $this->mysqli->query($sql);
	}
	public function select_data($sql){
		return $this->mysqli->query($sql);
	}

}

?>