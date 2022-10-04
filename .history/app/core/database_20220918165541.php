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
                `role` varchar(20) NOT NULL,
                `date` date DEFAULT NULL,
                PRIMARY KEY (`id`),
                KEY `email` (`email`),
                KEY `userid` (`userid`),
                KEY `username` (`username`),
                KEY `date` (`date`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
        ";
        $this -> query($query);

        $query2 = "
            CREATE TABLE IF NOT EXISTS `projects` (
                `id` int(10) NOT NULL AUTO_INCREMENT,
                `title` varchar(20) NOT NULL,
                `description` varchar(1024) NOT NULL,
                `project_img` varchar(1024) DEFAULT NULL,
                `project_vid` varchar(1024) DEFAULT NULL,
                `projectid` varchar(1024) NOT NULL,
                `userid` varchar(1024) NOT NULL,
                `category_id` varchar(1024) NOT NULL,
                `services_id` varchar(1024) NOT NULL,
                `level_id` varchar(1024) NOT NULL,
                `language_id` varchar(1024) NOT NULL,
                `promo_link` varchar(1024) NOT NULL,
                `know_dev_vid` varchar(1024) DEFAULT NULL,
                `date` datetime NOT NULL,
                `tags` varchar(1024) NOT NULL,
                `primary_subject` varchar(1024) NOT NULL,
                `interview_vid` varchar(1024) DEFAULT NULL,
                PRIMARY KEY (`id`),
                UNIQUE KEY `userid` (`userid`) USING HASH,
                KEY `title` (`title`),
                KEY `category_id` (`category_id`(768)),
                KEY `services_id` (`services_id`(768)),
                KEY `level_id` (`level_id`(768)),
                KEY `language_id` (`language_id`(768)),
                KEY `projectid` (`projectid`(768)),
                KEY `date` (`date`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
        ";
        $this->query($query2);
    }
}