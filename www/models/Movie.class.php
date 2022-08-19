<?php

class Movie{

    private int $_id;
    private string $_title;
    private string $_imageUrl;
    private int $_runtime;
    private string $_description;
    private DateTime $_releaseDate;
    

    public function _construct($id, $title, $imageUrl, $runtime, $description, $releaseDate){
        $this->_id = $id;
        $this->_title = $title;
        $this->_imageUrl = $imageUrl;
        $this->_runtime = $runtime;
        $this->_description = $description;
        $this->_releaseDate = new DateTime($releaseDate);
        
    }

    public function getId(){return $this->_id;}
    public function getTitle(){return $this->_title;}
    public function getImageUrl(){return $this->_imageUrl;}
    public function getRuntime(){return $this->_runtime;}
    public function getDescription(){return $this->_description;}
    public function getReleaseDate(){return $this->_releaseDate;}

}
?>