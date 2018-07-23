<?php

namespace library;

class db_connect
{
    var $host, $user, $password, $dbname;
    function db_connect($host, $user, $password, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        $link = mysqli_connect($host, $user, $password, $dbname);
    }
}