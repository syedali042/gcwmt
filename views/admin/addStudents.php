<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<div class="container">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Add Students</strong>
        </div>
        <div class="card-body">
            
            <form action="addStudents" method="POST">
                <div class="row">
                    <?php if (isset($_GET['msg'])): ?>
                    <div class="col-md-12">
                    <?php if ($_GET['status']==0){ ?>
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong><?=$_GET['msg']?></strong>
                        </div>
                    <?php }else{ ?>
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong><?=$_GET['msg']?></strong>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endif ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <center>
                            <a class="btn btn-primary" style="min-width: 350px;padding: 10px;" href="javascript://" data-toggle="modal" data-target="#captureImageModal"><i class="fa fa-camera"></i> Capture Image</a>
                            <input type="hidden" name="user_image" id="user_image">
                            <label for="uploadUserImage">
                                <a class="btn btn-success" style="min-width: 350px;padding: 10px;color: white;"><i class="fa fa-camera"></i> Upload Image</a>
                            </label>
                            <input type="file" id="uploadUserImage" style="display: none;">
                            </center>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_name">
                                <h6 style="font-weight:bold">Program</h6>
                            </label>
                            <select class="form-control" name="program_id">
                                <option value="0" selected="">Select Option</option>
                                <?php foreach ($programs as $key => $row): ?> 
                                    <option value="<?=$row['program_id']?>">
                                        <?=$row['program_title']?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_name">
                                <h6 style="font-weight:bold">Department</h6>
                            </label>
                            <select class="form-control" name="department_id">
                                <option value="0" selected="">Select Option</option>
                                <?php foreach ($departments as $key => $row): ?> 
                                    <option value="<?=$row['department_id']?>"><?=$row['department_title']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_name">
                                <h6 style="font-weight:bold">Degree</h6>
                            </label>
                            <select class="form-control" name="degree_id">
                                <option value="0" selected="">Select Option</option>
                                <?php foreach ($degree as $key => $row): ?> 
                                    <option value="<?=$row['degree_id']?>"><?=$row['degree_title']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_name">
                                <h6 style="font-weight:bold">Subject Groups</h6>
                            </label>
                            <select class="form-control" name="subject_group">
                                <option value="0" selected="">Select Option</option>
                                <?php foreach ($subject_groups as $key => $row): ?> 
                                    <option value="<?=$row['group_id']?>"><?=$row['group_name']?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Student Status</h6>
                            </label>
                            <select name="student_status" class="form-control">
                                
                                <option value="applied">Applied</option>
                                <option value="active">Active</option>
                                <option value="stucked_of">Stuck-Of</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h6 style="font-weight:bold">Entry#</h6>
                            </label>
                            <input type="text" name="entry_no" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h6 style="font-weight:bold">Registration No.</h6>
                            </label>
                            <input type="text" name="registration_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h3 style="font-weight: bold;padding:10px;">| Personel Information</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Student Name</h6>
                            </label>
                            <input type="text" name="student_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h6 style="font-weight:bold">Student CNIC</h6>
                            </label>
                            <input type="text" name="student_cnic" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Student DOB</h6>
                            </label>
                            <input type="date" name="student_dob" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h3 style="font-weight: bold;padding:10px;">| Gaurdian Information</h3>
                        </div>
                    </div>
                     <div class="col-md-12">
                        <div class="form-group">                        
                            <h4 style="font-weight: bold;padding:5px;"> -- | Father Information</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father Name</h6>
                            </label>
                            <input type="text" name="student_father_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father CNIC</h6>
                            </label>
                            <input type="text" name="student_father_cnic" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father Profession</h6>
                            </label>
                            <input type="text" name="student_father_profession" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father Address</h6>
                            </label>
                            <input type="text" name="student_father_address" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father Tehsil</h6>
                            </label>
                            <input type="text" name="student_father_tehsil" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father District</h6>
                            </label>
                            <input type="text" name="student_father_district" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father Telephone</h6>
                            </label>
                            <input type="text" name="student_father_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Gaurdian / Father Mobile</h6>
                            </label>
                            <input type="text" name="student_father_mobile" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h4 style="font-weight: bold;padding:5px;"> -- | Gaurdian Information</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Mother Name</h6>
                            </label>
                            <input type="text" name="student_mother_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Mother Profession</h6>
                            </label>
                            <input type="text" name="student_mother_profession" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Mother CNIC</h6>
                            </label>
                            <input type="text" name="student_mother_cnic" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Mother Address</h6>
                            </label>
                            <input type="text" name="student_mother_address" class="form-control">
                        </div>
                    </div>
                     <div class="col-md-12">
                        <div class="form-group">                        
                            <h3 style="font-weight: bold;padding:10px;">| Educational Background</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h4 style="font-weight: bold;padding:5px;"> -- | Matriculation</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Marks In Matricultion</h6>
                            </label>
                            <input type="text" name="marks_matriculation" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Out Of.</h6>
                            </label>
                            <input type="text" name="out_of_matriculation" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Matricultion Roll No.</h6>
                            </label>
                            <input type="text" name="matriculation_roll_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Matricultion Division / Grade</h6>
                            </label>
                            <input type="text" name="matriculation_division_or_grade" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Matricultion Passing Year</h6>
                            </label>
                            <input type="text" name="matriculation_passing_year" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Major Subjects in Matric</h6>
                            </label>
                            <input type="text" name="subjects_in_matric" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h4 style="font-weight: bold;padding:5px;"> -- | Intermediate</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Marks In Intermediate</h6>
                            </label>
                            <input type="text" name="marks_intermediate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Out Of.</h6>
                            </label>
                            <input type="text" name="out_of_intermediate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Intermediate Roll No.</h6>
                            </label>
                            <input type="text" name="intermediate_roll_number" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Intermediate Division / Grade</h6>
                            </label>
                            <input type="text" name="intermediate_division_or_grade" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Intermediate Passing Year</h6>
                            </label>
                            <input type="text" name="intermediate_passing_year" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">College Of Passing</h6>
                            </label>
                            <input type="text" name="college_of_passing" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Major Subjects in Intermediate</h6>
                            </label>
                            <input type="text" name="subjects_in_intermediate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h4 style="font-weight: bold;padding:5px;"> -- | if (O-Level)</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">O-Level No. In First Listing</h6>
                            </label>
                            <input type="text" name="o_level_number_in_first_sitting" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">O-Level No. In Second Listing</h6>
                            </label>
                            <input type="text" name="o_level_number_in_second_sitting" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">O-Level Division Or Grade</h6>
                            </label>
                            <input type="text" name="o_level_division_or_grade" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">O-Level Subjects</h6>
                            </label>
                            <input type="text" name="o_level_subjects" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <h3 style="font-weight: bold;padding:10px;">| Referenced Info</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Medium Of Intruction</h6>
                            </label>
                            <input type="text" name="medium_of_instruction" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="student_name">
                                <h6 style="font-weight:bold">Reference Person</h6>
                            </label>
                            <input type="text" name="reference_persons" class="form-control">
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_img">
                                <h6 style="font-weight:bold">Supplier Image</h6>
                                <img src="" style="width: 100%;padding:10px;max-height: 400px;display: none;" alt="img-responsive" class="img" id="view_supplier_image">
                            </label> 
                            <input type="hidden" name="supplier_img" id="supplier_img" style="display: none;">
                            <input type="file" class="form-control" id="up_supplier_img">
                        </div>
                    </div> -->
                </div>
                
                    <div class="col text-center">
                        <center><button type="submit" class="btn btn-primary"> Add Students</button></center>
                    </div>
                
            </form>

        </div>
    </div>
</div>
<div id="captureImageModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align: left;"><i class="fa fa-camera"></i> Capture Image</h4>
        <button type="button" class="close" data-dismiss="modal" style="color: black;">&times;</button>
      </div>
      <div class="modal-body">
        <!--  -->
      <form method="POST" action="javascript://">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" id="image" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results" style="width:350px; height: 330px;padding-top: 19px;">Your captured image will appear here...</div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
                <button class="btn btn-success" id="submit">Submit</button>
            </div>
        </div>
      </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">

    $("#up_supplier_img").on('change', function(){
        $("#validateButton1").text('Wait File Is Uploading');
        var data = new FormData();
        data.append('main_image', $(this).prop('files')[0]);
        data.append('supplier_image', 'supplier_image');
        $.ajax({
            type: 'POST',
            processData: false,
            contentType: false,
            data: data,
            url: '<?=AJAX?>inventoryAjax.php',
            dataType : 'json',
            success: function(resp){
                // resp = $.parseJSON(resp);
                // console.log(resp.data);
                if (resp.status == true)
                {   
                    $("#supplier_img").val(resp.data);
                    $('#view_supplier_image').attr('src', '<?=IMG?>img/suppliers/'+resp.data);
                    $('#view_supplier_image').css('display', 'block');
                }
                else
                {
                    $("#validateButton1").text('Upload An Image First');
                }
            }
        });
    });

    Webcam.set({
        width: 390,
        height: 330,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }


</script>

