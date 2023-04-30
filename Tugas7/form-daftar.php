<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h3 {
            margin: 0;
        }

        form {
            border: 1px solid #ccc;
            margin: 20px auto;
            padding: 20px;
            max-width: 600px;
        }

        fieldset {
            border: none;
            padding: 0;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], textarea, select {
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

    </style>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama lengkap" required />
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" required></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Atheis">Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" required />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>

</body>
</html>
