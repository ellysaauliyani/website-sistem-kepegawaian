<div class="nav-scroller py-1 mb-3 border-bottom" style="background-color: #88a9cb; padding: 20px;">
    <nav class="nav nav-underline justify-content-between">
        <a class="nav-item nav-link link-body-emphasis" href="#profil" id="profil-link">Profil</a>
        <a class="nav-item nav-link link-body-emphasis" href="#absensi" id="absensi-link">Absen Masuk</a>
        <a class="nav-item nav-link link-body-emphasis" href="#absenkeluar" id="absen-keluar-link">Absen Keluar</a>
        <a class="nav-item nav-link link-body-emphasis" href="#cuti" id="cuti-link">Cuti</a>
        <a class="nav-item nav-link link-body-emphasis" href="#riwayat-gaji" id="riwayat-gaji-link">Riwayat Gaji</a>
    </nav>
</div>

<div id="profil-content">
    <h2>Profil Pengguna</h2>
    <form method="POST" action="/profilusersimpan">
        @csrf
        <div class="form-group">
            <label>NIK:</label>
            <input type="text" name="NIK" class="form-control" placeholder="Masukan NIK" required/>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <div class="form-control">{{$loggedInUserName }}</div>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required>
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="form-group">
            <label>Jabatan:</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" required/>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk:</label>
            <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="aktif" value="aktif" required>
                <label class="form-check-label" for="aktif">Aktif</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="tidak_aktif" value="tidak_aktif" required>
                <label class="form-check-label" for="tidak_aktif">Tidak Aktif</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Tanggal masuk</th>
                <th>Status</th>
                <th colspan='1'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtpegawai as $key => $item)
                @if($item->nama === $loggedInUserName)
                <tr>
                    <td>{{ $item->NIK}}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->jenis_kelamin}}</td>
                    <td>{{ $item->jabatan}}</td>
                    <td>{{ $item->tanggal_masuk}}</td>
                    <td>{{ $item->status}}</td>
                    <td><a href="/edit_profil/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a></td>
                          </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<div id="absensi-content">
    <div>
        <h2>Data Absen Masuk</h2>
        <form method="POST" action="/absenusersimpan">
            @csrf
            <div class="form-group">
                <label for="nama_pegawai">Nama Pegawai:</label>
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" value="{{ $loggedInUserName}}" readonly required/>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" readonly required>
            </div>
            <div class="form-group">
                <label for="waktu_masuk">Waktu Masuk</label>
                <input type="time" class="form-control" id="waktu_masuk" name="waktu_masuk" readonly required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtabsen as $key => $item)
                @if($item->nama_pegawai === $loggedInUserName)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->waktu_masuk }}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="absensi-content" class="d-none">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtabsen as $key => $item)
                @if($item->nama_pegawai === $loggedInUserName)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->waktu_masuk }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="/edit_absen/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/hapus_absen/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data absen ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    
    <a href="/tambah_absen" class="btn btn-primary" role="button">Tambah Data</a>
</div>


<div id="absen-keluar-content">
    <div>
        <h2>Data Absen Keluar</h2>
        <form method="POST" action="/absenkeluarusersimpan">
            @csrf
            <div class="form-group">
                <label for="nama_pegawai">Nama Pegawai:</label>
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" value="{{ $loggedInUserName }}" readonly required/>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" readonly required>
            </div>
            <div class="form-group">
                <label for="waktu_keluar">Waktu Keluar</label>
                <input type="time" class="form-control" id="waktu_keluar" name="waktu_keluar" readonly required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Waktu Keluar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtabsenkeluar as $key => $item)
                @if($item->nama_pegawai === $loggedInUserName)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->tanggal_keluar }}</td>
                    <td>{{ $item->waktu_keluar }}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="absen-keluar-content" class="d-none">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtabsenkeluar as $key => $item)
                @if($item->nama_pegawai === $loggedInUserName)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->tanggal_keluar }}</td>
                    <td>{{ $item->waktu_keluar }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="/edit_absenkeluar/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/hapus_absenkeluar/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data absen ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    
    <a href="/tambah_absen" class="btn btn-primary" role="button">Tambah Data</a>
</div>

<div id="cuti-content">
    <div>
        <h2>Data Cuti</h2>
        <form method="POST" action="/cutiusersimpan">
            @csrf
            <div class="form-group">
                <label for="NIK">NIK</label>
                <input type="text" class="form-control" id="NIK" name="NIK"  required>
            </div>
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $loggedInUserName }}" readonly required/>
            </div>
            <div class="form-group">
        <label>Tanggal pengajuan:</label>
        <input type="date" class="tgl_pengajuan" id="tgl_pengajuan" name="tgl_pengajuan" readonly required/>
    </div>

    <div class="form-group">
    <label>Lama cuti:</label>
    <input type="number" name="lama_cuti" id="lama_cuti" class="form-control" placeholder="Masukkan lama cuti (maksimal 2 bulan)" required min="1"/>
