<?php
class Item
{
    private $id;
    private $name;
    private $price;
    private $details;
    
    public function change()
    {
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = "UPDATE ITEM SET name = :name, price = :price, details = :details WHERE id = :id;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $this->id,
                            ':name' => $this->name,
                            ':price' => $this->price,
                            ':details' => $this->details));

        $sth->execute();
        }

    public function add_item()
    {
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = "INSERT INTO ITEM (name, price, details) VALUES (:name, :price, :details);";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':name' => $this->name,
                            ':price' => $this->price,
                            ':details' => $this->details));
        }

    public function delete_item()
    {
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = "DELETE FROM ITEM WHERE id=:id;";
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $this->id));
        }

    public function load_table(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'SELECT * FROM ITEM;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }
    public function load_item(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'SELECT * FROM ITEM WHERE id=:id;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $this->id));
        $sth->execute();
        $result = $sth->fetchAll();

        return $result;
    }
    /**
     * Gets the value of ville.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Sets the value of ville.
     *
     * @param mixed $ville the ville
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets the value of ville.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Sets the value of ville.
     *
     * @param mixed $ville the ville
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Sets the value of type.
     *
     * @param mixed $type the type
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Gets the value of date_event.
     *
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Sets the value of date_event.
     *
     * @param mixed $date_event the date event
     *
     * @return self
     */
    public function setDetails($details)
    {
        $this->details = $details;
        return $this;
    }
}