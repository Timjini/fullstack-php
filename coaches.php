<?php
require('controllers/CoachController.php');

$coachController = new CoachController();

$coaches = $coachController->index();

echo json_encode($coaches);

?>