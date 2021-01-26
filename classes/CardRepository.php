<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{

    private $databaseManager;
    public $newName;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
        
        
    }

    public function create()
    {
        
        if (!empty($_POST['add'])) {
            $this->newName = $_POST['add'];

            $create = $this->databaseManager->database->query("INSERT INTO marble_list (name) VALUES ('$this->newName')");

            if (!$create) {
                var_dump($this->databaseManager->database->error);
            }

            return $create;
        }
        
        $this->get();
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // We get the database connection first, so we can apply our queries with it
        $result = $this->databaseManager->database->query("SELECT * FROM marble_list");

        if (!$result) {
            var_dump($this->databaseManager->database->error);
        }
        return $result;
    }

    public function update(int $id, string $updatedName)
    {
        $this->databaseManager->database->query("UPDATE marble_list SET name = '$updatedName' WHERE id = $id;");

        header('Location: index.php');
    }

    public function delete(int $id)
    {
        $this->databaseManager->database->query("DELETE FROM marble_list WHERE id = $id;");

        header('Location: index.php');
    }

}