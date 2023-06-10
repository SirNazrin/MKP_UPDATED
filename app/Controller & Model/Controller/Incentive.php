<?php

class Incentive extends Controller{

    public function index(){

        $data['title'] = 'Insentif Khas Pasangan Pengantin';
        $this->view('/Template/headerModule5', $data);
        $this->view('UserView/UserIncentiveMainPage', $data);
        $this->view('/Template/footer');

    }

    public function ApplyIncentive(){

        $data['title'] = 'Permohonan Insentif Khas Pasangan Pengantin';
        $this->view('/Template/headerModule5', $data);
        $this->view('UserView/UserApplyIncentiveInterface', $data);
        $this->view('/Template/footer');

    }

    public function ViewIncentive(){

        $data['title'] = 'Sejarah Permohonan Insentif Khas Pasangan Pengantin';
        $this->view('/Template/headerModule5', $data);
        $this->view('UserView/UserViewIncentiveInterface', $data);
        $this->view('/Template/footer');

    }
}


?>