<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		.row{
			margin-right: unset !important;
			margin-left: unset !important;
		}
	</style>
</head>
<body>
	<div class="vertical-nav bg-white" id="sidebar">
		<ul class="nav flex-column bg-white mb-0">

			<div class="row">
				<div class="col-sm-12" style="padding: 0px;">
					<img src="../images/Logo.jpg" style="width: 100%; padding: 0px;">
				</div>
			</div>

			<li class="nav-item" style="padding-top: 10%;">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-1" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-th-large mr-3  fa-fw"></i>
						Dashboard
						<span class="caret"></span>
					</a>
					<ul id="submenu-1" class="collapse">
						<li><a href="index.php?app=admin&action=dashboardadmin"><i class=""></i>Dashboard</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-2" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-calendar-check-o mr-3  fa-fw"></i>
						Schedule
						<span class="caret"></span>
					</a>
					<ul id="submenu-2" class="collapse">
						<li><a href="index.php?app=admin&action=admin_calendar"><i class=""></i>Calendar</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-3" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user mr-3  fa-fw"></i>
						Teacher
						<span class="caret"></span>
					</a>
					<ul id="submenu-3" class="collapse">
						<li><a href="index.php?app=admin&action=teacher_list"><i class=""></i>Teacher List</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-4" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user mr-3  fa-fw"></i>
						Students
						<span class="caret"></span>
					</a>
					<ul id="submenu-4" class="collapse">
						<li><a href="index.php?app=admin&action=studentslist"><i class=""></i>Students List</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-5" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-book mr-3  fa-fw"></i>
						Course
						<span class="caret"></span>
					</a>
					<ul id="submenu-5" class="collapse">
						
						<li><a href="index.php?app=admin&action=course_list"><i class=""></i> Course list</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-6" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-trophy mr-3  fa-fw"></i>
						Competitions
						<span class="caret"></span>
					</a>
					<ul id="submenu-6" class="collapse">
						<li><a href="index.php?app=admin&action=admin_compitition"><i class=""></i>Competitions list</a></li>
						<li><a href="index.php?app=admin&action=addteam_compitition"><i class=""></i> Add team 1.2</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-7" aria-haspopup="true" aria-expanded="false">
						<i class="glyphicon glyphicon-triangle-top mr-3  fa-fw"></i>
						Camp
						<span class="caret"></span>
					</a>
					<ul id="submenu-7" class="collapse">
						<li><a href="index.php?app=admin&action=admin_camp"><i class=""></i> Camp list</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-8" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-address-card mr-3  fa-fw"></i>
						Certificate
						<span class="caret"></span>
					</a>
					<ul id="submenu-8" class="collapse">
						<li><a href="index.php?app=admin&action=selectcertificate"><i class=""></i>Create Certificate</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-9" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-edit mr-3  fa-fw"></i>
						Content/Home
						<span class="caret"></span>
					</a>
					<ul id="submenu-9" class="collapse" style="padding-bottom: 50px;">
						<li><a href="index.php?app=admin&action=ibot_news"><i class=""></i> Ibot News</a></li>
						<li><a href="index.php?app=admin&action=text_slide"><i class=""></i> Text Slide</a></li>
						<li><a href="index.php?app=admin&action=video_background"><i class=""></i> Video Background</a></li>
						<li><a href="index.php?app=admin&action=image_home"><i class=""></i> Image Slide/Home</a></li>
						<li><a href="index.php?app=admin&action=image_camp"><i class=""></i> Image Slide/Camp</a></li>
						<li><a href="index.php?app=admin&action=image_compeitition"><i class=""></i> Image Slide/Compeitition</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-10" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-edit mr-3  fa-fw"></i>
						Content/AboutUs
						<span class="caret"></span>
					</a>
					<ul id="submenu-10" class="collapse" style="padding-bottom: 50px;">
						<li><a href="index.php?app=admin&action=text_slide_about"><i class=""></i> Text Slide</a></li>
						<li><a href="index.php?app=admin&action=about_us_certificate"><i class=""></i> Certificate</a></li>
						<li><a href="index.php?app=admin&action=about_us_performance"><i class=""></i> Our Performance</a></li>
						<li><a href="index.php?app=admin&action=about_us_ourteam"><i class=""></i> Our Team</a></li>

					</ul>
				</div>
			</li>			
		</ul>
	</div>

	

</body>
</html>
<script>
	$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
  	$('#sidebar, #content').toggleClass('active');
  });
});
</script>