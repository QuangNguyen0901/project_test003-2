<?php
require ("database.php");
class user extends database {
    var $user_name;
    var $user_sex;


    public function read_all_user(){
        $sql="select * from user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_user_by_id($user_id){
        $sql="select * from user where user_id=?";
        $this->setQuery($sql);
        $param=array($user_id);
        return $this->loadRow($param);
    }


}
$m_user=new user();
echo count($m_user->read_all_user());

?>