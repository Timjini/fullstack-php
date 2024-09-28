<?php 
    
    require_once __DIR__ . "/../models/Coach.php";

    class CoachController {
        public function index(){
            $coaches = new Coach();
            $coaches = $coaches->all();
            return $coaches;
        }
        // public function show($id){
        //     $coach = Coach::find($id);
        //     return $coach;
        // }
    }
?>