<?php

class ManageProfile extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){

            if($_SESSION['role'] == "ADMIN"){
                $data['title'] = 'Admin';
                $this->view('/Template/header', $data);
                $this->view('AdminView/AdminManageProfile', $data);
                $this->view('/Template/footer');
            }
            else{
                $data['title'] = ' User Profile';
                $this->view('/Template/header', $data);
                $this->view('UserView/UserProfileInterface', $data);
                $this->view('/Template/footer');
            }

        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }
}


?>