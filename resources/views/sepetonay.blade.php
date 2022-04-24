<!DOCTYPE html>
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form kaynak olarak kullanılmıştır-->
<html lang="en">
<head>
    <style>
        body {
          font-family: Arial;
          font-size: 17px;
          padding: 8px;
        }

        * {
          box-sizing: border-box;
        }

        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          margin: 0 -16px;
        }

        .col-25 {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
        }

        .col-50 {
          -ms-flex: 50%; /* IE10 */
          flex: 50%;
        }

        .col-75 {
          -ms-flex: 75%; /* IE10 */
          flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
          padding: 0 16px;
        }


        input[type=text] {
          width: 100%;
          margin-bottom: 20px;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 3px;
        }

        label {
          margin-bottom: 10px;
          display: block;
        }

        .icon-container {
          margin-bottom: 20px;
          padding: 7px 0;
          font-size: 24px;
        }

        .btn {
          background-color: #04AA6D;
          color: white;
          padding: 12px;
          margin: 10px 0;
          border: none;
          width: 100%;
          border-radius: 3px;
          cursor: pointer;
          font-size: 17px;
        }

        .btn:hover {
          background-color: #45a049;
        }

        a {
          color: #2196F3;
        }

        hr {
          border: 1px solid lightgrey;
        }

        span.price {
          float: right;
          color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
          .row {
            flex-direction: column-reverse;
          }
          .col-25 {
            margin-bottom: 20px;
          }
        }
        </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="/action_page.php">

              <div class="row">
                <div class="col-50">
                  <h3>Sipraiş Adresi</h3>
                  <label for="fname"><i class="fa fa-user"></i>Ad-Soyad</label>
                  <input type="text">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" >
                  <label for="adr"><i class="fa fa-address-card-o"></i>Teslimat Adresi</label>
                  <input type="text" >
                  <label for="city">Şehir</label>
                  <input type="text">

                  <div class="row">
                    <div class="col-50">
                      <label for="state">İlçe</label>
                      <input type="text" >
                    </div>
                    <div class="col-50">
                      <label for="zip">Posta Kodu</label>
                      <input type="text">
                    </div>
                  </div>
                </div>

                <div class="col-50">
                  <h3>Ödeme</h3>

                  <label for="cname">Kart Üzerindeki İsim</label>
                  <input type="text" >
                  <label for="ccnum">Kart Numarası</label>
                  <input type="text" >

                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Son Kullanma Tarihi</label>
                      <input type="text" >
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" >
                    </div>
                  </div>
                </div>

              </div>
              @if(session('status'))
              <h3 style=" color:red ;">{{session('status')}}</h3>
            @endif

              @forelse ($ad  as $key => $item)
              <h2>Toplam Sepet Tutarı:</h2>
              <h2>{{$variable2}} TL</h2>
              <a href="{{url('tamam/'.$item->id.'/'.$variable2)}}" style="margin-left:0px; color:orange; font-size:25px;"  >
                       Alışverişi Tamamla
              </a>

              <br>
              <br>
              <br>
              @empty
              @endforelse

            </form>
          </div>
        </div>

    </div>
    <br>
<br>
<br>
<br>


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
