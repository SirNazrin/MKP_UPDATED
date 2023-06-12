<?php

class Incentive extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Insentif Khas Pasangan Pengantin';
            $this->view('/Template/headerModule5', $data);
            $this->view('Manage Incentive/UserIncentiveMainPage', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }

    public function ApplyIncentive(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Permohonan Insentif Khas Pasangan Pengantin';
            $this->view('/Template/headerModule5', $data);
            $this->view('UserView/UserApplyIncentive', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ViewIncentive(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Sejarah Permohonan Insentif Khas Pasangan Pengantin';
            $this->view('/Template/headerModule5', $data);
            $this->view('UserView/UserIncentiveAppHistory', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }
}


?>