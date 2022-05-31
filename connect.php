<h1>login,....</h1>
<?php
                                        if (isset($_POST["login"])) {
                                            $username = $_POST['username'];
                                            $password = $_POST['password'];
                                            $password = password_hash($password, PASSWORD_DEFAULT);
                                            $conn = new mysqli("localhost", "root", "", "learn_lang");
                                            $query = "SELECT password_user from users where username like '$username';";
                                            $result = $conn->query($query);
                                            $row = $result->fetch_assoc();
                                            echo $row["password_user"];
                                            
                                        }
                                        ?>