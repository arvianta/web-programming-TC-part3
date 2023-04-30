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
            color: #fff;
            padding: 20px;
        }
        
        h3, h1 {
            margin: 0;
            text-align: center;
        }
        
        nav {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        
        li {
            display: inline-block;
            margin-right: 20px;
        }
        
        li:last-child {
            margin-right: 0;
        }
        
        a {
            color: #333;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        
        a:hover {
            background-color: #ccc;
        }
        
        p {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            margin: 0 20px 20px;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMA Ganteng</h1>
    </header>

    <nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
</body>
</html>