</div>


    <div class="form-group">
        <label>Tanggal awal cuti:</label>
        <input type="date" class="tgl_awal" name="tgl_awal" required/>
    </div>

    <div class="form-group">
        <label>Tanggal akhir cuti:</label>
        <input type="date" class="tgl_akhir" name="tgl_akhir" required/>
    </div>

    <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <select name="keterangan" id="keterangan" class="form-control" required>
                    <option value="" disabled selected>Pilih keterangan</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Melahirkan">Melahirkan</option>
                    <option value="Cuti Bersama">Cuti Bersama</option>
                    <option value="Alasan Penting">Alasan Penting</option>
                    <option value=">Di luar Tanggungan Negara">Di luar Tanggungan Negara</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Pengajuan</th>
                <th>Lama Cuti</th>
                <th>Tanggal Awal Cuti</th>
                <th>Tanggal AKhir Cuti</th>
                <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtcuti as $key => $item)
                @if($item->nama === $loggedInUserName)
                <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->NIK }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tgl_pengajuan }}</td>
                <td>{{ $item->lama_cuti }} hari</td>
                <td>{{ $item->tgl_awal }}</td>
                <td>{{ $item->tgl_akhir }}</td>
                <td>{{ $item->keterangan }}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="cuti-content" class="d-none">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal Pengajuan</th>
                <th>Lama Cuti</th>
                <th>Tanggal Awal Cuti</th>
                <th>Tanggal AKhir Cuti</th>
                <th>Keterangan</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dtcuti as $key => $item)
                @if($item->nama === $loggedInUserName)
                <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->NIK }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tgl_pengajuan }}</td>
                <td>{{ $item->lama_cuti }} </td>
                <td>{{ $item->tgl_awal }}</td>
                <td>{{ $item->tgl_akhir }}</td>
                <td>{{ $item->keterangan }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="/edit_cuti/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/hapus_cuti/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data cuti ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    
    <a href="/tambah_cuti" class="btn btn-primary" role="button">Tambah Data</a>
</div>


<!-- Riwayat Gaji content section -->

<div id="riwayat-gaji-content" class="d-none">
    <h2>Data Gaji</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Jumlah</th>
                <th>Tanggal Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $key => $item)
            @if($item->nama === $loggedInUserName)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nama_jabatan }}</td>
                    <td>Rp. {{ $item->jumlah }}</td>
                    <td>{{ $item->tanggal_pembayaran }}</td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
<script src="/js/blog.js"></script>
<script>
    // Function to hide all content sections
    function hideAllContent() {
    var contents = document.querySelectorAll('#profil-content, #absensi-content, #absen-keluar-content, #cuti-content, #info-jabatan-content, #riwayat-gaji-content');
    contents.forEach(function(content) {
        content.classList.add('d-none');
    });
}

    // Function to show selected content section
    function showContent(contentId) {
        hideAllContent(); // Hide all content sections first
        document.getElementById(contentId).classList.remove('d-none'); // Show selected content
    }

     // Show profil-content by default when DOM content is loaded
     document.addEventListener("DOMContentLoaded", function() {
        showContent('profil-content');
    });

    // Add event listeners to navbar links
    document.getElementById('profil-link').addEventListener('click', function(event) {
        event.preventDefault();
        showContent('profil-content');
    });

    document.getElementById('absensi-link').addEventListener('click', function(event) {
        event.preventDefault();
        showContent('absensi-content');
    });

    document.getElementById('absen-keluar-link').addEventListener('click', function(event) {
        event.preventDefault();
        showContent('absen-keluar-content');
    });

    document.getElementById('cuti-link').addEventListener('click', function(event) {
        event.preventDefault();
        showContent('cuti-content');
    });

    document.getElementById('riwayat-gaji-link').addEventListener('click', function(event) {
        event.preventDefault();
        showContent('riwayat-gaji-content');
    });

    var today = new Date().toISOString().split('T')[0];
        
        // Set the input value to today's date
        document.addEventListener('DOMContentLoaded', function() {
    // Set nilai input tanggal saat ini
    document.getElementById('tanggal').value = getCurrentDate();
    // Set nilai input waktu_masuk ke waktu saat ini
    document.getElementById('waktu_masuk').value = getCurrentTime();
    // Set nilai input tanggal_keluar saat ini
    document.getElementById('tanggal_keluar').value = getCurrentDate();
    // Set nilai input waktu_keluar ke waktu saat ini
    document.getElementById('waktu_keluar').value = getCurrentTime();
});

function getCurrentDate() {
    // Dapatkan tanggal saat ini dalam format YYYY-MM-DD
    var today = new Date().toISOString().slice(0, 10);
    return today;
}

function getCurrentTime() {
    // Dapatkan waktu saat ini dalam format HH:MM
    var currentTime = new Date().toLocaleTimeString('en-US', { hour12: false, hour: '2-digit', minute: '2-digit' });
    return currentTime;
}



// Panggil fungsi saat halaman dimuat
window.onload = setCurrentTime;

var today = new Date().toISOString().split('T')[0];
        
        // Set the input value to today's date
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('tgl_pengajuan').value = today;
        });

        document.getElementById("lama_cuti").addEventListener("input", function() {
        if (this.value > 60) {
            this.value = 60; // Jika lebih dari 60, atur nilainya menjadi 60
        }
    });

</script>

