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

    <div class="container p-5">
        <form action="{{route('order.store')}}" method="post">
            @csrf
            <label for="nama_pemesan">Nama Pemesan</label>
            <input type="text" name="nama_pemesan" class="form-control" value="{{ old('nama_pemesan') }}">
            @error('nama_pemesan')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="produk">Produk</label>
            <select name="produk" id="produk" class="form-control">
                <option value="">Pilih Pesanan</option>
                <option value="es teh" {{ old('produk') == 'es teh' ? 'selected' : '' }}>Es Teh</option>
                <option value="es teh susu" {{ old('produk') == 'es teh susu' ? 'selected' : '' }}>Es Teh Susu</option>
            </select>
            @error('produk')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="{{ old('harga') }}">
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="jumlah">Jumlah Pesanan</label>
            <input type="text" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah') }}">
            @error('jumlah')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="button" class="btn btn-info mt-3" id="hitungBtn">Hitung Total</button>
            <button type="submit" class="btn btn-cta mt-3">Pesan</button>
        </form>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#hitungBtn').click(function() {
                var harga = parseFloat($('#harga').val()) || 0;
                var jumlah = parseInt($('#jumlah').val()) || 0;
                var total = harga * jumlah;
                alert('Total Harga: Rp ' + total);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>