<?php
   $agentname = "";
   $agentnameErr = "";
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
  
    if (empty($_POST["name"])) 
    {
        $agentnameErr = "Agent name is required";    
    }

    else
    {
     $agentname = $_POST["name"];    
    }
}
if(isset($_POST["submit"]))
    if(isset($_POST["name"]))
          
           {

               if(file_exists('../agent.json'))
               {
               $current_data = file_get_contents('../agent.json');  
               $array_data = json_decode($current_data, true);  
               $extra = array(  
                    'agent name'               =>     $_POST['name'],
                    'agent image'               =>     $_POST['fileToUpload']
                    
                    
               );  
               $array_data[] = $extra;  
               $final_data = json_encode($array_data);  
               if(file_put_contents('../agent.json', $final_data))  
               {  
                    $message = "<label class='text-success'>**Successfully Added**</p>";  
               }  
          }  
          else  
          {  
               $error = 'JSON File not exits';  
          } 
        } 
            
?>