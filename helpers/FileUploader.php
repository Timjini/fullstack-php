<?php
class FileUploader {
        public $file;
        public $folder;

        public function __construct($file){
           $this->file = $file;
           $this->folder = dirname(__DIR__) . "/public";
        }

        public function uploadFile(){
            $fileName = $this->file['name'];
            move_uploaded_file($this->file['tmp_name'], $this->folder . "/" . $fileName);
            if (file_exists($this->folder . "/" . $fileName)) {
                echo "File uploaded successfully";
                return $fileName;
            } else {
                echo "File upload failed";
            }
        }
    }

?>