<?php
// Include config file
require_once "../modules/Users/current.php";
require_once "../modules/Appointments/user.php";
require_once "../modules/Data/config.php";
?>


<!-- Main -->
<section id="main">
    <h2 class="hidden">Main section of premium page</h2>
    <div class="container">

        <div class="row">
            <div class="col-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user_info['name'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user_info['email'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <a class="button icon solid fa-pen" href="users_update?id=<?php echo $user_info['id']?>">Update Info</a>
                                <a class="button icon solid fa-key" href="reset_password"><span>Reset Password</span></a>
                                <a class="button icon solid fa-door-open" href="logout"><span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                        <div class="" style="text-align: center">
                            <img src="images/profile.png"  alt="Admin" class="rounded-circle" width="150">
                            <div>
                                <h4><?php echo $user_info['username'] ?></h4>
                                <span class="text-secondary mb-1"><?php echo $role_name ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <section class="col-12">
                <header>
                    <h3>
                        Appointments Calendar
                    </h3>
                </header>

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
                <a class="button btn btn-default btn-sm move-day" id="create" href="appointments_create">
                    <i class="calendar-icon fa-calendar-plus icon solid" data-action="create"></i>
                </a>
            </section>

            <!-- Calendar -->
            <script type="text/javascript" src="bower_components/tui-dom/dist/tui-dom.min.js"></script>
            <script type="text/javascript" src="bower_components/tui-time-picker/dist/tui-time-picker.min.js"></script>
            <script type="text/javascript" src="bower_components/tui-date-picker/dist/tui-date-picker.min.js"></script>
            <script type="text/javascript" src="bower_components/tui-calendar/dist/tui-calendar.min.js"></script>
            <script type="text/javascript" src="js/moment.js"></script>
            <script type="text/javascript" src="js/calendar.js"></script>
            <script type="text/javascript">
                cal.createSchedules([
                    <?php
                    require_once "../modules/Appointments/user.php";

                    while ($row = mysqli_fetch_array($my_appointments)) {
                        echo "      {id:" . $row['id'] . ",
                                    calendarId: '1',
                                    title: '" . $row['comment'] . "',
                                    category: 'time',
                                    dueDateClass: '',
                                    allDay: true,
                                    start: '" . $row['date'] . "T13:30:00+09:00',
                                    end: '" . $row['date'] . "T14:30:00+09:00'
                                    },";
                    }
                    ?>
                ]);

                cal.on('beforeDeleteSchedule', function(event) {
                    var date = new Date(event.schedule.start);
                    var now = new Date();
                    var diff =(date.getTime() - now.getTime()) / 1000;
                    diff /= (60 * 60);
                    diff =  Math.abs(Math.round(diff));

                    console.log(event);

                    if(diff > 72)
                        window.location.href = 'appointments_delete?id='+event.schedule.id;
                    else
                        alert('Is not possible to modify appointment between the 72 hours previous to it');
                });

                cal.on('beforeUpdateSchedule', function(event) {
                    var date = new Date(event.schedule.start);
                    var now = new Date();
                    var diff =(date.getTime() - now.getTime()) / 1000;
                    diff /= (60 * 60);
                    diff =  Math.abs(Math.round(diff));

                    console.log(event);

                    if(diff > 72)
                        window.location.href = 'appointments_update?id='+event.schedule.id;
                    else
                        alert('Is not possible to modify appointment between the 72 hours previous to it');

                });


            </script>
        </div>
    </div>
</section>
