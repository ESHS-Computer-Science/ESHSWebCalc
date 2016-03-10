<?php include('includes/header.php'); ?>
<?php include('init/connect.php'); ?>
<body>
    <div class="header-section2 action-shot2" title="Come on login, you know you want to.">
        <div class="body2">
            <div class="section">
                <form action="action_page.php" method="post" autocomplete="off" >
                    <h1>Login</h1>
                    <br />
                    
                    <input class="center" type="text" name="firstname" placeholder="Email or Username">
                    <br /><br />
                    
                    <input class="center" type="text" name="lastname" placeholder="Password" >
                    <br /><br />
                    <input class="btn btn-primary" type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>

