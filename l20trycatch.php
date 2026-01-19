<?php

    // Example 1 
        // function mycolor($color){

        //     if($color !== "red"){
        //                     // new Exception(message);
        //         throw new Exception("I hate $color color");
        //     }

        //     return "Yeach! my fav color is $color";
            
        // }

        // echo mycolor("red");

        // function mynum($base,$power){

        //     if($power > 3){
        //         throw new Exception("We not allow over $power");
        //     }

        //     $result = pow($base,$power);
        //     return $result;
        // }

        // echo mynum(3,3);

    // Example 2 

        // function mycolor($color){

        //     if($color !== "red"){
        //         throw new Exception("I hate $color color");
        //     }

        //     return "Yeach! my fav color is $color"; 
        // }

        // try{
        //   echo mycolor("red");  
        // }catch(Exception $e){
        //     echo "You should not try with this color.";
        // };

        // function mycolor($color){

        //     if($color !== "red"){
        //         throw new Exception("I hate $color color");
        //     }

        //     return "Yeach! my fav color is $color"; 
        // }

        // try{
        //   echo mycolor("black");  
        // }catch(Exception $e){
        //     echo $e->getMessage();
        // };

    // Example 3 

        // function mynum($base,$power){

        //     if($power > 5){
        //         throw new Exception("We not allow over $power");
        //     }

        //     $result = pow($base,$power);
        //     return $result;
        // }

        // try{
        //     echo mynum(2,6);
        // }catch(Exception $e){
        //     echo $e->getMessage();
        // };

        // try{
        //     echo mynum(2,4);
        // }catch(Exception $e){
        //     echo $e->getMessage();
        // };

    // Example 4 

        function mynum($base,$power){

            if($power > 3){
                throw new Exception("We not allow over $power");
            }

            $result = pow($base,$power);
            return $result;
        }

        try{
            echo mynum(2,4);
        }catch(Exception $e){
        echo "You should not over , ".$e->getMessage();  
        }finally{
            echo "<br/>";
            return "Hay there! I am joker";
        };

        try{
            echo mynum(2,2);
        }catch(Exception $e){
        echo "You should not over , ".$e->getMessage();  
        }finally{
            echo "<br/>";
            return "Hay there! I am joker";
        };




    // => try.. catch Statement 
    // try{
    //     code to be executed;
    // }catch(Exception $e){   
    //     code to be exception is catched;
    // }

    // try... catch Statement 
    // try{
    //     code to be executed;
    // }catch(Exception $e){
    //     code to be executed;
    // }finally{
    //     // code that always runs regardless of weather an exception was catch or not exception
    // }


?>