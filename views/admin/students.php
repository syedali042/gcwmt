<div class="container">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Students</strong>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                        <thead>
                            <tr role="row">
                                <th>Student#</th>
                                <th>Degree</th>
                                <th>Reg. No</th>
                                <th>Name</th>
                                <th>CNIC</th>
                                <th>Contact</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th style="width: 20%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php foreach ($students as $key => $row): ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1">#<?=$row['student_id']?></td>
                                <td><?=$row['degree_id']?></td>
                                <td><?=$row['registration_number']?></td>
                                <td><?=$row['student_name']?></td>
                                <td><?=$row['student_cnic']?></td>
                                <td><?=$row['student_father_number']?></td>
                                <td><?=$row['student_status']?></td>
                                <td><?=$row['student_added']?></td>
                                <td>
                                    <a href="javascript://" data-id="<?=$row['cat_id']?>" class="btn btn-info btn-sm updateThisCategory"><i class="fa fa-upload"></i>View & Update </a>
                                </td>
                                <!-- <td>
                                    <input type="hidden" class="room_id" value="<?=$room['room_id']?>">
                                    <a href="javascript://" class="btn btn-primary btn-sm viewUser"> <i class="fa fa-spinner"></i> Turn To Vacant</a>
                                    &nbsp;&nbsp; <a href="javascript://" class="btn btn-warning btn-sm"> <i class="fa fa-upload"></i> Update</a>
                                     &nbsp;&nbsp; <a href="javascript://" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a>
                                </td> -->
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>