<!DOCTYPE html>
<html>
<head>
	<title>Du Lịch Kent.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 	<script src="https://code.jquery.com/jquery.js"></script>
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
 	<script type="text/javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
</head>
<body style="background-image: url('image/background.jpg') ">
	<div class="container">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				      <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="#">dulichkent.com</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <ul class="nav navbar-nav">
				      	<li class=""><a href="{{ url('admin/danhmuctrongnuoc') }}">Danh mục du lịch trong nước</a></li>
				      	<li><a href="{{ url('admin/danhmucnuocngoai') }}">Danh mục du lịch ngoài nước</a></li>
				      	<li><a href="{{ url('admin/thongtindulich') }}">Thông tin du lịch</a></li>
				      	<li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin tức du lịch <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="{{ url('admin/lichkhoihanh') }}">Lịch khởi hành</a></li>
								<li><a href="{{ url('admin/danhlamthangcanh') }}">Danh lam thắng cảnh</a></li>
								<li><a href="{{ url('admin/thongtinamthuc') }}">Thông tin ẩm thực</a></li>
								<li><a href="{{ url('admin/camnangdulich') }}">Cẩm nang du lịch</a></li>
					        </ul>
				      	</li>
				      	<li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					            <li><a href="{{ url('admin/chothuexe') }}">Cho thuê xe</a></li>
								<li><a href="{{ url('admin/khachsan') }}">Khách sạn</a></li>
					        </ul>
				      	</li>
				      	<li><a href="{{ url('admin/user') }}">User</a></li>
						<li><a href="{{ url('admin/logout') }}">Đăng xuất</a></li>
				    </ul>  
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>

	
	
	<div class="container body-content">
        @yield('controller')
        
       <!--  <footer>
            <p>Thanh Nga</p>
        </footer> -->
    </div>
</body>
</html>