<!-- This is the file where we create the connection to the database. -->

<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    // host = server name
    private $host;
    // name = username
    private $name;
    private $password;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database = 'CRUD';

    public function __construct(string $host, string $name, string $password)
    {
        // TODO: Set any user and password information
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
    }

    public function connect()
    {
        // TODO: make the connection to the database
        $this->database = mysqli_connect($this->host, $this->name, $this->password, $this->database);
    }
}