<?php 
if(isset($_SESSION['Email'])){
    $Email = $_SESSION['Email'];
    
    $sql = "SELECT *FROM account_tbl WHERE Email = '$Email'";
    $result = mysqli_query($connections, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $accountID = $row['accountID'];
            $Photo = '../uploads/' .$row['Photo'];
            $Name = $row['Name'];
            $Role = $row['Account_Type'];

            if($Role == 1){
                $Access = "Teacher";
            }
            else{
                $Access = "Student";
            }
        }
    }
}
else{
    echo "You are not in Session";
}

