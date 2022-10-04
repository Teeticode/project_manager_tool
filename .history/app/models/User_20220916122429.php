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
            
            if(empty($data['terms'])){
                $this->errors['terms']="check terms and condition";
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
            show($result)
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $this->errors['emailv'] = "Email is not valid";
            }else if($result['email'] !== $row->email && $result){
                $this->errors['email'] = "email is taken";
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

    
    

    