<?php 

    // exe 1
        function setpassword($plaintext){
            $passcode = $plaintext;
            echo $passcode;
        }

        setpassword("password123");// password123

    // exe 2
        function setpassworddef($plaintext){
            $passcode = password_hash($plaintext,PASSWORD_DEFAULT);// dyn code
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode} ";
            echo strlen($passcode);// 60
        }
        
        setpassworddef("password123");// password123Before Encrypt = password123 , After Encrypt = $2y$10$7mfy1h7j2nT6Hay.CiR1JeF2XMMHLl1JuH./XZ7EiWEP126rHAO36 60

    // exe 3
        function setpasswordbcr($plaintext){
            $passcode = password_hash($plaintext,PASSWORD_BCRYPT);// dyn code 
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode} ";// 
            echo strlen($passcode);// 60
        }
        
        setpasswordbcr("password123");// Before Encrypt = password123 , After Encrypt = $2y$10$DX/VegBLiU8r33ZYFy4ML.mt6X54tt.bAF4ijy/xYfx91QyM9/0XO 60

    // exe 4
        function passworddecry(){
        
            $plaintextone = "password123";
            $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
            
            $plaintexttwo = "password123";
            $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
            
            // echo "Encrypt Code One = {$enccodeone} ";
            // echo "Encrypt Code Two = {$enccodetwo} ";
            
            // $verify = password_verify($plaintexttwo,$enccodeone);// oki 
            // $verify = password_verify($plaintextone,$enccodetwo);// oki 
            // $verify = password_verify($plaintextone,$plaintexttwo);// Failed 
            $verify = password_verify($enccodeone,$enccodetwo);// Failed
            
            if($verify){
                echo "oki";
            }else{
                echo "Failed";
            }
        
        }
    
        passworddecry();// Failed 

    // exe 5 

        function passwordmd5($plaintext){
      
            // Message-Digest = md5(string,binary) 
            // Note: binary = TRUE/true / FALSE/false;
            // TRUE/true = RAW 16 characters binary format 
            // FALSE/false = DEFAULT 32 characters hax number 
            
            $passcode1 = md5($plaintext);// static
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode1}";//  
            echo strlen($passcode1);// 32
            
            $passcode2 = md5($plaintext,FALSE);// static
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode2}";// 482c811da5d5b4bc6d497ffa98491e38
            echo strlen($passcode2);// 32
            
            $passcode3 = md5($plaintext,TRUE);// static
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode3}";// H,��մ�mI��I816
            echo strlen($passcode3);// 32
      
        }
        
        passwordmd5("password123");// Before Encrypt = password123 , After Encrypt = 482c811da5d5b4bc6d497ffa98491e38

    // exe 6 

        function passwordmd5verify($plaintext){
        
            $getpasswod = "482c811da5d5b4bc6d497ffa98491e38";
            
            if($getpasswod == md5($plaintext)){
                echo "Password match win 32 chars hax number";
            }elseif($getpasswod == md5($plaintext,TRUE)){
                echo "Password match win 16 chars binary format";// can't match cuz it's a binary
            }else{
            echo "Password do not match";
            }
        
        }
    
        passwordmd5verify("password123");

    // exe 7 

        function passwordsha1($plaintext){
      
            // Secur Hash Algorithms = sh1(string,binary) 
            // Note: binary = TRUE/true / FALSE/false;
            // TRUE/true = RAW 20 characters binary format 
            // FALSE/false = DEFAULT 40 characters hax number 
            
            $passcode1 = sha1($plaintext);// static
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode1}";// Before Encrypt = password123 , After Encrypt = cbfdac6008f9cab4083784cbd1874f76618d2a97 
            echo strlen($passcode1);// 40
            
            $passcode2 = sha1($plaintext,FALSE);// static
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode2}";// Before Encrypt = password123 , After Encrypt = cbfdac6008f9cab4083784cbd1874f76618d2a97 
            echo strlen($passcode2);// 40
            
            $passcode3 = sha1($plaintext,TRUE);// static
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode3}";// Before Encrypt = password123 , After Encrypt = ���`�ʴ7��чOva�*�20
            echo strlen($passcode3);// 20
      
        }
        
        passwordsha1("password123");// Before Encrypt = password123 , After Encrypt = cbfdac6008f9cab4083784cbd1874f76618d2a97

    // exe 8 

        function passwordsha1verify($plaintext){
        
            $getpasswod = "cbfdac6008f9cab4083784cbd1874f76618d2a97";
            
            if($getpasswod == sha1($plaintext)){
                echo "Password match win 40 chars hax number";
            }elseif($getpasswod == sha1($plaintext,TRUE)){
                echo "Password match win 20 chars binary format";// can't match cuz it's a binary
            }else{
                echo "Password do not match";
            }
        
        }
    
        passwordsha1verify("password123");

    // exe 9 

        function passwordcrypt($plaintext){
      
            // => crypt(string,key) 
            $cryptkey = "456789ABCDEFG";
            $passcode = crypt($plaintext,$cryptkey);// static 
            echo "Before Encrypt = {$plaintext} , After Encrypt = {$passcode}";
            echo strlen($passcode);// 13
      
        }
    
        passwordcrypt("password123");// Before Encrypt = password123 , After Encrypt = 45X0h1uT9HvTw

    // exe 10 

        function passwordcryptverify($plaintext){
        
            $getpasswod = "45X0h1uT9HvTw";
            $cryptkey = "456789ABCDEFG";
            
            if($getpasswod == crypt($plaintext,$cryptkey)){
                echo "Password match";
            }else{
                echo "Password do not match";
            }
        
        }
    
        passwordcryptverify("password123");

    // exe 11 

        function strongpassword($plaintext){
      
            // Method 1 
                $newpassword = md5($plaintext);
                $newpassword = sha1($newpassword);
                $newpassword = crypt($newpassword,$newpassword); // static 

                crypt(sha1(md5($plaintext)),sha1(md5($plaintext)));

            // Method 2 
                // $cryptkey = "456789ABCDEFG";
                // $newpassword = crypt(sha1(md5($plaintext)),$cryptkey);// static // Before Encrypt = password123 , After Encrypt = 45QUhSRh116Mw13
                
                echo "Before Encrypt = {$plaintext} , After Encrypt = {$newpassword}";// // Before Encrypt = password123 , After Encrypt = 926wQBSqLwkTE
                echo strlen($newpassword);// 13
        
        }
    
        strongpassword("password123");

    // exe 12 

        function strongpasswordverify($plaintext){
      
            // Method 1 
                $getpasswod = "45QUhSRh116Mw";
                $cryptkey = "456789ABCDEFG";
                
                if($getpasswod == crypt(sha1(md5($plaintext)),$cryptkey)){
                    echo "Password match";
                }else{
                    echo "Password do not match";
                }
            
            // Method 2 
                // $getpasswod = "926wQBSqLwkTE";

                // if($getpasswod == crypt(sha1(md5($plaintext)),sha1(md5($plaintext)))){
                //     echo "Password match";
                // }else{
                //     echo "Password do not match";
                // }
        
        }
    
        strongpasswordverify("password123");





        




?>