<?php
    /**
     * main model class
     */
class Model extends Database
{
    protected $table = "";
    public function insert($data){
        //remove unwanted columns
        if(!empty($this->allowedColumns)){
            foreach($data as $key => $value){
                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);   
                }
            }
        }
        $keys = array_keys($data);
        $query = "insert into " . $this->table;
        $query .="(".implode(",", $keys).") values (:".implode(",:", $keys).")";
        $this->query($query, $data);
        
    }
    
    public function where($data){
        //remove unwanted columns
        $keys = array_keys($data);
        $query = "SELECT * FROM ".$this->table." where "
        foreach($keys as $key){
            $query .= $key . "=:" . $key . " && ";
        }
        $query = trim($query, "&& ");
        echo $query; die
        $result = $this->query($query, $data);
        if(is_array($result)){
            return $result;
        }
        return false;
    }
}   