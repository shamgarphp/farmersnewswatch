<!DOCTYPE html>

<html lang="en">

<head><title>Bslate Education - Side Menu</title>
        <!-- Global stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</head>
    <body class="pace-done">
	


<!--  page header   -->
       
		
		<!--  page header stop   -->
		
		
		<!-- page overall content start here -->
		
        
			
			
			<!-- page sidemenu start here     -->
			
                <div class="sidebar sidebar-main" style="background-color:	#303030 ;">
                    <div class="sidebar-content" >
                        <div class="sidebar-user" style="background-color:#FF6666;box-shadow:inset-5px -5px 5px grey;margin-top:-20px">
                            <div class="category-content">
                                                                    <div class="media">
                                        <a href="javascript:void()" class="media-left">
										<span class="glyphicon glyphicon-user" style="font-size:25px;color:white;text-shadow:3px 3px 3px grey;"></span>
										<!--
										<img src="./supporting/placeholder.jpg" class="img-circle img-sm" alt="">
										-->
										</a>
                                        <div class="media-body">
                                            <span class="media-heading text-semibold"><b style="color:white;text-shadow:2px 2px 5px black;font-weight:bold;font-size:16px;">Administrator</b></span>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                                                    <div class="sidebar-category sidebar-category-visible" >
                                <div class="category-content no-padding">
                                    <ul class="navigation navigation-main navigation-accordion">                                        
                                        
                                        	<?php
											 if($_SESSION['client']=="Admin")
                                            {
                                                ?>
                                        								         <li style="text-align:left;">
                                            <a href="javascript:void()" id="blds" class="has-ul"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">Menu Bar</span></a>
                                            <ul class="hidden-ul" style="margin-top:-2px;"> 
                                                <li><a id="subbold" href="world.php">Select Category</a></li>
                                                <li><a id="subbold" href="magazine.php">Add Magazines</a></li>
                                                <li><a id="subbold" href="phone_directory.php">Add Phone Directory</a></li>
                                                
										 
                                                    </ul>
                                                </li>
                                            
											
											                 	<li>
                                            <a href="promotions.php" id="blds"  > <span style="color:white;">Right Side Promotions</span></a>  </li>
											                 	<li>
                                            <a href="add_login_info.php" id="blds"  > <span style="color:white;">Create Logins</span></a>
											
											
											</li>
											
											<?php
                                            }
                                            else
                                            {
                                                ?>
                                                
                                            <li style="text-align:left;">
                                                <a href="javascript:void()" id="blds" class="has-ul"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">Menu Bar</span>
                                                </a>
                                                <ul class="hidden-ul" style="margin-top:-2px;"> 
                                                    <li>
                                                        <a id="subbold" href="world.php">Select Category
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li style="text-align:left;">
                                                <a href="javascript:void()" id="blds"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">NEWS</span>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href="news_worldreports.php?data=<?php echo "Industry_News"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">NEWS</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="news_worldreports.php?data=<?php echo "Health_and_Life_Style"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">FARMER'S CLUB</span>
                                                </a>
                                            </li>
                                            <li style="text-align:left;">
                                                <a href="news_worldreports.php?data=<?php echo "Magazines"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">MAGAZINES</span>
                                                </a>
                                            </li>
                                            <li style="text-align:left;">
                                                <a href="news_worldreports.php?data=<?php echo "Success_Stories"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">SUCCESS STORIES</span>
                                                </a>
                                            </li>
                                            <li style="text-align:left;">
                                                <a href="news_worldreports.php?data=<?php echo "Co-operative's"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">CO-OPERATIVE'S</span>
                                                </a>
                                            </li>
                                            <li style="text-align:left;">
                                                <a href="news_worldreports.php?data=<?php echo "ngo"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">NGO's</span>
                                                </a>
                                            </li>
                                            <li style="text-align:left;">
                                                <a href="news_worldreports.php?data=<?php echo "fpo"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">FPO's</span>
                                                </a>
                                            </li>
                                            <li style="text-align:left;">
                                                <a href="news_worldreports.php?data=<?php echo "Nurseries"; ?>" style="color:white;"><i class="fa fa-newspaper-o" style="font-size:16px"></i><span style="color:white;">NURSERIE'S</span>
                                                </a>
                                            </li>
                                            <?php } ?>
                                            
                                           
                                      
                                        


                       
										
										<!--												<li>
                                            <a href="javascript:void()" id="blds" class="has-ul"><i class="glyphicon glyphicon-list-alt"></i><span style="color:white;">Reports</span></a>
                                            <ul class="hidden-ul" style="margin-top:-2px;">
                                                <li><a id="subbold" href="edu_finance_reports.php">Finance Reports</a></li>
												<li><a id="subbold" href="edu_user_reports.php">User Reports</a></li>
												

											</ul>
                                        </li>				
										
										
										

                                        <li>
                                            <a href="javascript:void()" id="blds" class="has-ul"><i class="glyphicon glyphicon-equalizer"></i><span style="color:white;">Academic</span></a>
                                            <ul class="hidden-ul" style="margin-top:-2px;">
                                                <li>
                                                    <a id="subbold" href="javascript:void()" class="has-ul">Course &amp; Batch</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="javascript:void()" id="subbold">Course</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Batch</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Class teacher Allocation</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Subjects</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="javascript:void()" id="subbold">Subjects</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Assign Subjects</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Subject Allocation</a>
                                                        </li><li><a href="javascript:void()" id="subbold">Elective Subject</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Lesson Planning</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="javascript:void()">Lesson Planning</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Time Table</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="javascript:void()" id="subbold">Set Time Table</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Active Timetable</a></li>
                                                        <li><a href="javascript:void()" id="subbold">View Batch Timetable</a></li>
                                                        <li><a href="javascript:void()" id="subbold">View Teacher Timetable</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Search Proxy</a></li>
                                                        <li><a href="javascript:void()" id="subbold">Teacher Working Hours</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Exams</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="javascript:void()"  class="has-ul" style="text-decoration:none;font-size:13px;">GPA</a>
                                                            <ul class="hidden-ul">
                                                                <li><a href="javascript:void()" id="subbold">Set Term</a></li>
                                                                <li><a href="javascript:void()" id="subbold">Create Exam</a></li>
																<li><a href="javascript:void()" id="subbold">GPA Skill</a></li>
																

														   </ul>
                                                        </li>
                                                        <li><a href="javascript:void()" id="subbold" class="has-ul">CCE</a>
                                                            <ul class="hidden-ul">
                                                                <li><a href="javascript:void()" id="subbold" class="has-ul">Initial Settings</a>
                                                                    <ul class="hidden-ul">
                                                                     <li><a href="javascript:void()" id="subbold">Set Term</a></li>
                                                                <li><a href="javascript:void()" id="subbold">Create Exam</a></li>
																<li><a href="javascript:void()" id="subbold">GPA Skill</a></li>
																                                                                   </ul>
                                                                </li>
                                                                <li><a href="javascript:void()" id="subbold" class="has-ul">CCE Exam</a>
                                                                    <ul class="hidden-ul">
                                                                   <li><a href="javascript:void()" id="subbold">Set Term</a></li>
                                                                <li><a href="javascript:void()" id="subbold">Create Exam</a></li>
																<li><a href="javascript:void()" id="subbold">GPA Skill</a></li>
																      </ul>
                                                                </li> 
                                                            </ul>
                                                        </li>

                                                        <li><a href="javascript:void()" id="subbold" class="has-ul">Exam Hall</a>
                                                            <ul class="hidden-ul">
                                                                <li><a href="javascript:void()" id="subbold"> Exam Hall</a></li>
                                                                <li><a href="javascript:void()" id="subbold">  Hall Arrangement</a></li>
                                                                <li><a href="javascript:void()" id="subbold">Invigilation Duties</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>-->
												<!--
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Assignments &amp; Notes</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/core/assignment/create">Add Assignment</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/note/create">Add Notes</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Certifications</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/certifications/certificatetype/create">Certificate Type</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/certifications/customcertificate/create">Custom Certificate</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/certifications/generatecertificate/create">Generate Certificate</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Placements</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/placements/placementcellmembers/create">Placement Cell Members</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/placements/placementvendors/create">Placement Vendors</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/placements/placementattendees/create">Attendees</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/placements/placeddetails/create">Placed Details</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold" class="has-ul">Promotion &amp; Alumni</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/core/student/promotion">Promotion &amp; Alumni</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/student/alumnimembers">Alumni Members</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/student/cleardata">Data Reset</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" class="has-ul">Occurrence</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/core/occurance/create">Occurrence Register</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void()" id="subbold"  class="has-ul">Circular</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/circular/circular/create">Circular</a></li>
                                                    </ul>
                                                </li>
												
												-->
												
												
												
												
                                            </ul>
                                        </li>
                                       

