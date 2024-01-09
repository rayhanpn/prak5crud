<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<center>
    <h2> Data Mahasiswa Berhasil disimpan </h2>
    <hr />
    <table class="table table-primary" style='width:50%; table-align:center;'>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NIM</td>
                <td>{{$data['nim']}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>NAMA</td>
                <td>{{$data['nama']}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>FOTO</td>
                <td>@isset($data['foto'])
                    <img src="{{ asset('storage/' . $data['foto']) }}" alt="Foto Mahasiswa" style="width: 40px;">
                    @endisset
                </td>
            </tr>
            <tr>
                <th scope=" row">4</th>
                <td>UMUR</td>
                <td>{{$data['umur']}}</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>EMAIL</td>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>ALAMAT</td>
                <td>{{$data['alamat']}}</td>
            </tr>
        </tbody>
    </table>
</center>
<hr />
<center>
    <a href=/read class="btn btn-success"> Tampilkan Data </a>
</center>