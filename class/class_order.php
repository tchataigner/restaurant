<?php
class Order
{

	private $id_order;
	private $id_client;
	private $id_item;


	public function choose()
	{
		$dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = 'root';
        $pdo = new PDO($dsn, $user, $password);
        $sql = "INSERT INTO  orders (id_client, id_item) VALUES (:id_client, :id_item) ";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id_item' => $this->id_item,
                            ':id_client' => $this->id_client));


        

        $sth->execute();




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




}

?>