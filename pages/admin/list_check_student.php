<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 18px !important;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {background-color:#f5f5f5;}
        .modals_end{
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: flex-end;
            margin: 10px 0 10px 0;
        }
        .modal-window_teachlist{
            padding: 2%;
        }
        .icon_inmodals {
            border: none;
            border-radius: 50%;
            color: white;
            padding: 0px 7px;
            font-size: 10px;
            cursor: pointer;
            margin-left: 5px;
            margin-top: 10px;
        }
        .icon_inmodals:hover {
            background-color: RoyalBlue;
        }
        .icon_func_modal{
            display: flex;
            justify-content: flex-start;
            flex-direction: row-reverse;
        }



    </style>
</head>
<body>
    <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
        <div class="container">
            <table id="myTable" class="display" style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $i<count($func_check_list_teacher); $i++){?>
                        <tr>
                            <td><?php echo $func_check_list_teacher[$i]['id_teacher']; ?></td>
                            <td><?php echo $func_check_list_teacher[$i]['teacher_fname']."   ".$func_check_list_teacher[$i]['teacher_lname']; ?></td>
                            <td><?php echo $func_check_list_teacher[$i]['date_today']; ?></td>
                            <td><?php echo $func_check_list_teacher[$i]['checkin_time']; ?></td>
                            <td><?php echo $func_check_list_teacher[$i]['status']; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function () {
                $("#myTable").DataTable();
            });
        </script>
    </div>
</body>

