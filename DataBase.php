<?php
// 12. Создайте класс-оболочку Db над базами данных. Класс должен иметь следующие методы: получение данных, удаление данных, 
// редактирование данных, подсчет данных, очистка таблицы, очистка таблиц.
class DB {
    private $link;
    private $host, $username, $password, $database;
    
    public function __construct($host, $username, $password, $database){
        $this->host        = $host;
        $this->username    = $username;
        $this->password    = $password;
        $this->database    = $database;
        $this->link = mysqli_connect($this->host, $this->username, $this->password)
            OR die("There was a problem connecting to the database.");

        mysqli_select_db( $this->link,$this->database)
            OR die("There was a problem selecting the database.");

        return true;
    }
    public function query($query) {
        $result = mysqli_query($this->link, $query);
        if (!$result) die('Invalid query: ' . mysqli_error($this->link));
        return $result;
    }

    public function __destruct() {
        mysqli_close($this->link)
            OR die("There was a problem disconnecting from the database.");
    }

public function gettingDepartments(){
        $db = new DB("localhost", "root", "", "visitorform");
        $result = $db->query("SELECT * FROM tb_user_dept");
        return $result;
  }
}