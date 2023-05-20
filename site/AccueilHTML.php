<?php
    include('elements/header.php');
?>
    <Main>
        <section>
            <div class="choice">
                <h1 class="login_choice" onclick="Slide_login()">Login</h1>
                <h1 class="Create_choice" onclick="Slide_create()">Create Account</h1>
            </div>
            <div class="container">
                <div class="Login">
                    <form action="login.php" method="post">
                        <h4>
                            <?php 
                                if(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                    $_SESSION['error'] = null;
                                }
                            ?>
                        </h4>
                        <input type="email" placeholder="Email" name="EMAIL"><br>
                        <input type="password" placeholder="Password" name="PASSWORD"><br>
                        <input id="button" type="submit" value="Login">
                    </form>
                </div>
                <div class="Creat_acount">
                    <form action="create_account.php" method="post">
                        <h4 class="error_message">

                            <?php
                            if(isset($_SESSION['error'])){
                                echo $_SESSION['error'];
                                $_SESSION['error']=null;
                            } 
                            ?>

                        </h4>
                        <input type="text" placeholder="username" name="USERNAME">
                        <input type="email" placeholder="Email" name="EMAIL"><br>
                        <input type="password" placeholder="Password" name="PASSWORD"><br>
                        <input id="button" type="submit">
                    </form>
                </div>
            </div>
        </section>
    </Main>
    <?php
    session_destroy();
    ?>


    <script src="Accueil.js"></script>
</body>
</html>