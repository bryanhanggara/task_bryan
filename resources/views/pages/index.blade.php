<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warung Es Teh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('style.css')}}">
    <link rel="icon" href="https://media.istockphoto.com/id/1421175173/id/vektor/minuman-segar-es-teh.jpg?s=612x612&w=0&k=20&c=mBUh7YUSQx5kFGWkvUmjwinV5ecW5l2LyIJP1RQYP48=">
  </head>
  <body>
    {{-- navigasi --}}
    @include('includes.nav')

    {{--hero--}}
    <header class="hero text-center p-4">
        <div class="title">
            <h1>
                Selamat Datang di Warung Es Teh
            </h1>
        </div>
        <div class="sub-title">
            <p>Pesan es teh dengan mudah</p>
        </div>
        <a href="" class="btn btn-cta">
            Pesan Teh
        </a>
    </header>

    {{--Section 1--}}
    <div class="container p-4">
        <h2 class="text-center m-4">Kenapa Kami?</h2>

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Berasal dari daun teh berkualitas</h5>
                        <p class="card-text">Teh pilihan yang dihasilkan dari kebun terbaik, memberikan rasa otentik dan aroma yang memikat di setiap tegukan.</p>
                        <a href="#" class="btn btn-cta">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kesegaran yang alami</h5>
                        <p class="card-text">Nikmati kesegaran alami dari bahan-bahan murni tanpa campuran buatan, menyegarkan tubuh dan pikiran Anda.</p>
                        <a href="#" class="btn btn-cta">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>