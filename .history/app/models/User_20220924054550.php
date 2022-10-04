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
            'date',
            'company',
            'address',
            'fname',
            'lname',
            'bday',
            'phone',
            'country',
            'about',
            'slug',
            'image',
            'linkedin',
            'github'
        ];
        public function validate($data){
            $this->errors = [];
            if(empty($data['username'])){
                $this->errors['username'] = "Username is required";
            } 
            if(!preg_match("/^[a-zA-Z0-9]+$/", trim($data['username']))){
                $this->errors['username'] = "letters and numbers no spaces";
            }
            if(!preg_match("/^[a-zA-Z0-9]+$/", trim($data['fname']))){
                $this->errors['fname'] = "letters and numbers no spaces";
            } 
            if(!preg_match("/^[a-zA-Z0-9]+$/", trim($data['fname']))){
                $this->errors['lname'] = "letters and numbers no spaces";
            } 
             
            
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $this->errors['emailv'] = "Email is not valid";
            }else if($this->where(["email"=>$data["email"]])){
                $this->errors['email'] = "email is taken";
            }
            if($this->where(["username"=>$data["username"]])){
                $this->errors['username'] = "Username is taken";
            }
            if(empty($data['password'])){
                $this->errors['password'] = "Password is required";
            } 
            
            
            if($data['password'] !== $data['password2']){
                $this->errors['check']="Passwords dont match";
            }
            if(empty($this->errors)){
                return true; 
            }
            
            return false;
            
        }

        public function edit_validate($data, $row){
            $this->errors = [];
            $result = $this->where(["email"=>$data["email"]]);
            if(empty($data['fname'])){
                $this->errors['fname']="cannot be empty";
            }
            if(empty($data['lname'])){
                $this->errors['lname']="cannot be empty";
            }
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $this->errors['email'] = "Email is not valid";
            }else if($data['email'] !== $row->email && $result){
                $this->errors['email'] = "email is taken";
            }
            if(!preg_match("/^[a-zA-Z0-9]+$/", trim($data['fname']))){
                $this->errors['fname'] = "letters and numbers no spaces";
            } 
            if(!preg_match("/^[a-zA-Z0-9]+$/", trim($data['lname']))){
                $this->errors['lname'] = "letters and numbers no spaces";
            } 
            
            if(!empty($data['github'])){
                if(!filter_var($data['github'], FILTER_VALIDATE_URL)){
                    $this->errors['github'] = "That is not a valid github profile";
                }
            }
            if(!empty($data['linkedin'])){
                if(!filter_var($data['linkedin'], FILTER_VALIDATE_URL)){
                    $this->errors['linkedin'] = "That is not a valid linkedin profile";
                }
            }
            
            if(empty($this->errors)){
                return true; 
            }
            
            return false;
            
        }
        
        
    }

    
    

    