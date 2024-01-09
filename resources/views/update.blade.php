<html>

<head>
    <title> Create Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
        @endif

        <div class="card">
            <div class="card-header text-center font-weight-bold ">
                Update Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{url('edit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        NIM
                        <input type="text" id="nim" name="nim" class="form-control" required="" value="{{$data->nim}}" readonly>
                    </div>
                    <div class="form-group">
                        NAMA
                        <input type="text" id="nama" name="nama" class="form-control" required="" value="{{$data->nama}}">
                    </div>
                    FOTO
                    <input type="file" id="foto" name="foto" class="form-control" required="" value="{{$data->foto}}">
                    <div class="form-group">
                        UMUR
                        <input type="text" id="umur" name="umur" class="form-control" required="" value="{{$data->umur}}">
                    </div>
                    <div class="form-group">
                        EMAIL
                        <input type="text" id="email" name="email" class="form-control" required="" value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        ALAMAT
                        <textarea name="alamat" class="form-control" required=""> {{$data->alamat}} </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>

            </form>
        </div>
    </div>
    </div>
</body>

</html>