<?php 

class Stories {

    private $idStories;
    private $overallValue;
    private $story;
    private $isDone;

    public function __construct($idStories , $overallValue, $story, $isDone){
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

    function add_story(){
        $story = $_POST['story'];
		$overallValue = $_POST['overallValue'];
		$isDone = $_POST['isDone'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO stories(story, overallValue, isDone) VALUES('$story','$overallValue','$isDone')");
		
		// Show message when user added
		// echo "User added successfully. <a href='index.php'>View Users</a>";
    }

    function edit_room(){
        // include database connection file
        include_once("config.php");

        $idStory = $_POST['idStory'];
	
	    $story = $_POST['story'];
		$overallValue = $_POST['overallValue'];
		$isDone = $_POST['isDone'];
		
        // update user data
        $result = mysqli_query($mysqli, "UPDATE stories SET story='$story',overallValue='$overallValue',isDone='$isDone' WHERE idStories=$idStories");
        
        // Redirect to homepage to display updated user in list
        // header("Location: index.php");

        // Display selected user data based on id
        // Getting id from url
        $idStories = $_GET['idStories'];
        
        // Fetech user data based on id
        $result = mysqli_query($mysqli, "SELECT * FROM stories WHERE idStories=$idStories");
        
        while($user_data = mysqli_fetch_array($result))
        {
            $story = $user_data['story'];
            $overallValue = $user_data['overallValue'];
            $isDone = $user_data['isDone'];
        }
    }

    function delete_room(){
        // include database connection file
        include_once("config.php");
 
        // Get id from URL to delete that user
        $idStories = $_GET['idStories'];
        
        // Delete user row from table based on given id
        $result = mysqli_query($mysqli, "DELETE FROM stories WHERE idStories=$idStories");
    }
}

?>