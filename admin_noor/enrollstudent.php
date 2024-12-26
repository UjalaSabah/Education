<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            
            <ul class="nav navbar-top-links navbar-right">
                <!-- Dropdowns for messages, tasks, alerts (content omitted for brevity) -->
            </ul>

            <?php include ('includes/leftpanel.php');?>
        </nav>

        <!-- Main Content Area -->
        <div id="page-wrapper" class="p-4">
    <h1 class="text-4xl font-semibold mb-4 text-center">Enrolled Students</h1>
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'registration');
    $query = "SELECT student_enroll.s_id, user_table.Firstname, user_table.Lastname, courses.c_name, user_table.Email, student_enroll.active 
              FROM `student_enroll` 
              INNER JOIN `courses` ON courses.c_id = student_enroll.c_id 
              INNER JOIN `user_table` ON student_enroll.id = user_table.id";
    $execute = mysqli_query($connection, $query);
    ?>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-800 text-white text-left text-md leading-normal">
                    <th class="py-3 px-6 font-semibold uppercase">ID</th>
                    <th class="py-3 px-6 font-semibold uppercase">First Name</th>
                    <th class="py-3 px-6 font-semibold uppercase">Last Name</th>
                    <th class="py-3 px-6 font-semibold uppercase">Email</th>
                    <th class="py-3 px-6 font-semibold uppercase">Course</th>
                    <th class="py-3 px-6 font-semibold uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-md font-light">
                <?php while ($record = mysqli_fetch_assoc($execute)) { ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6"><?php echo $record['s_id']; ?></td>
                        <td class="py-3 px-6"><?php echo $record['Firstname']; ?></td>
                        <td class="py-3 px-6"><?php echo $record['Lastname']; ?></td>
                        <td class="py-3 px-6"><?php echo $record['Email']; ?></td>
                        <td class="py-3 px-6"><?php echo $record['c_name']; ?></td>
                        <td class="py-3 px-6">
                            <?php
                            if ($record['active'] == 1) {
                                echo '<p><a href="./process/status.php?id=' . $record['s_id'] . '&active=0" class="btn btn-success" role="button">Unblock</a></p>';
                            } else {
                                echo '<p><a href="./process/status.php?id=' . $record['s_id'] . '&active=1" class="btn btn-danger" role="button">Block</a></p>';
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</div>
</body>
</html>
