<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "datawebsite");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


// Registrasi

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username apakah sudah terdaftar
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if ( mysqli_fetch_assoc($result) ) {
        echo "<script>
            alert('Username tersebut sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('Kofirmasi Password Tidak Sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
        
}


function upload() {

    $namaFile = $_FILES['image']['name'];
    $ukuranFile = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ( $error === 4 ) {
        echo "<script>
                alert('Pastikan Anda sudah memasukan gambar!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Ekstensi gambar yang Anda masukan tidak sesuai!'); 
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if ( $ukuranFile > 5000000 ) {
        echo "<script>
                alert('Ukuran gambar melebihi batas maximum!');
            </script>";
        return false;
    }

    // Upload gambar
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'photo/' . $namaFile);

    return $namaFile;

}


// Pengurus/Anggota

// PKS
function addppks($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pengurus_pks VALUES ('', '$nama', '$jabatan', '$no_hp', '$alamat', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteppks($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pengurus_pks WHERE id_pgrs = $id");
    return mysqli_affected_rows($conn);
}

function updateppks($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE pengurus_pks SET
                nama = '$nama',
                jabatan = '$jabatan',
                no_hp = '$no_hp',
                alamat = '$alamat',
                image = '$image'
              Where id_pgrs = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// KKR
function addpkkr($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pengurus_kkr VALUES ('', '$nama', '$jabatan', '$no_hp', '$alamat', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletepkkr($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pengurus_kkr WHERE id_pgrs = $id");
    return mysqli_affected_rows($conn);
}

function updatepkkr($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE pengurus_kkr SET
                nama = '$nama',
                jabatan = '$jabatan',
                no_hp = '$no_hp',
                alamat = '$alamat',
                image = '$image'
              Where id_pgrs = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// PRAMUKA
function addppra($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pengurus_pramuka VALUES ('', '$nama', '$jabatan', '$no_hp', '$alamat', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteppra($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pengurus_pramuka WHERE id_pgrs = $id");
    return mysqli_affected_rows($conn);
}

function updateppra($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE pengurus_pramuka SET
                nama = '$nama',
                jabatan = '$jabatan',
                no_hp = '$no_hp',
                alamat = '$alamat',
                image = '$image'
              Where id_pgrs = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Jadwal Kegiatan

// PKS
function addjpks($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $pembimbing = htmlspecialchars($data["pembimbing"]);


    // query insert data
    $query = "INSERT INTO jadwal_pks VALUES ('', '$nama_kegiatan', '$hari', '$jam', '$tempat', '$pembimbing')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletejpks($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM jadwal_pks WHERE id_keg = $id");
    return mysqli_affected_rows($conn);
}

function updatejpks($data) {
    global $conn;

    $id = $data["id"];
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $pembimbing = htmlspecialchars($data["pembimbing"]);

    $query = "UPDATE jadwal_pks SET
                nama_kegiatan = '$nama_kegiatan',
                hari = '$hari',
                jam = '$jam',
                tempat = '$tempat',
                pembimbing = '$pembimbing'
              Where id_keg = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// KKR
function addjkkr($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $pembimbing = htmlspecialchars($data["pembimbing"]);


    // query insert data
    $query = "INSERT INTO jadwal_kkr VALUES ('', '$nama_kegiatan', '$hari', '$jam', '$tempat', '$pembimbing')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletejkkr($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM jadwal_kkr WHERE id_keg = $id");
    return mysqli_affected_rows($conn);
}

function updatejkkr($data) {
    global $conn;

    $id = $data["id"];
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $pembimbing = htmlspecialchars($data["pembimbing"]);

    $query = "UPDATE jadwal_kkr SET
                nama_kegiatan = '$nama_kegiatan',
                hari = '$hari',
                jam = '$jam',
                tempat = '$tempat',
                pembimbing = '$pembimbing'
              Where id_keg = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// PRAMUKA
function addjpra($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $pembimbing = htmlspecialchars($data["pembimbing"]);


    // query insert data
    $query = "INSERT INTO jadwal_pramuka VALUES ('', '$nama_kegiatan', '$hari', '$jam', '$tempat', '$pembimbing')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletejpra($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM jadwal_pramuka WHERE id_keg = $id");
    return mysqli_affected_rows($conn);
}

function updatejpra($data) {
    global $conn;

    $id = $data["id"];
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $hari = htmlspecialchars($data["hari"]);
    $jam = htmlspecialchars($data["jam"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $pembimbing = htmlspecialchars($data["pembimbing"]);

    $query = "UPDATE jadwal_pramuka SET
                nama_kegiatan = '$nama_kegiatan',
                hari = '$hari',
                jam = '$jam',
                tempat = '$tempat',
                pembimbing = '$pembimbing'
              Where id_keg = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Pembimbing

// PKS
function addpempks($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pembimbing_pks VALUES ('', '$nama', '$alamat', '$no_hp', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletepempks($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pembimbing_pks WHERE id_pemb = $id");
    return mysqli_affected_rows($conn);
}

function updatepempks($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE pembimbing_pks SET
                nama = '$nama',
                alamat = '$alamat',
                no_hp = '$no_hp',
                image = '$image'
              Where id_pemb = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// KKR
function addpemkkr($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pembimbing_kkr VALUES ('', '$nama', '$alamat', '$no_hp', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletepemkkr($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pembimbing_kkr WHERE id_pemb = $id");
    return mysqli_affected_rows($conn);
}

function updatepemkkr($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE pembimbing_kkr SET
                nama = '$nama',
                alamat = '$alamat',
                no_hp = '$no_hp',
                image = '$image'
              Where id_pemb = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// PRAMUKA
function addpempra($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pembimbing_pramuka VALUES ('', '$nama', '$alamat', '$no_hp', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletepempra($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pembimbing_pramuka WHERE id_pemb = $id");
    return mysqli_affected_rows($conn);
}

function updatepempra($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE pembimbing_pramuka SET
                nama = '$nama',
                alamat = '$alamat',
                no_hp = '$no_hp',
                image = '$image'
              Where id_pemb = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Event

// PKS
function addepks($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO event_pks VALUES ('', '$judul', '$isi', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteepks($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM event_pks WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function updateepks($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE event_pks SET
                judul = '$judul',
                isi = '$isi',
                image = '$image'
              Where id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// KKR
function addekkr($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO event_kkr VALUES ('', '$judul', '$isi', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteekkr($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM event_kkr WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function updateekkr($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE event_kkr SET
                judul = '$judul',
                isi = '$isi',
                image = '$image'
              Where id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// PRAMUKA
function addepra($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);

    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO event_pramuka VALUES ('', '$judul', '$isi', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteepra($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM event_pramuka WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function updateepra($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE event_pramuka SET
                judul = '$judul',
                isi = '$isi',
                image = '$image'
              Where id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Prestasi

// PKS
function addprespks($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $prestasi = htmlspecialchars($data["prestasi"]);
    $tingkat = htmlspecialchars($data["tingkat"]);
    $juara = htmlspecialchars($data["juara"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    // Upload gambar
    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO prestasi_pks VALUES ('', '$prestasi', '$tingkat', '$juara', '$deskripsi', '$tanggal', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteprespks($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM prestasi_pks WHERE id_pres = $id");
    return mysqli_affected_rows($conn);
}

function updateprespks($data) {
    global $conn;

    $id = $data["id"];
    $prestasi = htmlspecialchars($data["prestasi"]);
    $tingkat = htmlspecialchars($data["tingkat"]);
    $juara = htmlspecialchars($data["juara"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE prestasi_pks SET
                prestasi = '$prestasi',
                tingkat = '$tingkat',
                juara = '$juara',
                deskripsi = '$deskripsi',
                tanggal = '$tanggal',
                image = '$image'
              Where id_pres = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// KKR
function addpreskkr($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $prestasi = htmlspecialchars($data["prestasi"]);
    $tingkat = htmlspecialchars($data["tingkat"]);
    $juara = htmlspecialchars($data["juara"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    // Upload gambar
    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO prestasi_kkr VALUES ('', '$prestasi', '$tingkat', '$juara', '$deskripsi', '$tanggal', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletepreskkr($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM prestasi_kkr WHERE id_pres = $id");
    return mysqli_affected_rows($conn);
}

function updatepreskkr($data) {
    global $conn;

    $id = $data["id"];
    $prestasi = htmlspecialchars($data["prestasi"]);
    $tingkat = htmlspecialchars($data["tingkat"]);
    $juara = htmlspecialchars($data["juara"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE prestasi_kkr SET
                prestasi = '$prestasi',
                tingkat = '$tingkat',
                juara = '$juara',
                deskripsi = '$deskripsi',
                tanggal = '$tanggal',
                image = '$image'
              Where id_pres = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// PRAMUKA
function addprespra($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    $prestasi = htmlspecialchars($data["prestasi"]);
    $tingkat = htmlspecialchars($data["tingkat"]);
    $juara = htmlspecialchars($data["juara"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    // Upload gambar
    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO prestasi_pramuka VALUES ('', '$prestasi', '$tingkat', '$juara', '$deskripsi', '$tanggal', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteprespra($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM prestasi_pramuka WHERE id_pres = $id");
    return mysqli_affected_rows($conn);
}

function updateprespra($data) {
    global $conn;

    $id = $data["id"];
    $prestasi = htmlspecialchars($data["prestasi"]);
    $tingkat = htmlspecialchars($data["tingkat"]);
    $juara = htmlspecialchars($data["juara"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE prestasi_pramuka SET
                prestasi = '$prestasi',
                tingkat = '$tingkat',
                juara = '$juara',
                deskripsi = '$deskripsi',
                tanggal = '$tanggal',
                image = '$image'
              Where id_pres = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Galeri

// PKS
function addgpks($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    // Upload gambar
    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO galeri_pks VALUES ('', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletegpks($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM galeri_pks WHERE id_glri = $id");
    return mysqli_affected_rows($conn);
}

function updategpks($data) {
    global $conn;

    $id = $data["id"];
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE galeri_pks SET
                image = '$image'
              Where id_glri = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// KKR
function addgkkr($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    // Upload gambar
    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO galeri_kkr VALUES ('', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletegkkr($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM galeri_kkr WHERE id_glri = $id");
    return mysqli_affected_rows($conn);
}

function updategkkr($data) {
    global $conn;

    $id = $data["id"];
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE galeri_kkr SET
                image = '$image'
              Where id_glri = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// PRAMUKA
function addgpra($data) {
    global $conn;
    // ambil data dari tiap elemen dalam form
    // Upload gambar
    $image = upload();
    if ( !$image ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO galeri_pramuka VALUES ('', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deletegpra($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM galeri_pramuka WHERE id_glri = $id");
    return mysqli_affected_rows($conn);
}

function updategpra($data) {
    global $conn;

    $id = $data["id"];
    $oldimage = htmlspecialchars($data["oldimage"]);

    if ( $_FILES['image']['error'] === 4 ) {
        $image = $oldimage;
    } else {
        $image = upload();
    }

    $query = "UPDATE galeri_pramuka SET
                image = '$image'
              Where id_glri = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>