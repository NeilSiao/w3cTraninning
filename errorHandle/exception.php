<?php
    function checkNum($number){
        if($number>1){
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }
    try{
    checkNum(2);
        echo 'If you see this, the number is 1 or below';
    }catch(Exception $e){
    echo "Message: " . $e->getMessage();
    }   

    class customException extends Exception {
        public function errorMessage(){
            //error message
            $errorMsg = "Error on line " . $this->getLine() . "in". $this->getFile()
            . ": <b>".$this->getMessage() . "</b> is not a valid E-mail address";
        return $errorMsg;
        }
    }
    
    $email = "someone@gmail...com";  
    try{
        if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
            //throw exception if email is not valid.
            throw new customException($email);
        }
    } catch(customException $e){
        echo $e->errorMessage();
    }
    
    
?>