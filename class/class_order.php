<?php
class Order
{

	private $id_order;
	private $id_client;
	private $id_item;
	private $item_number;


	public function choose()
	{
		$dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = "INSERT INTO  orders (id_client, id_item, item_number, date_order) VALUES (:id_client, :id_item, :item_number, DATE_FORMAT(NOW(),'%Y-%m-%d')) ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_item' => $this->id_item,
        					':item_number' => $this->item_number,
                            ':id_client' => $this->id_client));


  

        $sth->execute();


	}

/*
public function resume(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = 'root';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'SELECT Name,Price FROM ITEM orders, WHERE item.id=:orders.id_item;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':Name' => $this->Name,
        					'Price' => $this->Price));
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }


*/

	public function setId_item($id_item)
    {


        $this->id_item = $id_item;
        return $this;
    }





    public function setId_client($id_client)
    {
        $this->id_client = $id_client;
        return $this;
    }

public function setItem_number($item_number)
    {
        $this->item_number = $item_number;
        return $this;
    }


/*

	public function getName()
    {
        return $this->Name;
    }




    public function getPrice()
    {
        return $this->Price;
    }


*/
}

?>