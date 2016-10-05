<?php
class Item
{
    private $id;
    private $number;
    private $cc;
    private $address;
    private $postalcode;
    private $city;
    private $apartment;

    public function retrieve_customer(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'SELECT * FROM Clients WHERE number=:number;';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':number' => $this->number));
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

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function getCC()
    { 
        return $this->cc;
    }

    public function setCC()
    {
        $this->cc = $cc;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress()
    {
        $this->address = $address
        return $this;
    }

    public function getPostalCode()
    {
        return $this->postalcode;
    }

    public function setPostalCode()
    {
        $this->postalcode = $postalcode;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity()
    {
        $this->city = $city;
        return $this;
    }

    public function getApartment()
    {
        return $this->apartment;
    }

    public function setApartment()
    {
        $this->apartment = $apartment;
        return $this;
    }