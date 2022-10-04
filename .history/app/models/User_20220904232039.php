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
                $this->errors['email'] = "Email is required";
            }
            if(empty($data['password'])){
                $this->errors['password'] = "Password is required";
            } 
            
            if(empty($data['terms'])){
                $this->errors['terms']="check terms and condition";
            }
            if($data['password'] !== $data['password2'])
            if(empty($this->errors)){
                return true; 
            }
            return false;
        }
    }
    
    

    