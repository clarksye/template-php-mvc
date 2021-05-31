<?php
use app\core\Controller as Controller;

class Dashboard extends Controller {
    public function index()
    {
        $this->view('dashboard/index');
    }

    public function setting()
    {
        echo "Dashboard/setting";
    }
}