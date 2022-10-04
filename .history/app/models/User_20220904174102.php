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
            if(empty($this->errors)){
                return true; 
            }
            return false;
        }
    }
    
    

    