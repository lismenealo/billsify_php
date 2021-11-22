<?php
require_once "../modules/Features/list.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <header>
            <h2>App Features</h2>
        </header>

        <div class="row aln-center">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 clearfix">
                                <a href="http://localhost/billsify/public/app_features/create" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Feature</a>
                            </div>
                            <?php
                            if($count > 0){
                                echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Title</th>";
                                echo "<th>Description</th>";
                                echo "<th>Tech Stack</th>";
                                echo "<th>Image</th>";
                                echo "<th>Time</th>";
                                echo "<th>Action</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['title'] . "</td>";
                                    echo "<td>" . $row['description'] . "</td>";
                                    echo "<td>" . $row['tech_stack'] . "</td>";
                                    echo "<td>" . $row['image'] . "</td>";
                                    echo "<td>" . $row['time'] . "</td>";
                                    echo "<td>";
                                    echo '<a href="http://localhost/billsify/public/app_features/update?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pen"></span></a>';
                                    echo '<a href="http://localhost/billsify/public/app_features/delete?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                            } else{
                                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>