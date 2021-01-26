<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{

    private $databaseManager;
    public $newName;
    public $edit;
    public $updateName;

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
        // TODO: replace dummy data by real one
        // return [
        //     ['name' => 'Mermaid marbles'],
        //     ['name' => 'Cat-Eyed marbles'],
        //     ['name' => 'Classic marbles'],
        //     ['name' => 'Parrot marbles'],
        //     ['name' => 'Ocean marbles'],
        //     ['name' => 'Firefly marbles'],
        //     ['name' => 'Pirate marbles'],
        //     ['name' => 'Color-Bomb marbles'],
        //     ['name' => 'dummy data'],
        // ];

        // We get the database connection first, so we can apply our queries with it
        $result = $this->databaseManager->database->query("SELECT * FROM marble_list");

        if (!$result) {
            var_dump($this->databaseManager->database->error);
        }

        // echo '<pre>';
        // var_dump($result->fetch_all(MYSQLI_ASSOC));
        // echo '</pre>';
        return $result;
    }

    public function update()
    {
        // echo "I AM STUCK";
        if (!empty($_POST['save'])) {

            $this->edit = $_GET['name'];
            $this->updateName = $_POST['editName'];
            $edit = $this->databaseManager->database->query("UPDATE marble_list SET name = '$this->updateName' WHERE name = $this->edit;");
    
            if (!$edit) {
                var_dump($this->databaseManager->database->error);
            }
            
            return $edit;
            header('Location: ../index.php');

        }

        // echo '<pre>';
        // var_dump($edit->fetch_all(MYSQLI_ASSOC));
        // echo '</pre>';
    }

    public function delete()
    {

    }

}