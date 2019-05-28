
                        <?php
if(isset($_POST['SubmitLogin'])){
                   session_start();
                        include ('config.php');
                            if(isset($_POST['login_email']) && $_POST['login_email']==""){
                            echo '<div class="alert-danger">
                            <p>The Email field is required.</p></div>';
                            }elseif(isset($_POST['login_pass']) && $_POST['login_pass']==""){
                            echo '<div class="alert-danger">
                            <p>The Password field is required.</p></div>';
                            }else{
                            $sql ="SELECT * FROM user WHERE email ='".$_POST['login_email']."' AND password = '".md5($_POST['login_pass'])."'";
                            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
                            $num = mysqli_num_rows($result);
                            if($num >0){
                            $row = mysqli_fetch_row($result);
                            $_SESSION['UserID']  = $row[0];
                            $_SESSION['fname'] = $row[1];
                           $_SESSION['email']  = $row[3];
                            $_SESSION['password'] = $row[4];
                            header('location:dash.php');
                            }else{
                            echo '<div class="alert-success">
                            <p>Invalid login please try again.</p></div>';
							header('location:register.php');
                            }
                            
                            }
                        
                            
                        }
?>