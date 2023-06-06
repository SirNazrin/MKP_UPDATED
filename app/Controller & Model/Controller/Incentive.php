<?php

class Incentive extends Controller{

    public function index(){

        $data['title'] = 'Insentif Khas Pasangan Pengantin';
        $this->view('/Template/headerModule5', $data);
        $this->view('UserView/IncentiveMainPage', $data);
        $this->view('/Template/footer');

    }

    public function ApplyIncentive(){

        $data['title'] = 'Permohonan Insentif Khas Pasangan Pengantin';
        $this->view('/Template/headerModule5', $data);
        $this->view('UserView/UserApplyIncentiveInterface', $data);
        $this->view('/Template/footer');

    }

    public function IncentiveHistory(){

        $data['title'] = 'Sejarah Permohonan Insentif Khas Pasangan Pengantin';
        $this->view('/Template/headerModule5', $data);
        $this->view('UserView/UserIncentiveHistoryApplication', $data);
        $this->view('/Template/footer');

    }
}


?>