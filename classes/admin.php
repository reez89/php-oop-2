<?php 

include __DIR__ . '/classes/user.php';

class Admin extends User {
    public $privilegi_admin; // per ora solo SI/NO

    public function __construct(string $user_name, string $nickname,string $password,string $avatar,string $gender, int $age, string $privilegi_admin){
        parent::__construct($user_name,$nickname,$password,$avatar,$gender,$age);
        $this->privilegi_admin = $privilegi_admin;
    }

}
