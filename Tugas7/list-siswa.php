<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: white;
            padding: 20px;
        }
        
        h1, h3 {
            margin: 0;
            text-align: center;
        }
        
        nav {
            background-color: #f2f2f2;
            padding: 10px;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .button {
            display: inline-block;
            padding: 8px 16px;
            margin-bottom: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php" class="button">Tambah Baru</a>
    </nav>

    <br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$siswa['id']."' class='button'>Edit</a>";
                echo "<a href='hapus.php?id=".$siswa['id']."' class='button' style='background-color: #f44336;'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p style="text-align: center;">Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
