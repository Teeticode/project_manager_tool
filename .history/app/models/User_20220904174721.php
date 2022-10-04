<?php
    class User
    {
        public $errors = [];
        protected $table = "users";
        public function validate($data){
            $this->errors = [];
            if(empty($data['username'])){
                $this->errors['username'] = "Username is required";
            } 
            if(empty($data['email'])){
                $this->errors['username'] = "Email is required";
            }
            if(empty($data['password'])||empty($data['password2'])){
                $this->errors['password'] = "Password is required";
            } 
            if($data['password'] === $data['password2']){
                $this->errors['confirm'] = "Password is should be the same";
            } 
            if(empty($this->errors)){
                return true; 
            }
            return false;
        }
    }
    
    

    