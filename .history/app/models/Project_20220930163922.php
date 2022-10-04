<?php
    class Project extends Model
    {
        public $errors = [];
        protected $table = "projects";
        protected $afterSelect = [
            'get_services',
            'get_user',
            'get_price',
            'get_level',
            'get_language'
        ];
        protected $beforeUpdate = [];
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
            'draft'
            
        ];
        public function validate($data){
            $this->errors = [];
            if(empty($data['title'])){
                $this->errors['title'] = "Title is required";
            } 
            if(empty($data['skills'])){
                $this->errors['skills'] = "skills is required";
            } 
            if(!preg_match("/^[a-zA-Z \&\']+$/", trim($data['skills']))){
                $this->errors['skills'] = "letters and spaces only";
            }
            if(!preg_match("/^[a-zA-Z0-9 \_\&\']+$/", trim($data['title']))){
                $this->errors['title'] = "letters, numbers, spaces and [_\&] only";
            }
            if(empty($data['services_id'])){
                $this->errors['services_id'] = "Select a category above";
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
        
        protected function get_services($rows){
            $db = new Database();
            if(!empty($rows[0] -> services_id)){
                foreach ($rows as $key => $row) {
                    $query = "select * from services where id = :id limit 1";
                    $service = $db->query($query, ['id'=>$row->services_id]);
                    if(!empty($service)){
                        $rows[$key] -> services_row = $service[0];
                    }
                }
            }
            return $rows;
        }
        protected function get_user($rows){
            $db = new Database();
            if(!empty($rows[0] -> userid)){
                foreach ($rows as $key => $row) {
                    $query = "select * from users where userid = :userid limit 1";
                    $user = $db->query($query, ['userid'=>$row->userid]);
                    if(!empty($user)){
                        $rows[$key] -> users_row = $user[0];
                    }
                }
            }
            return $rows;
        }
        protected function get_price($rows){

            return $rows;
        }
        protected function get_level($rows){

            return $rows;
        }
        protected function get_language($rows){

            return $rows;
        }
    }

    
    

    