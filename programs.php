<?php


class Programs {
    // class proprities 
     private $id;
     public $name;
     public $description;
     public static $programCount = 0;
    // class methods - functions 

        //constuctor 

        public function setProgramDetails($id,$name,$description){
            self:: $programCount++;
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
        }

        // get program details
        public function getProgram() {
            echo "Program Details \n";
            echo "\n id : ".$this->id ;
            echo "\n name : ". $this->name;
            echo "\n description : ".$this->description;           

         }

         //update program name
         public function updateName($name){
            $this->name = $name;
         }


         // update program description
         public function updateDescription($description){
            $this->description = $description;
         }

}

?>