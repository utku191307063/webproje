<!DOCTYPE html>
<html lang="en">
<head>

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
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
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
								<li><a href="{{url('denemeiki/'.$item->id)}}"><i class="fa fa-user"></i> <?php if (isset($item->ad)){
                                                      echo "$item->ad $item->soyad";
                                                      } ?></p></a></li>
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
					<div class="col-sm-12">
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
								<li><a href="{{url('adminanasayfa/'.$item->id)}}" class="active">Ana Sayfa</a></li>
								<li class="dropdown"><a href="{{url('ürünekle/'.$item->id)}}">Ürün Ekle</a></li>
								<li><a href="{{url('vizyonekle/'.$item->id)}}">Vizyon-Misyon İşlemler</a>   </li>
								<li><a href="{{url('iletisimekle/'.$item->id)}}">İletişim İşlemleri</a></li>
                                <li><a href="{{url('hakkımızdaekle/'.$item->id)}}">Hakkımızda İşlemleri</a></li>
                                <li><a href="{{url('footerekle/'.$item->id)}}">Footer İşlemleri</a></li>
                                <li><a href="{{url('kullanıcıgetir/'.$item->id)}}">Müşteri Hizmetleri</a></li>
								<li><a href="{{url('sliderekle/'.$item->id)}}">Slider İşlemleri</a></li>
                                <li><a href="{{url('siparisdurum/'.$item->id)}}">Sipariş İşlemleri</a></li>
                                @empty
						@endforelse
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->


<br>
<br>
    <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-13 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Urunler</h2>
						@forelse ($ürün  as $key => $item)
						<div class="col-sm-4">
                            <?php
 $sayi=0;
 $sayiiki=0;
 $sayiüc=0;
 $sayidört=0;


                          ?>
							<div class="product-image-wrapper">
								<div class="single-products">
                                    @forelse ($ad  as $key => $itemiki)
										<div class="productinfo text-center">
											<img src="{{ asset ('public/images/'.$item->resim)}}" width="300px" height="270px" />
											<h2>{{$item->fiyat}} TL</h2>
											<p>{{$item->ürünadı}}</p>
											<a href="{{url('ürüngüncelle/'.$item->id.'/'.$itemiki->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ürünü Güncelle</a>
											<a href="{{url('ürünüsil/'.$item->id.'/'.$itemiki->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-times"></i>Ürünü Sil</a>
                                            @forelse ($ad  as $key => $itemi)


                                                <a href="{{url('ürünüinaktifet/'.$item->id.'/'.$itemi->id)}}"  class="btn btn-default add-to-cart"><i class="fa fa-ban"></i>İnaktif Et</a>


                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                         @empty
                         @endforelse
                         @forelse ($ad  as $key => $itemi)



                                <a href="{{url('ürünüaktifet/'.$item->id.'/'.$itemiki->id)}}"  class="btn btn-default add-to-cart"><i class="fa fa-check"></i>Aktif Et</a>



						 @empty
                         @endforelse

										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$item->fiyat}} TL</h2>
												<p>{{$item->ürünadı}}</p>
												<a href="{{url('ürüngüncelle/'.$item->id.'/'.$itemiki->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ürünü Güncelle</a>
												<a href="{{url('ürünüsil/'.$item->id.'/'.$itemiki->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-times"></i>Ürünü Sil</a>

						@forelse ($ad  as $key => $itemi)

                            <a href="{{url('ürünüinaktifet/'.$item->id.'/'.$itemi->id)}}"  class="btn btn-default add-to-cart"><i class="fa fa-ban"></i>İnaktif Et</a>

                             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                         @empty
                         @endforelse


						@forelse ($ad  as $key => $itemi)

                                <a href="{{url('ürünüaktifet/'.$item->id.'/'.$itemi->id)}}"  class="btn btn-default add-to-cart"><i class="fa fa-check"></i>Aktif Et</a>


						 @empty
                         @endforelse

											</div>
										</div>
                                        @empty
                                        @endforelse
								</div>

							</div>
						</div>
						@empty
						@endforelse


					</div><!--features_items-->




				</div>
			</div>
		</div>
	</section>



    <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.scrollUp.min.js"></script>
	<script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
