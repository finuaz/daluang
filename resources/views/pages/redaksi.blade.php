{{-- @extends('layouts.default') --}}
@extends('layouts.app')

@section('content')
    {{-- <h5>{{$preambule}}</h5> --}}


    <h1>Redaksi</h1>
    <p>mengenai dewan redaksi situs ini</p>


    <div class="row mx-2 mb-3">
        <div class="col-sm-6">
          <div class="card" id='elingsun'>
            <div class="card-body">
              <h5 class="card-title"><b>Elingsun</b></h5>
              <p class="card-text">Lulusan Sastra Arab UIN Malang. Berkeinginan untuk membuat perpustakaan masyarakat terpadu</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" id='noor'>
            <div class="card-body">
              <h5 class="card-title"><b>Noor Azaziel</b></h5>
              <p class="card-text">Kelahiran Surakarta. Hobi traveling baik bersepeda atau bersepeda motor. Apalagi jika mendaki gunung.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>


      <div class="row mx-2 mt-3">
        <div class="col-sm-6">
          <div class="card" id='kinjeng'>
            <div class="card-body">
              <h5 class="card-title"><b>Kinjeng Kijing</b></h5>
              <p class="card-text">Menghabiskan masa kecilnya di kota Kediri. Sehari-hari tampak seperti orang linglung</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card" id='iman'>
            <div class="card-body">
              <h5 class="card-title"><b>Iman Finuaz</b></h5>
              <p class="card-text">Seorang philomath, tinggal di Jogja. Saat ini tengah mendalami web development</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>



    </table>

    <button onclick=location.href="/">Index</button>
@endsection

