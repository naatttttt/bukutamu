<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Data Buku Tamu</h1>
        <div class="row mt-5">
            <?php
                // DB Definition
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $db_name = 'buku_tamu';  // Corrected database name

                // Connecting to DB
                $conn = new mysqli($servername, $username, $password, $db_name);

                // Check connection
                if ($conn->connect_error) {
                    die('Connection failed: ' . $conn->connect_error);
                }

                // SQL query to fetch data
                $sql = "SELECT * FROM buku_tamu";
                $result = $conn->query($sql);

               // Check if there are results and output them
               if ($result->num_rows > 0) {
                echo '<table class="table table-bordered">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col">#</th>';
                echo '<th scope="col">Nama</th>';
                echo '<th scope="col">Isi Pesan</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                $count = 1; // Counter for row numbering
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<th scope="row">' . $count++ . '</th>';
                    echo '<td>' . htmlspecialchars($row['Nama']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['Isi']) . '</td>';
                    echo '</tr>';
                }
                
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p class="text-muted">No results found.</p>';
            }

                // Close the connection
                $conn->close();
                include 'login.php';
            ?>
        </div>
    </div>
</body>
</html>