<?php
    class Human {
        // protected variable
        protected $genders = array("Male", "Female", "Other");
        
        // protected function for humans features
        protected function getFeatures($gender) {
            if($gender == "Male") {
                echo "Men will be Men";
            }
            else if($gender == "Female") {
                echo "Women's mind is a maze.";
            }
            else if($gender == "Other") {
                echo "All are born equal.";
            }
        }
        
    }
    
    // subclass of the above class
    class Male extends Human {
        protected $gender = "Male";
        
        // public function to print Male features
        public function getMaleFeatures() {
            // calling the protected getFeatures() method of class Human
            $this->getFeatures($this->gender);
        }
    }
    
    // object of Human class
    $human = new Human();
    // object of Male class
    $male = new Male();
    
    /*  
        accessing protected variables and methods
    */
    echo $human->genders;   // INVALID
    $human->getFeatures("Male");    // INVALID
    echo $male->gender;     // INVALID
    
    /*
        but we can call getMaleFeatures method,
        in which we are calling a protected method 
        of Human class
    */
    $male->getMaleFeatures();

?>