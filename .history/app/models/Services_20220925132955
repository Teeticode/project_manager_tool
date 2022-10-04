<?php
    class Services extends Model
    {
        public $errors = [];
        protected $table = "users";
        protected $allowedColumns = [
            'service',
            'disabled',
            
        ];
        public function validate($data){
            $this->errors = [];
            if(empty($data['service'])){
                $this->errors['service'] = "Services is required";
            } 
            if(!preg_match("/^[a-zA-Z \&\']+$/", trim($data['username']))){
                $this->errors['service'] = "not allowed";
            }
            
            
            
            
            if(empty($this->errors)){
                return true; 
            }
            
            return false;
            
        }

        
        
        
    }

    
    

    