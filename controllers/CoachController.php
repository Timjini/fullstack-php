<?php 
    
    require_once __DIR__ . "/../models/Coach.php";

    class CoachController {

        public function index(){
            $coaches = new Coach();
            $coaches = $coaches->all();
            return $coaches;
        }
       public function store($data){
            $coach = new Coach(
                null,
                $data['full_name'],
                $data['position'],
                $data['tags'],
                $data['image']
            );
            $coach->save();
        }
    }
?>