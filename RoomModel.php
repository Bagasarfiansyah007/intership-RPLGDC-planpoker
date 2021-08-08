<?php 

class Room {

    private $roomCode;
    private $idRoom;
    private $namaRoom;
    private $time;

    public function __construct($idRoom, $roomCode, $namaRoom, $time){
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

    function add_room(){
        $roomCode = $_POST['roomCode'];
		$namaRoom = $_POST['namaRoom'];
		$time = $_POST['time'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO room(roomCode,namaRoom,time) VALUES('$roomCode','$namaRoom','$time')");
		
		// Show message when user added
		// echo "User added successfully. <a href='index.php'>View Users</a>";
    }

    function edit_room(){
        // include database connection file
        include_once("config.php");

        $idRoom = $_POST['idRoom'];
	
	    $roomCode = $_POST['roomCode'];
		$namaRoom = $_POST['namaRoom'];
		$time = $_POST['time'];
		
        // update user data
        $result = mysqli_query($mysqli, "UPDATE room SET roomCode='$roomCode',namaRoom='$namaRoom',time='$time' WHERE idRoom=$idRoom");
        
        // Redirect to homepage to display updated user in list
        // header("Location: index.php");

        // Display selected user data based on id
        // Getting id from url
        $idRoom = $_GET['idRoom'];
        
        // Fetech user data based on id
        $result = mysqli_query($mysqli, "SELECT * FROM room WHERE idRoom=$idRoom");
        
        while($user_data = mysqli_fetch_array($result))
        {
            $roomCode = $user_data['roomCode'];
            $namaRoom = $user_data['namaRoom'];
            $time = $user_data['time'];
        }
    }

    function delete_room(){
        // include database connection file
        include_once("config.php");
 
        // Get id from URL to delete that user
        $idRoom = $_GET['idRoom'];
        
        // Delete user row from table based on given id
        $result = mysqli_query($mysqli, "DELETE FROM room WHERE idRoom=$idRoom");
    }
}

?>