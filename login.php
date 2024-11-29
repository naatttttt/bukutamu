<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penjualan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center">form penjualan</h1>
        <div class="row mt-5">
        <div class="col-12 col-md-3">
            <?php include 'sidebar.php'; ?>
    </div>

    <div class="col-12 col-md-6">
                <form action="hitung_process.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingNama"> 
                        <label for="floatingNama">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                         <input type="number" class="form-control"  id="floatingJml">
                         <label for="floatingJml">Password</label>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>