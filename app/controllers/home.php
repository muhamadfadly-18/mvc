
<?php

class home extends controller { 
    public function index(){
$data['judul '] = 'Home';
$this->view('templates/header', $data);
$this->view('home/index');
$this->view('templates/footer');
}

public function page()
{

$data['judul'] = 'Page';
$data['gambar'] = 'asahi.jpg';
$data['nama'] = 'Endang';
$data['pekerjaan'] = 'Duda (akut)';
$this->view('templates/header', $data);
$this->view('home/page', $data);
$this->view('templates/footer');
}
}