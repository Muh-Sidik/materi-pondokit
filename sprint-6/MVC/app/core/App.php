<?php
// Class App untuk class utama

class App { 

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        //ini controller
        $url = $this->parseURL();
        if(file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        //instalsiasi lagi properstynya
        require_once '../app/controllers/' . $this->controller .'.php';
        $this->controller = new $this->controller;

        // ini method
        if (isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
            }
        }

        //params
        if(!empty($url)) {
            $this->params = array_values($url);
        }

        //jalankan controller, method dan kirimkan param jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        //bagian url
        if(isset($_GET['url'])) {
            $url = rtrim(($_GET['url']), '/'); // rtrim untuk menghilangkan '/' di akhir url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}
