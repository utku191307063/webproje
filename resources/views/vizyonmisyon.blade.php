
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .misyon{

text-align: left;
margin-left: 300px;
margin-right: 300px;
margin-top: 70px;
}
.misyon h2 {
text-align: left;
color:orange ;
}
.misyon h3 {
text-align: left;
color:orange ;
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
						@forelse ($ad  as $key => $item)
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{url('deneme/'.$item->id)}}"><i class="fa fa-user"></i> <?php if (isset($item->ad)){
                                                      echo "$item->ad $item->soyad";
                                                      } ?></p></a></li>
								<li><a href="{{url('sepet/'.$item->id)}}"><i class="fa fa-shopping-cart"></i> Sepet({{$variable}})</a></li>
								<li><a href="{{url('anasayfa')}}"><i class="fa fa-lock"></i> Çıkış Yap</a></li>
							</ul>
						</div>

						@empty
						@endforelse
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
                            @forelse ($ad  as $key => $item)
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{url('anasayfaiki/'.$item->id)}}" class="active">Ana Sayfa</a></li>
                                    <li class="dropdown"><a href="{{url('ürünleriki/'.$item->id)}}">Ürünler<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="{{url('güneşgözlükleri/'.$item->id)}}">Güneş Gözlükleri</a></li>
                                            <li><a href="{{url('numaralıgözlükler/'.$item->id)}}">Numaralı Gözlükler</a></li>
                                            <li><a href="{{url('lensler/'.$item->id)}}">Lensler</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('vizyonmisyon/'.$item->id)}}">Vizyon-Misyon</a>

                                    </li>

                                    <li><a href="{{url('iletişim/'.$item->id)}}">İletişim</a></li>
                                    <li><a href="{{url('hakkımızda/'.$item->id)}}">Hakkımızda</a></li>
                                </ul>
                            @empty
                            @endforelse
                            </div>
					</div>
					<div class="col-sm-3">

					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    <div class="misyon">
        @forelse ($numara  as $key => $item)
        <h2>Vizyon</h2><hr>
        <br>
        <p>{{$item->vizyon}}
        </p>
        <br>
        <h2>Misyon</h2><hr><br>
        <p>{{$item->misyon}}<p>
            <br>

        <br>
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
