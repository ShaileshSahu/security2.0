<div class="row-fluid">
 <div class="span12">
   <div class="widget no-margin">
     <div class="widget-header">
       <div class="title">
         <span class="fs1" aria-hidden="true" data-icon="&#xe14a;"></span> Guard Information:-
       </div>
     </div>
     <div class="widget-body">
       <div id="dt_example" class="example_alt_pagination">
         <table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
           <thead>
             <tr>
               <th >S.no</th>
               <th>Guard Id</th>
               <th>UAN no.</th>
               <th>Name</th>
               <th >Father's Name</th>
               <th >DOB</th>
               <th class="hidden-phone">Zone</th>
               <th  class="hidden-phone">Account No</th>
               <th>ESIC NO.</th>
               <th>PF NO.</th>
               <th>Designation</th>
               <th>Image</th>
               <th>Address</th>
               <th>Aadhar_no</th>
               <th>Phone no.</th>
               <th>Police Ver. No.</th>
<th>Site Address</th>
<th>Date Of joining</th>
<th>Date of Leaving</th>
               <th>Monthly Update</th>
               <th>Update</th>
               <th>Delete</th>

            </tr>
           </thead>
           <tbody>
             <tr class="gradeX">
               <?php
                 $sno =1;

                 if(isset($_GET['pagination']))
                 {
                       $sno = ($_GET['pagination']-1)*15+1;
                 }
                 else {
                   $sno=1;
                 }

                 while($row = mysqli_fetch_array($result))

                 {

                   $emp_id = $row['emp_id'];

                 ?><td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?> > <?php echo $sno;?></td>
                    <td  <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?>><?php echo $row['uan_no'] != null ? $row['emp_id'] : '0'       ;?></td>
               <td  <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?>><?php echo $row['uan_no'] != null ? $row['uan_no'] : '0'       ;?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_name'] ;?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?>><?php echo $row['emp_father_name'];?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_dob'];?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_zone'];?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?>><?php echo $row['emp_account_no']  != null ? $row['emp_account_no'] : '0';?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_esic_no'] != null ? $row['emp_esic_no'] : '0';?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?>><?php echo $row['emp_pf_no'] != null ? $row['emp_pf_no'] : '0';?></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_designation'];?></td>
                 <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><img src="upload/<?php echo $row['emp_image'];?>" alt="emp image" style="width:70px;height:70px;" ></td>
               <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?> class="hidden-ph"><?php echo $row['emp_address'];?>
                 </td>
                 <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?> class="hidden-ph"><?php echo $row['emp_aadhar'];?>
                   </td>

                 <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_phn'];
                 ?> </td>

                 <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_police_no'];
                 ?> </td>



                 <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_site_address'];
                 ?> </td>

                                  <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_date_joining'];
                                  ?> </td>

                                                   <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><?php echo $row['emp_date_leaving'];
                                                   ?> </td>
      <!.. monthly uodate ..>
                      <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.3);" <?php }?>><a href="monthlyUpdate.php?emp_id=<?=$emp_id?>" role="button" class="btn btn-small  btn-success">
                              Monthly Update
                          </a>
                        </td>

<!.. information update ..>

                  <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><a href="update_guardInfo.php?emp_id=<?=$emp_id?>" role="button" class="btn btn-small btn-primary hidden-tablet hidden-phone">
                   Update
                 </a> </td>

               </td>

                                 <td <?php if($row['emp_esic_no'] ==0  || $row['emp_pf_no']==0  || $row['emp_account_no']==0 || $row['uan_no'] ==0 ){?>style="background-color:rgba(125,125,125,0.2);" <?php }?>><a href="delete.php?emp_id=<?=$emp_id?>" role="button" class="btn btn-small btn-danger hidden-tablet hidden-phone">
                                  Delete
                                </a> </td>

                              </td>

             </tr>
<?php
        $sno++;


      } ?>
           </tbody>
         </table>
         <div class="clearfix"></div>
       </div>
     </div>
   </div>
 </div>
</div>
