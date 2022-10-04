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
            if(!empty($this->allowedColumns)){
                foreach($data as $key => $value){
                    if(!in_array($key, $this->allowedColumns)){
                        unset($data[$key]);   
                    }
                }
            }
            $keys = array_keys($data);
            $values = array_values($data);
            $query = "insert into users ";
            $query .="(".implode(",", $keys).") values (:".implode(",:", $keys).")";
            $db = new Database();
            //$db->query($query, $values);
            show($query);
            show($values);
        }
    }

    
    

    