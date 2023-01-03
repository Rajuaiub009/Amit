<?php  
include '../model/agentmodel.php';

function loadData(){
return readData();

}
function addData($data){
	$final_data = storeData($data);
    if(file_put_contents('../agent.json', $final_data))  
        {  
            header("location:../view/agent.php");
        }  

}