<?php
    trait Hello{
        public function demo(){
            echo "Thiis is a hello trait ";
        }
    }
    trait Second{
        public function demo(){
            echo " Thiis is a hello trait";
        }
    }
    class Ferzy{
        use Hello,Second{
            Hello::demo insteadOf Second;
            Second::demo as demo1;

        }
        // use Hello{
        //     demo as demo1;
        // }
        // public function demo(){
        //     echo "This is a ferzy class";
        // }

    }
    $obj = new Ferzy;
    $obj-> demo();
    $obj-> demo1();

                                      
?>