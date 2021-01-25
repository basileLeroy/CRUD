<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {

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
        // $question = "SELECT * FROM CRUD;";
        // $dataDump = mysqli_query($this->databaseManager->database, $question);
        $result = $this->databaseManager->database->query("SELECT * FROM marble_list ORDER BY name");

        if (!$result) {
            var_dump($this->databaseManager->database->error);
        }

        echo '<pre>';
        var_dump($result->fetch_all(MYSQLI_ASSOC));
        echo '</pre>';
        return $result;
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}