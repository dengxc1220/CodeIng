<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function index()
    {
        echo "miss";
        $this->load->view('test/test');

    }
}?>