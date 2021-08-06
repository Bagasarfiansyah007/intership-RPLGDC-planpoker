<?php 

class User {
    private $id;
    private $password;
    private $nim;
    private $nama;
    private $email;
    private $role;

    // contructor untuk model user
    public function __construct($id, $password, $nim, $nama, $email, $role){
        $this->id = $id;
        $this->password = $password;
        $this->nim = $nim;
        $this->nama = $nama;
        $this->email = $email;
        $this->role = $role;
    }

    function set_id($id){
        $this->id = $id;
    }

    function set_password($password){
        $this->password = $password;
    }

    function set_nim($nim){
        $this->nim = $nim;
    }
    
    function set_nama($nama){
        $this->nama = $nama;
    }

    function set_email($email){
        $this->email = $email;
    }

    function set_role($role){
        $this->role = $role;
    }

    function get_id(){
        return $this->id;
    }

    function get_password(){
        return $this->password;
    }

    function get_nim(){
        return $this->nim;
    }

    function get_nama(){
        return $this->nama;
    }

    function get_email(){
        return $this->email;
    }

    function get_role(){
        return $this->role;
    }
}

?>