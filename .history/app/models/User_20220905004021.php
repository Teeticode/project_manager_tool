<?php
    class User extends Model
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
            $query = "SELECT * FROM users where email = :email limit 1";
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $this->errors['email'] = "Email is not valid";
            }else if($this->query($query, ["email"=>$data["email"]])){

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
        
    }

    
    

    