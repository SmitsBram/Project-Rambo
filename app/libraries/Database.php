<?php
class Database
{
    private $dbHandler;
    private $statement;


    
    
    public function __construct()
    {

        
        $conn = 'mysql:host=' . DB_HOST . ';dbname='. DB_NAME . ';charset=UTF8';

        try {
            $this->dbHandler = new PDO($conn, DB_USER, DB_PASS);
            $this->dbHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Voeg deze regel toe om foutafhandeling in te schakelen

            if ($this->dbHandler) {
                // echo "Verbinding met de database is gelukt";
            } else {
                echo "Interne server-error";
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }


    //DE OUDE CODE
    //*public function prepare($sql)
    //{
    //    $this->statement = $this->dbHandler->prepare($sql);
   // }

    public function prepare($sql)
{
    return $this->dbHandler->prepare($sql); // Retourneer een PDOStatement object
}

    public function execute()
    {
        return $this->statement->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}
