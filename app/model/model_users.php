<?php

require_once __DIR__.'/../Connection.php';

class Users {
  private $connection;

  public function __construct() {
    $this->connection = new Connection();
  }

  public function postUser() {
    
  }

  /*
  untuk mengambil seluruh data di table users
  */
  public function getUsers() {
    $query = "SELECT * FROM users";
    return $this->connection->getConnection()->query($query)->fetchAll(PDO::FETCH_OBJ);
  }

  /*
  untuk mengambil satu data di table users berdasarkan id
  */
  public function getUserById($id) {
    $query = "SELECT * FROM users WHERE id = '$id'";
    return $this->connection->getConnection()->query($query)->fetchAll(PDO::FETCH_OBJ)[0];
  }

  public function editUserById() {

  }

  public function deleteUserById() {

  }
}