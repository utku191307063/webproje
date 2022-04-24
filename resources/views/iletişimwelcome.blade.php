<!DOCTYPE html>
<html lang="en">
<head>
<style>

.myDiv {
    border: 3px solid  rgb(209, 206, 206);
    text-align: center;
    width: 45%;
    height: 448px;
    margin-left: 50px;
    margin-top: 95px;
    display: inline-block;
  }
.myDiv .yazı p  {
margin-top: 10px;
text-align: left;
margin-left: 10px;
font-size: 18px;

 }
 .myDiv p {
   margin-top: 45px;
  text-align: left;
  margin-left: 10px;
  font-size: 16px;


 }
 .myDiv p solid{
  font-weight: bold;

 }
 .harita {
  position:absolute;
  border: 3px solid  rgb(209, 206, 206);
  text-align: center;
  width: 45%;
  height: 448px;
  top:315px;
  left: 900px;
}
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SAN OPTİK</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->


		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="/images/home/sanoptik2.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">



						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Sepet</a></li>
								<li><a href="{{url('admingiris')}}"><i class="fa fa-lock"></i> Giriş Yap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
                        <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{'anasayfa'}}" class="active">Ana Sayfa</a></li>
								<li class="dropdown"><a href="{{'ürünlerwelcome'}}">Ürünler<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{'güneşgözlükleriwelcome'}}">Güneş Gözlükleri</a></li>
										<li><a href="{{'numaralıwelcome'}}">Numaralı Gözlükler</a></li>
										<li><a href="{{'lenswelcome'}}">Lensler</a></li>
                                    </ul>
                                </li>
								<li><a href="{{'vizyonwelcome'}}">Vizyon-Misyon</a>

                                </li>

								<li><a href="{{'iletişimwelcome'}}">İletişim</a></li>
                                <li><a href="{{'hakkımızdawelcome'}}">Hakkımızda</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">


					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    <div class="myDiv">
        @forelse ($numara  as $key => $item)
        <div class="yazı"><p>ILETISIM</p></div><hr>
        <p><solid>Firma adı: </solid> {{$item->ad}}</p>
        <p><solid>Telefon: </solid>{{$item->numara}}</p>
        <p><solid>Faks: </solid>{{$item->faks}}</p>
        <p><solid>Adres: </solid>{{$item->adres}}</p>
        <p><solid>E-posta: </solid>{{$item->email}}</p>
    </div>
    <div class="harita">
      <iframe src="{{$item->harita}}" width="682" height="448" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        @empty

        @endforelse
    </div>
	<br><br><br>
	<footer id="footer"><!--Footer-->
	@forelse ($footer  as $key => $item)
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="single-widget">
							<h2>Hakkımızda</h2>
                            <h5>{{$item->hakkımızda}}</h5>

						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-widget">
						<br><br>
                            <ul>
                                <li>
                                    <p><i class="fa fa-map-marker">&nbsp&nbsp</i>Address: {{$item->adres}}</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-phone-square">&nbsp&nbsp</i>Phone: <a href="">{{$item->telefon}}</a></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope">&nbsp&nbsp</i>Email: <a href="mailto:{{$item->mail}}">{{$item->mail}}</a></p>
                                </li>

						</div>
					</div>


				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">

			</div>
		</div>
		@empty
		@endforelse
	</footer><!--/Footer-->


    <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.scrollUp.min.js"></script>
	<script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
