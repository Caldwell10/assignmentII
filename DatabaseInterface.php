<?php

interface DatabaseInterface{
    public function connect($host, $username, $password, $database);
    public function disconnect();

}

?>