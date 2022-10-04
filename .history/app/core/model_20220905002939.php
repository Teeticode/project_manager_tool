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
        $values = array_values($data);
        $query = "insert into " . $this->table;
        $query .="(".implode(",", $keys).") values (:".implode(",:", $keys).")";
        $this->query($query, $data);
        
    }
}   