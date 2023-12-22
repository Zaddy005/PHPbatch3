<?php
ini_set("display_errors",1);
require_once("./Database.php");

class Article{

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    // Get all articles
    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidata();
    }

    // get single articles
    public function getarticlesbyid($id){
        $this->db->dbquery("SELECT * FROM articles WHERE id = :id");
        $this->db->dbbind(":id",$id);
        return $this->db->getsingledata();
    }

    public function insertarticle($data){
        $this->db->dbquery("INSERT INTO articles(title,content,user_id) VALUE(:title,:content,:user_id)");
        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);
        $this->db->dbbind(':user_id',$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }

    }

}

?>


<!--CREATE TABLE IF NOT EXISTS articles(-->
<!--    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,-->
<!--    title VARCHAR(255),-->
<!--    content test,-->
<!--    user_id INT(20)-->
<!--);-->
<!---->
<!---->
<!--CREATE TABLE IF NOT EXISTS user(-->
<!--    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,-->
<!--    name VARCHAR(255),-->
<!--    email VARCHAR(255),-->
<!--    password VARCHAR(255)-->
<!--);-->
<!---->

