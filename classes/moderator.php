<?php 

include __DIR__ . '/classes/user.php';

class Moderatore extends User {
    public $privilegi_mod; // per ora solo SI/NO

    public function __construct(string $user_name, string $nickname,string $password,string $avatar,string $gender, int $age, string $privilegi_mod){
        parent::__construct($user_name,$nickname,$password,$avatar,$gender,$age);
        $this->privilegi_mod = $privilegi_mod;
    }

}




?>