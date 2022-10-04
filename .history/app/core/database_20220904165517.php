<?php

class Database
{
    private function connect()
    {

        $str = DBDRIVER.":hostname=".DBHOST.";dbname=".DBNAME;
        $conn = new PDO($str, DBUSER, DBPASS);
        return $conn;
    }
    public function query($query, $data = [],$type="object")
    {
        $conn = $this->connect();
        $stm = $conn -> prepare($query);
        if($stm)
        {
            $check=$stm->execute($data);
            if($check)
            {
                
                if($type == "object")
                {
                    $type = PDO::FETCH_OBJ;
                }else{
                    $type = PDO::FETCH_ASSOC; 
                }
                $result = $stm ->fetchAll($type);
                if(is_array($result) && count($result) > 0)
                {
                    return $result;
                }
            }
        }
        return false;
    }

    public function create_tables()
    {
        $query = "
            CREATE TABLE IF NOT EXISTS `users` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `email` varchar(100) NOT NULL,
                `password` varchar(255) NOT NULL,
                `userid` varchar(25) NOT NULL,
                `username` varchar(15) NOT NULL,
                `date` date DEFAULT NULL,
                PRIMARY KEY (`id`),
                KEY `email` (`email`),
                KEY `userid` (`userid`),
                KEY `username` (`username`),
                KEY `date` (`date`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
        ";
        $this -> query($query);
    }
}