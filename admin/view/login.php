
<?php require  admin_view('static/header')?>
<div class="login-screen">

    <!--login logo-->
    <div class="login-logo">
        <a href="#">
            <img src="<?= admin_public_url('images/logo.png')?>" alt="">
        </a>
    </div>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="user_name" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="pass"  name="password" id="password" required>
            </li>
            <li>
                <button  name="submit" value="1" type="submit">Login</button>
            </li>
        </ul>
    </form>



</div>
<?php require  admin_view('static/footer')?>


