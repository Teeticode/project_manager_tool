<?php
    class User
    {
        public $errors = [];
        protected $table = "users";
        protected $allowedColumns = [
            'email',
            'password',
            'userid',
            'username',
            'role',
            'date'
        ];
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
            if($data['password'] !== $data['password2']){
                $this->errors['check']="passwords dont match";
            }
            if(empty($this->errors)){
                return true; 
            }
            return false;
        }
        public function insert($data){
            //remove unwanted columns
            if(!empty($allowedColumns)){
                foreach($this->allowedColumns as $key => $value){

                }
            }
            
        }
    }

    
    

    