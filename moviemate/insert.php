    <?php
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into insert(fullname, email, password, confirm_password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$fullname,$email,$password,$confirm_password);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
    ?>