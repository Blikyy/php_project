<?php

class MySQL{

    private $db;

    // connect
    public function connect(string $host = "", string $username = "",string $password = "",string $database = ""): ?static{
        
        $this->db = new mysqli($host, $username, $password, $database);
        return null;
    }

    // select

    function select_fetch(string $query): array{

        $result = mysqli_query($this->db, $query);
        if (!$result) {
            return array();
        }
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    function select(string $query){
        $result = mysqli_query($this->db, $query);
        return $result;
    }
        
    // insert

    function insert(string $query){

        $insert = mysqli_query($this->db, $query);
        return true;

    }   

    // update

    function update(string $table, int $id, array $data): bool{

        $set = array_map(function ($key, $value) {
            return "$key = '" . $this->db->real_escape_string($value) . "'";
        }, array_keys($data), array_values($data));
        $set = implode(',', $set);
        $sql = "UPDATE $table SET $set WHERE id = $id";
        return mysqli_query($this->db, $sql);

    }

    // delete

    function delete(string $table, int $id): bool{

        $sql = "DELETE FROM $table WHERE id=$id";
        return mysqli_query($this->db, $sql);

    }
    /**
     * @param string $query
     * @param array $colums
     * @return string
     */
    
    function table(string $query, array $colums):string{

        $result = mysqli_query($this->db, $query);
        $html = "";
        $html .= "<table class='customTable'>\n";
        $html .= "<thead>\n";
        $html .= "<tr>\n";
        foreach($colums as $colum){
            $html .= "<th>" . $colum . "</th>\n";
        }
        $html .= "</tr>\n";
        $html .= "<thead>\n";
        $html .= "<tbody>\n";
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= "<tr>\n";
            foreach ($row as $field => $value) {
                $html .= "<td>" . $value ."</td>\n"; 
            }
            $html .=  "</tr>\n";
        }
        $html .= "<tbody>\n";
        $html .= "</table>\n";
        return $html;

    }
}


