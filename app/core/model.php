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
    public function update($id, $data){
        //remove unwanted columns
        if(!empty($this->allowedColumns)){
            foreach($data as $key => $value){
                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);   
                }
            }
        }
        $keys = array_keys($data);
        $query = "update " . $this->table. " set ";
        foreach($keys as $key){
            $query .= $key ."= :" . $key .",";

        }
        $query = trim($query, ",");
        $query .= " where userid = :id ";
        $data['id'] = $id;
        //show($data);
        //show($query);die;
        $this->query($query, $data);
        
    }
    
    public function where($data, $order = 'desc'){
        //remove unwanted columns
        $keys = array_keys($data);
        $query = "SELECT * FROM ".$this->table." where ";
        foreach($keys as $key){
            $query .= $key . "=:" . $key . " && ";
        }
        $query = trim($query, "&& ");
        $query .= " order by id $order ";
        $result = $this->query($query, $data);
        if(is_array($result)){
            //run after select functions
            if(property_exists($this, 'afterSelect')){
                foreach ($this->afterSelect as $func) {
                   $result = $this->$func($result);
                }
            }
            return $result;
        }
        return false;
    }
    public function findAll($order = 'desc'){
        //remove unwanted columns
        
        $query = "SELECT * FROM ".$this->table." order by id asc ";
        
        $result = $this->query($query);
        if(is_array($result)){
            if(property_exists($this, 'afterSelect')){
                foreach ($this->afterSelect as $func) {
                   $result = $this->$func($result);
                }
            }
            return $result;
        }
        return false;
    }
    public function first($data, $order ='desc'){
        //remove unwanted columns
        $keys = array_keys($data);
        $query = "SELECT * FROM ".$this->table." where ";
        foreach($keys as $key){
            $query .= $key . "=:" . $key . " && ";
        }
        $query = trim($query, "&& ");
        $query .= " order by id $order limit 1";
        
        $result = $this->query($query, $data);
        if(is_array($result)){
            
            if(property_exists($this, 'afterSelect')){
                foreach ($this->afterSelect as $func) {
                   $result = $this->$func($result);
                }
            }
            return $result[0];
        }
        return false;
    }

}   