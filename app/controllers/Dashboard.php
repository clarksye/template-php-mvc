<?php
use app\core\Controller as Controller;

class Dashboard extends Controller {

    public function index($url1 = "")
    {
        $data['pageName'] = "Dashboard";
        $data['url1'] = $url1;
        $data['name'] = $this->model('Dashboard')->getUser();

        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}