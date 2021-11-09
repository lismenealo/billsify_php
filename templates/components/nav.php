<!-- Header -->
<section id="header">
    <div class="container">

        <!-- Logo -->
        <h1 id="logo"><a href="home"><i>₿</i>illsify</a></h1>
        <p>The application that simplifies the home economy</p>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li <?php if($_SERVER['REQUEST_URI'] === '/billsify/public/' or $_SERVER['REQUEST_URI'] === '/billsify/public/home') { echo 'class="active"'; } ?> ><a class="icon solid fa-home" href="home"><span>Home</span></a></li>
                <li <?php if($_SERVER['REQUEST_URI'] === '/billsify/public/application_details') { echo 'class="active"'; } ?> ><a class="icon solid fa-cogs" href="application_details"><span>Application Details</span></a></li>
                <li <?php if($_SERVER['REQUEST_URI'] === '/billsify/public/go_premium') { echo 'class="active"'; } ?>><a class="icon solid fa-dollar-sign" href="go_premium"><span>Go premium </span></a></li>
                <li <?php if($_SERVER['REQUEST_URI'] === '/billsify/public/contact') { echo 'class="active"'; } ?>><a class="icon solid fa-mail-bulk" href="contact"><span>Contact Us</span></a></li>
            </ul>
        </nav>

    </div>
</section>