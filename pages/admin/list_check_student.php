<head>
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
        .modals_content{
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: center;
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
            <div class="row">
                <div class="col-sm-12">
                    <div class="row" style="display: flex; align-items: center;">
                        <div class="col-sm-6">
                            <div style="display: flex;justify-content: flex-start">
                                <h1>Student Check List</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="display: flex;justify-content: flex-end">
                                <button class="btn btn-primary" type="" style="margin:4px; padding: 4px;" data-toggle="modal" data-target="#myModal">Delete</button>
                            </div>
                        </div>
                    </div>      
                </div>

                <div class="col-sm-12">
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
                            <?php for($i=0; $i<count($func_check_list_student); $i++){?>
                                <tr>
                                    <td><?php echo $func_check_list_student[$i]['student_id']; ?></td>
                                    <td><?php echo $func_check_list_student[$i]['student_nickname_eng']."   ".$func_check_list_student[$i]['student_name_eng']; ?></td>
                                    <td><?php echo $func_check_list_student[$i]['date_today']; ?></td>
                                    <td><?php echo $func_check_list_student[$i]['checkin_time']; ?></td>
                                    <td><?php echo $func_check_list_student[$i]['status']; ?></td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function(){
                            $("#myTable").DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" >
                <div class="icon_func_modal" style="margin-right: 2%;">
                    <a id="close"class="icon_inmodals" style="background-color: red;"  data-dismiss="modal"><i class="fa fa-close"></i></a>
                </div>
                <form action="index.php?app=admin&action=deletelistStd" method="post">
                    <div class="modal-body" style="">
                        <div class="modals_content">
                            <p><b><i class="fas fa-exclamation-triangle"></i> Are you sure you want to clear data ?</b></p>
                        </div>
                        <div class="modals_end">
                            <input style="margin: 5px;width: 20%;" class="btn btn-success" type="submit" name="" value="Yes">
                            <button style="margin: 5px;width: 20%;" class="btn btn-danger" type="button">No</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>