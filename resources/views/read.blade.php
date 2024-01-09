

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

<hr />
<center>

    @if(session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
    @endif

    <h2> TABEL MAHASISWA </h2>
    <hr />

    <section>

        <table class="table table-striped w-auto">
            <!-- Table Head -->
            <thead class=thead-dark>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>UMUR</th>
                    <th>EMAIL</th>
                    <th>ALAMAT</th>
                    <th> CREATED AT </th>
                    <th> UPDATED AT </th>
                    <th> ACTION </th>
                </tr>
            </thead>
            <tbody>
                <?php
            $num = 1;
            foreach($dataAll as $datax) {
                
                if(($num%2)==1) {echo "<tr class='table-info'>";} else echo "<tr>";
                    echo "<th scope='row'> $num </th>";
                    echo "<td>";
                        echo $datax->nim;
                    echo "</td>";
                    
                    echo "<td>";
                        echo $datax->nama;
                    echo "</td>";
                    echo "<td>";
                    echo '<img src="' . asset('storage/' . $datax->foto) . '" alt="Foto Mahasiswa" style="width: 40px;">';
                    echo "</td>";
                    echo "<td>";
                        echo $datax->umur;
                    echo "</td>";
                    echo "<td>";
                        echo $datax->email;
                    echo "</td>";
                        echo "<td>";
                            echo $datax->alamat;
                        echo "</td>";
                        echo "<td>";
                            echo $datax->created_at;
                        echo "</td>";
                        echo "<td>";
                            echo $datax->updated_at;
                        echo "</td>";
                    
                    echo "<td>";
                    echo "<a href=/delete/".$datax->nim." onclick=\"return confirm('Yakin mau dihapus ? ');\" class='btn btn-danger me-2'>HAPUS</a>";
                    echo "<a href=/update/".$datax->nim." onclick=\"return confirm('Yakin data mau diedit/diupdate ? ');\"class='btn btn-success'>UPDATE</a>";
                    echo "</td>";
                    
                        echo "</tr>";
                    $num++;
                        }   
                ?>
            </tbody>
        </table>
    </section>
    <a href="/create" class='btn btn-success'> Tambah Data </a>
</center>
<hr />