<?php 

class Stories {

    private $idStories;
    private $overallValue;
    private $story;
    private $isDone;

    public function __construct($idStories, $overallValue, $story, $isDone){
        $this->idStories = $idStories;
        $this->overallValue = $overallValue;
        $this->story = $story;
        $this->isDone = $isDone;
    }

    function set_idStories($idStories){
        $this->idStories = $idStories;
    }

    function set_overallValue($overallValue){
        $this->overallValue = $overallValue;
    }

    function set_story($story){
        $this->story = $story;
    }

    function set_isDone($isDone){
        $this->isDone = $isDone;
    }

    function get_idStories(){
        return $this->idStories;
    }

    function get_overallValue(){
        return $this->overallValue;
    }

    function get_story(){
        return $this->story;
    }

    function get_isDone(){
        return $this->isDone;
    }
}

?>