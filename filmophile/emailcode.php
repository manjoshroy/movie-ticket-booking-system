<?php
if($_POST['submit'] && isset($_FILES['profileimage']))
{
 
    $from_email         =  $_POST['email']; //from mail, sender email address
    $recipient_email    = 'developerniks20@gmail.com'; //recipient email address
     
    //Load POST data from HTML form


    $subject = "Maven Influencer Form Query | Brandlogg";
    $sender_name = $_POST['name'];
    $whatsappnumber = $_POST['whatsappnumber'];
    $reply_to_email = $_POST['email'] ;
    $country= $_POST['country'] ;
    $city= $_POST['city'];
    $subject        = "Brandlogg Mail"; //subject for the email
    $message = "Name: $sender_name  \n\nWhatsapp Number: $whatsappnumber  \n\nEmail: $reply_to_email  \n\nCountry: $country   \n\nCity: $city"; //body of the email
     
 
    /*Always remember to validate the form fields like this
    if(strlen($sender_name)<1)
    {
        die('Name is too short or empty!');
    }
    */
     
    //Get uploaded file data using $_FILES array
    $tmp_name    = $_FILES['profileimage']['tmp_name']; // get the temporary file name of the file on the server
    $name        = $_FILES['profileimage']['name'];  // get the name of the file
    $size        = $_FILES['profileimage']['size'];  // get size of the file for size validation
    $type        = $_FILES['profileimage']['type'];  // get type of the file
    $error       = $_FILES['profileimage']['error']; // get the error (if any)
 
    //validate form field for attaching the file
    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }
 
    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                  // close upon completion
 
    $encoded_content = chunk_split(base64_encode($content));
 
    $boundary = md5("random"); // define boundary with a md5 hashed value
 
    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:".$from_email."\r\n"; // Sender Email
    $headers .= "Reply-To: ".$recipient_email."\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
         
    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));
         
    //attachment
    $body .= "--$boundary\r\n";
    $body .="Content-Type: image/jpeg; name=".$name."\r\n";
    $body .="Content-Disposition: attachment; filename=".$name."\r\n";
    $body .="Content-Transfer-Encoding: base64\r\n";
    $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email
     
    $sentMailResult = mail($recipient_email, $subject, $body, $headers);
 
    if($sentMailResult )
    {
        $img_size = getimagesize("size");
        //validate form field for attaching the file
        echo $tmp_name."<br>";       echo $size."<br>";
       echo $name."<br>";
       echo $type."<br>";
       echo $error."<br>";
          echo $error."<br>";
       echo "File Sent Successfully.";
       unlink($name); // delete the file after attachment sent.
    }
    else
    {
       die("Sorry but the email could not be sent.
                    Please go back and try again!");
    }
} ?>
