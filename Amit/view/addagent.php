<?php
        include '../controller/header.php';
        include '../controller/addagent.php';
        include '../controller/upload.php';
        ?>

<!DOCTYPE HTML>  
<html>
<body>
     <style>
          h2{
               text-align:center;
          }
          body{
      
          text-align: center;
          color:black;
         }
         
     </style>
<br> <br> 
<h2> ADD AGENT </h2>
<br>
<form method = "POST">
<?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 
                     
Agent Name <br>
<input type="text" name="name" value="<?php echo $agentname;?>">
<span><?php echo $agentnameErr;?></span>
<br> <br>
Select image to upload <br>

  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit"> <br> <br>

<input type="submit" name="submit" value="ADD"> <br><br>
<a href="../view/agent.php" > Show Agents  </a> 
<br>

<?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>

  </body>
  </html>