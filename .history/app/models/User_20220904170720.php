<?php
    class User{
        protected $errors = [];
        protected $table = "users";
        public function validate(){
            if($this->errors)
            return false;
        }
    }
    
    

    