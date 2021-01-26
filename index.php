<!-- This is the logic specifically for the landing page (could be called landing_index) -->

<?php

require 'setup.php';

$cards = $cardRepository->create();
$cards = $cardRepository->get();


// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
require 'overview.php';