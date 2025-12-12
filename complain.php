<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Khiếu nại</li>
        </ol>
    </div><!--/.row-->

    

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Gửi Khiếu nại</div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span>   Lỗi khi khiếu nại !
                            </div>";
                    }
                    if (isset($_GET['success'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span>   Khiếu nại được thêm thành công !
                            </div>";
                    }
                    ?>
                    <form role="form"  data-toggle="validator" method="post" action="ajax.php">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Tên người khiếu nại</label>
                                <input type="text" class="form-control" placeholder="Tên người khiếu nại" name="complainant_name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Loại khiếu nại</label>
                                <input type="text" class="form-control" placeholder="Loại khiếu nại" name="complaint_type" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Vui lòng mô tả chi tiết khiếu nại của bạn</label>
                                <textarea class="form-control" name="complaint" placeholder="Khiếu nại" required></textarea>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-lg btn-success" name="createComplaint" style="border-radius:0%">Gửi</button>
                        <button type="reset" class="btn btn-lg btn-danger" style="border-radius:0%">Đặt lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Quản lý khiếu nại</div>
                <div class="panel-body">
                    <?php
                    if (isset($_GET['resolveError'])) {
                        echo "<div class='alert alert-danger'>
                                <span class='glyphicon glyphicon-info-sign'></span>   Lỗi khi giải quyết !
                            </div>";
                    }
                    if (isset($_GET['resolveSuccess'])) {
                        echo "<div class='alert alert-success'>
                                <span class='glyphicon glyphicon-info-sign'></span>   Khiếu nại được giải quyết thành công !
                            </div>";
                    }
                    ?>
                    <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%" id="rooms">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên người khiếu nại</th>
                            <th>Loại khiếu nại</th>
                            <th>Khiếu nại</th>
                            <th>Ngày tạo</th>
                            <th>Giải quyết</th>
                            <th>Ngân sách</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $complaint_query = "SELECT * FROM complaint";
                        $complaint_result = mysqli_query($connection, $complaint_query);
                        if (mysqli_num_rows($complaint_result) > 0) {
                            $num = 0;
                            while ($complaint = mysqli_fetch_assoc($complaint_result)) {
                                $num++
                                ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $complaint['complainant_name'] ?></td>
                                    <td><?php echo $complaint['complaint_type'] ?></td>
                                    <td><?php echo $complaint['complaint'] ?></td>
                                    <td><?php echo date('M j, Y',strtotime($complaint['created_at'])) ?></td>
                                    <td>
                                        <?php if(!$complaint['resolve_status']){
                                            echo '<button class="btn btn-info" data-toggle="modal" style="border-radius:0%" data-target="#complaintModal" data-id="' . $complaint['id'] . '" id="complaint">Giải quyết</a>';
                                        } else{
                                            echo date('M j, Y',strtotime($complaint['resolve_date']));
                                        }
                                        ?>
                                    </td>
                                    <th><?php echo $complaint['budget'] ?></th>


                                </tr>
                            <?php }
                        } else {
                            echo "Không có khiếu nại";
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Add Room Modal -->
    <div id="complaintModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Giải quyết khiếu nại</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form data-toggle="validator" role="form" method="post" action="ajax.php">
                                <div class="form-group">
                                    <label>Ngân sách</label>
                                    <input class="form-control" placeholder="Ngân sách" name="budget" data-error="Nhập ngân sách" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <input type="hidden" id="complaint_id" name="complaint_id" value="">
                                <button class="btn btn-success pull-right" name="resolve_complaint">Giải quyết khiếu nại</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>    <!--/.main-->