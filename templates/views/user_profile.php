
<!-- Main -->
<section id="main">
    <h2 class="hidden">Main section of premium page</h2>
    <div class="container">
        <div class="container--tabs">
            <section class="row">
                <ul class="nav nav-tabs">
                    <li class="tabs active"><a class="icon solid fa-user-edit" href="#tab-1">User Info</a></li>
                    <li class="tabs"><a class="icon solid fa-user-clock" href="#tab-2">Appointments</a></li>
                    <li><a class="icon solid fa-key" href="reset_password"><span>Reset Password</span></a></li>
                    <li><a class="icon solid fa-door-open" href="logout"><span>Logout</span></a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <h4>
                            <?php echo $_SESSION["username"] ?>
                        </h4>

                        <ul>
                        </ul>
                    </div>
                    <div id="tab-2" class="tab-pane">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
