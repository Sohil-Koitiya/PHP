
<?php 
  
// PHP program to implements encapsulation 
class GFG { 
  
    private $userId; 
    private $pwd; 
      
    // Update GFG password 
    public function updatePwd($userId, $pwd) { 
          
        // Write function body 
        echo("Function to update password '"
                . $pwd . "' for user " . $userId); 
          
        echo "<br>"; 
    } 
  
    // Check account balance 
    public function courseName($userId) { 
          
        // Write function body 
        echo("Function to check course name of user "
                . $userId); 
          
        echo "<br>"; 
    } 
} 
  
$obj = new GFG(); 
$obj -> updatePwd('sohil', 'sohil123'); 
$obj -> courseName('php'); 
  
?> 