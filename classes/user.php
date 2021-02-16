<?php 

    class User{
        public $user_name;
        public $nickname;
        private $password;
        public $avatar; // per ora solo SI/NO
        public $gender; // M/F
        public $age;



        public function __construct(string $user_name, string $nickname,string $password,string $avatar,string $gender, int $age){
            $this->user_name = $user_name;
            $this->nickname = $nickname;
            $this->password = $password;
            $this->avatar = $avatar;
            $this->gender = $gender;
            $this->age = $age;
        }



    }





?>