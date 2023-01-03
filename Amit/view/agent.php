<!DOCTYPE html>  
 <html>  
    
      <body>  
          <h1>LIST OF AGENTS</h1>
      <head>
<style>
     
table {
  border-collapse: collapse;
  width: 200%;
}

th, td {
  padding: 20px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
</head> 
      <div class="container" style="width:500px;">              
                <div class="table-responsive">         
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Agent Name</th> 
                               <th>Agent Image</th> 

                            
                          </tr>  
                          <?php   
                          include '../controller/agentcontroller.php';

                          $data = loadData();
                          foreach($data as $row)  
                          {                         
                              ?>
                               <tr>
                             <td><?php echo $row['agent name'] ?></td>
                             <td><?php echo $row['agent image'] ?></td>
                            
                          </tr> 
                               <?php 
                          }  
                          ?>  
                     </table> 
                     <br>
                     <a href="../view/addagent.php" > <button> ADD NEW </button> </a> <br> <br>

                     </div>
                 </div>
      </body>  
 </html>  