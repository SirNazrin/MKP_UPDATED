<?php

class Consultation extends Controller{

    public function index(){

        $data['title'] = 'Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserConsultationMainpage', $data);
        $this->view('/Template/footer');

    }

    public function ApplyConsult(){

        $data['title'] = 'Permohonan Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyConsultationInterface', $data);
        $this->view('/Template/footer');

    }

    public function ApplyConsultExtension(){

        $data['title'] = 'Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserApplyConsultationExtensionInteface', $data);
        $this->view('/Template/footer');

    }

    public function ViewConsult(){

        $data['title'] = 'Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserConsultationMainpage', $data);
        $this->view('/Template/footer');

    }

    public function EditConsult(){

        $data['title'] = 'Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserConsultationMainpage', $data);
        $this->view('/Template/footer');

    }

    public function ConsultTimetable(){

        $data['title'] = 'Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserConsultationMainpage', $data);
        $this->view('/Template/footer');

    }

    public function ConsultReview(){

        $data['title'] = 'Khidmat Nasihat';
        $this->view('/Template/header', $data);
        $this->view('UserView/UserConsultationMainpage', $data);
        $this->view('/Template/footer');

    }
}


?>