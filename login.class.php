<?php
class LoginUser{
  //class properties
  private $username;
  private $password;
  public $error;
  public $succes;
  private $storage = "database.json";
  private $stored_useres;

  //class methods
  public function __construct($username, $password){

    $this->username = $username;
    $this->password = $password;
    $this->stored_users = json_decode(file_get_contents($this->storage), true);
    $this->login();


  }


  private function login(){
    foreach ($this->stored_users as $user) {
      if($user['username'] == $this->username) {
        if(password_verify($this->password, $user['password'])) {
          session_start();
          $_SESSION['user'] = $this->username;
          header("location: account.php"); exit();
        }
      }
    }
    return $this->error = "Téves jelszó vagy felhasználónév! Kérlek, próbáld újra!";
  }

}
