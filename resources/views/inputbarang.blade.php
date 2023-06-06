<!DOCTYPE html>
<html>
<head>
    <title>Form Input Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Form Input Barang</h1>
        <form>
            <div class="form-group">
                <label for="nama">Nama Barang:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
