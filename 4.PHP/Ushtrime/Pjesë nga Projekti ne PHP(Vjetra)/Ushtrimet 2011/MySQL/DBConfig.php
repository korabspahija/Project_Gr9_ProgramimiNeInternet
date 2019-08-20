<?php
class DBConfig
{
    private $ServerName = "localhost";
    private $DBName="db3";
    private $Username = "root";
    private $Password= "123";
    function get_ServerName()
    {
        return $this->ServerName;
    }
    function get_DbName()
    {
        return $this->DBName;
    }
    function get_Username()
    {
        return $this->Username;
    }
    function get_Password()
    {
        return $this->Password;
    }
}
$db_config = new DBConfig();

@$con = mysql_connect(
        $db_config->get_ServerName(),
        $db_config->get_Username(),
        $db_config->get_Password());

if(!$con)
    die("Nuk mund te lidheni me server! Error:".mysql_error());

mysql_select_db($db_config->get_DbName());
?>
