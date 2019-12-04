<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <!-- navbar -->
    <nav class="navbar fixed-top ">
        <div class="container-fluid">
            <div class="">
                <a href="#home" class="navbar-brand page-scroll">Rifki Oskar</a>
            </div>

            <ul class="nav">
                <li class="nav-item pr-2"><a href="#about" class="page-scroll">About</a></li>
                <li class="nav-item pr-2"><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                <li class="nav-item pr-2"><a href="#Contact" class="page-scroll">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- jumbotron -->
    <div class="jumbotron text-center">
        <img src="img/1.png" alt="">
        <h1>Rifki Oskar</h1>
        <p>Mahasiswa Gunadarma</p>
    </div>
    <!-- akhir jumbotron -->

    <!-- About -->
    <section class="class" id="about">
        <div class="container">
            <div class="col-sm-12">
                <h2 class="text-center">About</h2>
                <hr>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <p>A portfolio is a grouping of financial assets such as stocks, bonds, commodities, currencies and cash equivalents, as well as their fund counterparts, including mutual, exchange-traded and closed funds. A portfolio can also consist
                        of non-publicly tradable securities, like real estate, art, and private investments. Money market accounts make full use of this concept to function properly.</p>
                </div>
                <div class="col-sm-6">
                    <p>Portfolios are held directly by investors and/or managed by financial professionals and money managers. Investors should construct an investment portfolio in accordance with their risk tolerance and investing objectives. Investors
                        can also have multiple portfolios for various purposes. It all depends on one's objectives as an investor. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir About -->

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Portfolio</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
            @foreach($pwebs as $data)
                <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="{{$data->icon}}" alt="">
                    </a>
                </div>
                @endforeach
                <!-- <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="img/portfolio/1.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="img/portfolio/2.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="img/portfolio/3.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="img/portfolio/4.png" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="thumbnail">
                        <img src="img/portfolio/5.png" alt="">
                    </a>
                </div> -->

            </div>
        </div>
    </section>


    <!-- akhir Portfolio -->

    <!-- contact -->
    <section class="contact" id="Contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8 offset-2">
                    <form>
                        <div class="form group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                        <div class="form group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                        <div class="form group">
                            <label for="Telp">No. Telp</label>
                            <input type="tel" id="Telp" class="form-control" placeholder="Masukkan No Telp">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir contact -->

    <!-- footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p> built by. <a href="https://www.instagram.com/rifkioskar/" target="_blank">M. RIFKI OSKAR</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>