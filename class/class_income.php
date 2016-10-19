<?php

class Income
{

    public function get_income_day(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = "SELECT Price,item_number FROM ITEM,ORDERS WHERE id_item=Id AND date_order=DATE_FORMAT(NOW(),'%Y-%m-%d') ;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }
}

?>