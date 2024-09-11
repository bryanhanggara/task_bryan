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

    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>

                @forelse ($orders as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_pemesan}}</td>
                        <td>{{$item->produk}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>{{$item->total}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" class="text-center">Belum ada pesanan</td>
                    </tr>
                @endforelse
            </thead>
        </table>
        <a href="{{route('order.create')}}" class="btn btn-cta">Buat Pesanan</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>