<!--

									   <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-eye"></i><span>HR/Payroll</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="/index.php/core/employeemaster/adminusers">Admin Users</a></li>
                                                <li><a href="http://demo.web-school.in/#" class="has-ul">Employee Management</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/core/usertype/create">Add User Type</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/department/create">Add Department</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/designation/create">Add Designation</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/employeedetails/create">Add Employee</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/employeedetails/admin">Employee List</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/bank/bankdetails/create">Add Bank Details</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/employeedetails/reports">Print List</a> </li>
                                                    </ul>
                                                </li>
                                                <li><a href="http://demo.web-school.in/#" class="has-ul">Payroll</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/payroll/payheadmaster/create">Pay Head</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/payroll/payabletype/create">Payment  Types</a></li>
                                                        <li><a href="/index.php/payroll/leaveallowed/create">Allowed Leaves</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/payroll/salarydetails/create">Salary Settings</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/payroll/employeesalary/create">Employee Salary</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/payroll/employeesalary/generatepayslip">Generate Pay Slip</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="#">Working Days</a></li>
                                                <li><a href="http://demo.web-school.in/#" class="has-ul">Leave Management</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/leave/leavecategory/create">Leave Category</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/leave/leavedetails/create">Leave Details</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/leave/leaveapplication/create">Leave Application</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/leave/leaveapplication/approve">Leave Approvals</a></li>
                                                    </ul>
                                                </li>
                                                                       <li><a href="#">Attendance</a>
                                                                                <ul>
                                                <li><a href="http://demo.web-school.in/index.php/core/employeeattendance/create">Attendance</a></li>
                                                                               <li><a href="#">Attendance Report</a></li>
                                                                                </ul>
                                                                            </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-user"></i><span>Student</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/core/studentcategory/create">Student Category</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/core/student/create">Student Admission</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/core/student/admin">Student List</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/core/studentabsent/create">Attendance</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/core/batch/reports">Print List</a> </li>
                                                <li><a href="http://demo.web-school.in/index.php/core/student/guardiandetails">Guardian List</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-cash3"></i><span>Finance</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li>
                                                    <a href="http://demo.web-school.in/#" class="has-ul">Fees</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/core/feescategory/create">Fee Category</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feessubcategory/create">Fee Sub Category</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feewaiver/create">Fee Waiver</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feetemplate/create">Fee Template</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feesallocation/create">Fee Allocation</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feesallocation/collection">Fee Collection</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feesallocation/quickpayment">Quick Payment</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feesallocation/feeduewithdate">Fee Due list</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/feesallocation/reports">Reports</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/site/feeimport">Fee Import</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="http://demo.web-school.in/#" class="has-ul">Accounting</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/accountgroup/create">Account Group</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/vouchermaster/create">Voucher Master</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/voucherhead/create">Voucher Head</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/voucher/create">Create Voucher</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/voucher/daybook">Day Book</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/voucher/cashbook">Cash Book</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/accounting/voucher/bankbook">Bank Book</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class=" icon-book3"></i><span>Library</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/library/bookcategory/create">Add Category</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/library/librarybooks/create">Add Books</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/library/bookissue/create">Issue Book</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/library/bookissue/requestdetails">Request Details</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/library/bookreturn/create">Book Return</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/library/librarybooks/reports">Reports</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-truck"></i><span>Transport</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/transport/transportvehicle/create">Add Vehicle</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/transport/transportdriver/create">Add Driver</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/transport/routemaster/create">Add Route</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/transport/routedetails/create">Add Destination</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/transport/transportallocation/create">Transport Allocation</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/transport/transportfeecollection/create">Fee Collection</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class=" icon-home2"></i><span>Hostel</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hosteltype/create">Hostel Details</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hostelroom/create">Hostel Room</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hostelregistration/create">Hostel Allocation</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hostelregistration/requestdetails">Request Details</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hosteltransfer/create">Hostel Transfer/Vacate</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hostelregister/create">Hostel Register</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hostelvisitors/create">Hostel Visitors</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/hostel/hostelfeecollection/create">Hostel Fee Collection</a></li>
                                                <li>
                                                    <a href="http://demo.web-school.in/#" class="has-ul">Reports</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/hostel/hostelroom/hosteldetailsreport">Hostel Details Report</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/hostel/hostelroom/availableroomreport">Room Availability Report</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/hostel/hostelroom/requestreport">Room Request Report</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/hostel/hostelroom/occupiedreport">Room Occupancy Report</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/hostel/hostelfeecollection/feereport">Fee Reports</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-envelope"></i><span>Messages/SMS</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/core/email/email">Mailbox</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/sms/smssettings/create">SMS Settings</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/sms/smssettings/admin">Bulk SMS</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class=" icon-list-unordered"></i><span>Store Management</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li>
                                                    <a href="http://demo.web-school.in/#" class="has-ul">Inventory</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/inventory/vendors/create">Vendors</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/inventory/inventorycategory/create">Inventory Category</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/inventory/inventoryitem/create">Inventory Item</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/inventory/inventoryissue/create">Inventory Issue</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/inventory/inventoryitem/stockregister">Stock Register</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/inventory/inventoryissue/issuedreport">Issued Report</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class=" icon-stats-growth"></i><span>Performance</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="/index.php/core/employeemaster/adminusers">Admin Users</a></li>
                                                <li><a href="http://demo.web-school.in/#" class="has-ul">GPA</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/core/setmarklist/studentperformance">Student Performance</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/core/setmarklist/courseperformance">Course Performance</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="http://demo.web-school.in/#" class="has-ul">CCE</a>
                                                    <ul class="hidden-ul">
                                                        <li><a href="http://demo.web-school.in/index.php/cce/ccemarklist/studentperformance">Student Performance</a></li>
                                                        <li><a href="http://demo.web-school.in/index.php/cce/ccemarklist/courseperformance">Course Performance</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-star-full2"></i><span>Events</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/events/eventtype/create"> Event Types</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/events/event/create">Add Events</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class=" icon-link2"></i><span>Integration</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/integration/integration/create">Integration</a> </li>
                                                <li><a href="http://demo.web-school.in/index.php/integration/integration/vehicletracking">Vehicle Tracking</a> </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-file-text"></i><span>Task Manager</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/core/taskmanager/create">Assign Task</a></li>
                                                <li><a href="http://demo.web-school.in/index.php/core/taskmanager/admin">Task Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class="icon-copy3"></i><span>Reports</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/core/student/studentreport">Student Reports</a> </li>
                                                <li><a href="http://demo.web-school.in/index.php/core/student/studentdetailsreport">Student Details</a> </li>
                                                <li><a href="http://demo.web-school.in/index.php/core/feesallocation/duereport">Fee Due Reports</a> </li>
                                                <li><a href="http://demo.web-school.in/index.php/core/feesallocation/paidreport">Fee Paid Reports</a> </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="http://demo.web-school.in/#" class="has-ul"><i class=" icon-paperplane"></i><span>Withdrawal</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="http://demo.web-school.in/index.php/core/student/withdrawal">Withdrawal</a> </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void()" class="has-ul"><i class="glyphicon glyphicon-cloud-download"></i><span>Data Export</span></a>
                                            <ul class="hidden-ul" style="">
                                                <li><a href="javascript:void()">Export</a> </li>
                                            </ul>
                                        </li>
										
										
										-->
										
										<br><br><br>
                                    </ul>
                                </div>
                            </div>
                                                </div>
                </div>

				
				<!--  page sidemenu stop here   -->
				
				
				
				
				
				

			


</body></html>