      <?php   
      
         // define variables and set to empty values
         $nameErr = $emailErr = $messageErr = "";
         $name = $email = $number = $subject = $message = "";
      
         if ($_SERVER["REQUEST_METHOD"] == "POST") {  

            if (empty($_POST["name"]))
               {$nameErr = "Name is required";
            } else {
               $name = test_input($_POST["name"]);
               // check if name only contains letters and whitespace
               if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                  $nameErr = "Only letters and space allowed"; 
               }     
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            } else {
               $email = test_input($_POST["email"]);
               // check if e-mail address syntax is valid
               if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["number"])) {
               $number = "";     
            } else {
               $number = test_input($_POST["number"]);
                        
               $number=str_replace(' ', '', $number);
               $number=str_replace('-', '', $number);
               
               if (!ctype_digit($number)) {        
                  $numberErr = "Only numbers and spaces allowed"; 
               }
            }
      
      
            if (empty($_POST["subject"]))
               {$subjectErr = "Subject is required";
            } else {
               $subject = test_input($_POST["subject"]);
               // check if name only contains letters and whitespace
               if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
                  $subjectErr = "Only letters and spaces allowed"; 
               }     
            }     
            
            if (empty($_POST["message"])) {
               $messageErr = "Message is required";
            } else {
               $message = test_input($_POST["message"]);
            }    


            if ($nameErr == "" && $emailErr == "" && $messageErr == "" && $subjectErr == "" && $numberErr == "" ) {
       
               if (isset($_POST['email'])) {
                  $name = $_POST['name'] ;
                  $number = $_POST['number'] ;
                  $email = $_POST['email'] ;
                  $subject = $_POST['subject'] ;
                  $message = $_POST['message'] ."\r\n\r\n From: ". $name . "\r\n\r\n Contact number: " . $number;
                  $headers = 'From: '.$name." <".$email.">"."\r\n" . 'Reply-To: '.$email;
                  
                  if (mail("info@miteshsevani.com", $subject,$message,$headers)) {
                     
                     $sendmessage = "Hello " . $name . ",\r\n\rThank you for your message. I will be in touch shortly. \r\n\r\nMitesh Sevani";
                     $sendheaders = "From: Mitesh Sevani <info@miteshsevani.com>";
                     mail($email, "Auto reply from Mitesh Sevani",$sendmessage,$sendheaders);
                  }
               }
        
               $feedback="<div class='alert alert-success'>Thank you for contacting me. I will be in touch shortly.</div>";
               $name = $email = $number = $subject = $message = "";
            } else {
                $feedback="<div class='alert alert-danger'>Please correct the below errors and try again.</div>";
            }
         
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }  
      ?>