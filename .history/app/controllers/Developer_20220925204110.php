<?php
class Developer extends Controller{
    public function index(){
        if(!Auth::logged_in()){
            message('Please login to view dashboard');
            redirect('login');

        }else if(Auth::getrole() !== 'developer'){
            message('Sorry but your not a developer');
            redirect('login');
        }
        $data['title'] = 'Dashboard';
        $this->view('dev/dash', $data);
    }
    public function profile($id = null){
        if(!Auth::logged_in()){
            message('Please login to view dashboard');
            redirect('login');

        }else if(Auth::getrole() !== 'developer'){

            redirect('login');
        }
        
        $id = $id ?? Auth::getuserid();
        $user = new User();
        $data['row'] = $row = $user->first(['userid'=>$id]);
        if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
            
            $folder = "uploads/images/".$row->userid."/";
            if(!file_exists($folder)){
                mkdir($folder, 0777, true);
                file_put_contents($folder."index.php", "access denied");
                file_put_contents("uploads/index.php", "access denied");
            }
            
            if($user->edit_validate($_POST, $row)){
                $allowed = ['image/jpeg', 'image/png', 'image/gif','image/jpg'];
                if(!empty($_FILES['image']['name'])){
                    if($_FILES['image']['error'] == 0){
                        if(in_array($_FILES['image']['type'], $allowed)){
                            //everything is good
                            $destination = $folder.time().$_FILES['image']['name'];
                            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                            resize_img($destination);
                            $_POST['image'] = $destination;
                            if(file_exists($row->image)){
                                unlink($row->image);
                            }
                        }else{
                            $user->errors['image'] = 'This file type is not allowed';
                        }
                    }else{
                        $user->errors['image'] = 'could not upload image';
                    }
                }
                $user->update($id,$_POST);
                
                
                
                //message("Profile saved successfully");
                //redirect('developer/profile/'.$id);

            }
            if(empty($user->errors)){
                $arr['message'] = "Profile saved successfully";
            }else{
                $arr['message'] = "Please correct this errors";
                $arr['errors'] = $user->errors;
            }
            echo json_encode($arr);

            die;
        }
        $data['title'] = 'Profile';
        $data['errors'] = $user->errors;
        $this->view('dev/profile', $data);
    }
    public function projects($action = null,$id=null){
        if(!Auth::logged_in()){
            message('Please login to view dashboard');
            redirect('login');

        }else if(Auth::getrole() !== 'developer'){

            redirect('login');
        }
        $userid = Auth::getuserid();
        $data= [];
        $data['action'] = $action;
        $data['id'] = $id;
        if($action == 'add'){
            $service = new Services();
            $project = new Project();

            $data['rows'] = $project->where(['userid'=>$userid]);
            $data['services'] = $service->findAll();
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if($project->validate($_POST)){
                    
                    $_POST['date'] = date("Y-m-d H:i:s");
                    $_POST['userid'] = $userid;
                    $project->insert($_POST);
                    $row = $project->first(['userid'=>$userid, 'published' => 0]);

                    message("Your course was succefully created");
                    //redirect('developer/projects/edit/'.$userid);
                    if($row){
                        redirect('developer/projects/edit/'.$row->userid);
                    }else{
                        redirect('developer/projects');
                    }
                }
                $data['errors'] = $project->errors;
            }
        }
        
        $this->view('dev/projects', $data);
    }
    
    public function signup(){
        if(Auth::logged_in()){
            redirect('home');
            message('Your already logged on');
            
        }
        $data["errors"] = [];
        $user = new User();
        $randint = random_int(20,2000000);
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if($user->validate($_POST)){

                $_POST['date'] = date("Y-m-d H:i:s");
                $_POST["userid"] = "D-".strval($randint);
                $_POST['role'] = "developer";
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user -> insert($_POST);
                message($_POST['username']." Your account was created successfully please login");
                redirect('login');
            }
        }
       
        $data["errors"]=$user->errors;
        $data['title'] = 'Signup';
        $this->view('dev/signup', $data);
        
    }
    public function logout(){
        Auth::logout();
        message("Log in to your account");
        redirect('login');
        
    }
}
