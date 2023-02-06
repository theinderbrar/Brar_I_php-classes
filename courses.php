<?php


class Courses {
    // class proprities 
     private $id;
     public $name;
     public $number;
     public $description;
     public static $courseCount = 0;
     
    // class methods - functions 

        //constuctor 
        public function _construct(){
            self:: $courseCount++;
        }

        public function setDetails($id,$name,$number,$description){
            self:: $courseCount++;
            $this->id = $id;
            $this->name = $name;
            $this->number = $number;
            $this->description = $description;

            date_default_timezone_set("Asia/Calcutta"); 
            $this->createdTime = date("h:i:sa");
            $this->updateTime = null;
        }

        // get course details
        public function getCourse() {
            echo "Course Details";
            echo "id : ".$this->id ;
            echo "name : ". $this->name;
            echo "number : ".$this->number;
            echo "description : ".$this->description;
            echo "created time : ".$this->createdTime;
            echo "updated time : ".$this->updatedTime;            

         }

         //update course name
         private function updateName($name){
            $this->name = $name;
         }


         // update course description
         private function updateDescription($description){
            $this->description = $description;
         }

         // update course number
         private function updateCourseNum($num){
            $this->number = $num;
         }

}

?>