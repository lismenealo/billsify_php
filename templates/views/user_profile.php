<?php
// Include config file
require_once "../modules/Users/current.php";
require_once "../modules/Appointments/user.php";
?>


<!-- Main -->
<section id="main">
    <h2 class="hidden">Main section of premium page</h2>
    <div class="container">

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="images/profile.png"  alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?php echo $user_info['username'] ?></h4>
                                <p class="text-secondary mb-1"><?php echo $user_info['rol_id'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user_info['name'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user_info['email'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="button icon solid fa-pen" href="users_update?id=<?php echo $user_info['id']?>">Update Info</a>
                                <a class="button icon solid fa-key" href="reset_password"><span>Reset Password</span></a>
                                <a class="button icon solid fa-door-open" href="logout"><span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gutters-sm">
            <div id="menu">
                <span id="menu-navi">
                    <button type="button" class="btn btn-default btn-sm move-today" id="move-today">Today</button>
                    <button type="button" class="btn btn-default btn-sm move-day" id="move-prev">
                      <i class="calendar-icon fa-arrow-left icon solid" data-action="move-prev"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm move-day" id="move-next">
                      <i class="calendar-icon fa-arrow-right icon solid" data-action="move-next"></i>
                    </button>
                </span>
                <span id="renderRange" class="render-range"></span>
            </div>

            <div id="calendar" style="width: 100%"></div>

            <!-- Calendar -->
            <script type="text/javascript" src="bower_components/tui-dom/dist/tui-dom.min.js"></script>
            <script type="text/javascript" src="bower_components/tui-time-picker/dist/tui-time-picker.min.js"></script>
            <script type="text/javascript" src="bower_components/tui-date-picker/dist/tui-date-picker.min.js"></script>
            <script type="text/javascript" src="bower_components/tui-calendar/dist/tui-calendar.min.js"></script>
            <script type="text/javascript" src="js/moment.js"></script>
            <script type="text/javascript" src="js/calendar.js"></script>
            <script type="text/javascript">
            cal.createSchedules([
            {
            id: '1',
            calendarId: '1',
            title: 'my schedule',
            category: 'time',
            dueDateClass: '',
            start: '2021-11-18T22:30:00+09:00',
            end: '2021-11-19T02:30:00+09:00'
            },
            ]);
            </script>
        </div>
    </div>
</section>
