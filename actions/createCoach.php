<?php
require('../controllers/CoachController.php');
require('../helpers/FileUploader.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileUploader = new FileUploader($_FILES['uploadedFile']);
    $fileName = $fileUploader->uploadFile();

    $data = [
        'full_name' => $_POST['full_name'],
        'position' => $_POST['position'],
        'tags' => $_POST['tags'],
        'image' => $fileName
    ];
    $coachController = new CoachController();
    $coachController->store($data);
    exit;

} else {
    echo "Invalid request method";
    exit;
}
    
?>