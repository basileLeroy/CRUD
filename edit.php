<!-- This is the logic specifically for the Edit page (could be called edit_index for clarity) -->

<?php 
require 'setup.php';

if (!empty($_POST['save'])) {
    
    // TODO: Gather all the info you need
    $id = $_GET['id'];
    $updatedName = $_POST['updatedName'];

    // TODO: Create the update
    $cardRepository->update($id, $updatedName);
}

if (!empty($_POST['delete'])) {

    $id = $_GET['id'];
    $cardRepository->delete($id);
}

require 'editView.php';

