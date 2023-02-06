<?php


class Student {
    // class proprities 
     private $id;
     public $fname;
     public $lname;
     protected $image;
     public static $count = 0;
     
    // class methods - functions 


        public function setDetails($id,$fname,$lname,$image){
            // set count each time student detail is set
            self:: $count++;
            
            $this->id = $id;
            $this->firstName = $fname;
            $this->lastName = $lname;
            $this->image = $image;

        }

        public function updateName($fname, $lname) {
            $this->firstName = $fname;
            $this->lastName = $lname;;
         }
                
        
        public function getStudentDetails() {
            echo "Student Details"."\n".
            "id : ".$this->id."\n".
            "name : ". $this->firstName . " " . $this->lastName."\n".
            "image : ".$this->image."\n";
        }

}

class RegisterdStudent extends Student {

    protected $programid;
    private $level;

    // function overrides student class function
    public function setDetails($id,$fname,$lname,$image, $programid,$level){

        $this->id = $id;
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->image = $image;
        $this->programId = $programid;
        $this->level = $level;

    }

    private function setProgram($programid){
        $this->programId = $programid;
    }

    public function setLevel($level){
        $this->level = $level;
    }

    public function getProgramDetails(){
        echo " \n Program id : ".$this-> programId;
        echo " \n Level : ".$this-> level;
    }


}

?>