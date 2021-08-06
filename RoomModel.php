<?php 

class Room {

    private $roomCode;
    private $idRoom;
    private $namaRoom;
    private $time;

    public function __construct($roomCode, $idRoom, $namaRoom, $time){
        $this->roomCode = $roomCode;
        $this->idRoom = $idRoom;
        $this->namaRoom = $namaRoom;
        $this->time = $time;
    }

    function set_roomCode($roomCode){
        $this->roomCode = $roomCode;
    }

    function set_idRoom($idRoom){
        $this->idRoom = $idRoom;
    }

    function set_namaRoom($namaRoom){
        $this->namaRoom = $namaRoom;
    }
    
    function set_time($time){
        $this->time = $time;
    }

    function get_roomCode(){
        return $this->roomCode;
    }

    function get_idRoom(){
        return $this->idRoom;
    }

    function get_namaRoom(){
        return $this->namaRoom;
    }

    function get_time(){
        return $this->time;
    }
}

?>