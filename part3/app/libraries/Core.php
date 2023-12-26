<?php

Class Core{

    public function __construct(){
//        $this->geturl();

        echo "<pre>".print_r($this->geturl(),true)."</pre>";
    }

    public function geturl(){
//        echo $_GET["url"];

        $url = isset($_GET["url"]) ? rtrim($_GET['url'],"/") : "";

        // filter_var(string,filter)
        $url = filter_var($url,FILTER_SANITIZE_URL);  // delete charref  as

        $url = explode("/",$url);
        return $url;
    }

}


?>