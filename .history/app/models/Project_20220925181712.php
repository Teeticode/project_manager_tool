<?php
    class Project extends Model
    {
        public $errors = [];
        protected $table = "users";
        protected $allowedColumns = [
            'title',
            'description',
            'project_img',
            'project_vid',
            'projectid',
            'userid',
            'skills',
            'services_id',
            'level_id',
            'language_id',
            'promo_link',
            'know_dev_vid',
            'date',
            'tags',
            'primary_subject',
            'interview_vid',
            'approved',
            'published',
            'draft',
            
        ];
        public function validate($data){
            $this->errors = [];
            if(empty($data['title'])){
                $this->errors['title'] = "Username is required";
            } 
            if(!preg_match("/^[a-zA-Z0-9 \&\']+$/", trim($data['username']))){
                $this->errors['title'] = "letters ,numbers and spaces only";
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
            if(!preg_match("/^[a-zA-Z]+$/", trim($data['fname']))){
                $this->errors['fname'] = "letters only no spaces";
            } 
            if(!preg_match("/^[a-zA-Z]+$/", trim($data['lname']))){
                $this->errors['lname'] = "letters only no spaces";
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

    
    

    