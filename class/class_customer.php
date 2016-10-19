<?php
class Customer
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

      public function new_customer(){
        $dsn = 'mysql:dbname=restaurant;host=localhost';
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
        $sql = 'INSERT INTO clients (number, cc, address, postal_code, city, apartment) values (:number, :cc, :address, :postal_code, :city, :apartment)';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':number' => $this->number,
                            ':address' => $this->address,
                            ':cc' => $this->cc,
                            ':postal_code' => $this->postal_code,
                            ':city' => $this->city,
                            ':apartment' => $this->apartment));
        $sth->execute();
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

    public function setCC($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getPostalCode()
    {
        return $this->postal_code;
    }

    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getApartment()
    {
        return $this->apartment;
    }

    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

}