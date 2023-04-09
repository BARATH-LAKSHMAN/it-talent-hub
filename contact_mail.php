<?php


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
  {
   $response = array( 
    'code' => 404, 
    'message' => $_POST
);


if(isset($_POST["email"])){
    
    $to = 'barathlakshman06@gmail.com';
    $subject = 'New Request From IT Talent HUB';
    $from = $_POST["email"];
    
    
    $data = '<div style="background: #efefef;max-width: 500px;">
    <table  width="100%" cellpadding="20" >
      <thead  style="background: #203449">
        <tr><td colspan="2" align="center">
        <img src="https://demos.socialight.co.in/IT-TALENT-HUB/Images/Logo.png" alt="Logo" width="50%">
        
        </td></tr>
      </thead>
      <tr>
      <td colspan="2">You Have a New Request from '.$_POST["name"].'. Here are the Details</td>
    </tr>
    <tr style="    background: #fff;">
        <td>
          Name
        </td>
        <td>'.$_POST["name"].'
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          Email Id
        </td>
        <td>'.$_POST["email"].'
        </td>
      </tr>
      <tr style="    background: #fff;"> 
        <td>
          Phone Number
        </td>
        <td>
         '.
          $_POST['number'].'
        </td>
      </tr>
       
      <tr style="    background: #fff;">
        <td>
         Service
        </td>
        <td>
         '.
          $_POST['service'].'
        </td>
      </tr>
      
    
    </table>
    <footer style="background: #203449;color: #fff;padding: 1px;text-align: center;">
    <p> &copy;Reserverd By IT Talent Hub</p>
  </footer>
  </div>';
  $status=Mailsend($to,$from,$subject,$data);
  if($status){
            // $response['code']=200;
                    //  $response['message']='Form is Submitted';
                    print "<p class='success'>Contact Mail Sent.</p>";
        } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
        
          }
        }
        
        
        //echo json_encode($response);
        
        


  }
  
 function Mailsend($to,$from,$subject,$data){

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: <$from>\r\n";
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= $data;
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    return True;
  }
  
 }

?>