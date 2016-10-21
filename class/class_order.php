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
        $sql = "INSERT INTO  orders (id_client, id_item, item_number, date_order, id_order) VALUES (:id_client, :id_item, :item_number, DATE_FORMAT(NOW(),'%Y-%m-%d'), :id_order); ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_item' => $this->id_item,
        					':item_number' => $this->item_number,
                            ':id_client' => $this->id_client,
                            ':id_order' => $this->id_order));





	}


public function resume(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'SELECT Name,item_number,Price FROM ITEM,orders WHERE id=id_item AND id_order=:id_order ;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_order' => $this->id_order));
        $result = $sth->fetchAll();

        return $result;
    }

public function getIdOrder(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'SELECT MAX(id_order) AS id_order FROM orders;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }



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

public function setId_order($id_order)
    {
        $this->id_order = $id_order;
        return $this;
    }





	public function getName()
    {
        return $this->Name;
    }




    public function getPrice()
    {
        return $this->Price;
    }



}

?>