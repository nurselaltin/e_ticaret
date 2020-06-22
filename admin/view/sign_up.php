
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
                <label for="username">Fullname</label>
                <input type="text"  name="fullanem" required>
            </li>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="user_name" required>
            </li>
            <li>
                <label for="username">Phone</label>
                <input type="phone"  name="phone" required>
            </li>
            <li>
                <label for="username">Email</label>
                <input type="email"  name="email" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password"  name="pass" id="password" required>
            </li>
            <li>
                <label for="password">RePassword</label>
                <input type="password"  name="re_pass" required>
            </li>
            <li>
                <button  name="submit" value="1" type="submit">Sign Up</button>
            </li>
        </ul>
    </form>



</div>
<?php require  admin_view('static/footer')?>


