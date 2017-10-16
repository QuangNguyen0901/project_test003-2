<?php

include ("../Model/user.php");

class c_user
{
    public function display_users(){
        $m_user = new user();
        $user = $m_user->read_all_user();

        include("../View/v_all_user.php");
    }
}
?>

