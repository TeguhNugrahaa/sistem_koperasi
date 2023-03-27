<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Registrasi Sistem Informasi Financial Planner</title>
</head>

<body>
    <main>
        <form action="./proses.php" method="post" enctype="multipart/form-data">
            <h1>Sign Up</h1>
            <div>
                <label for="name"> Nama :</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div>


                <div>
                    <label for="username">Username:</label>
                    <input type="email" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    <label for="pwd">Password confirmation :</label>
                    <input type="password" name="pwd" id="pwd">
                </div>

                <div>
                    <label>Level</label>
                    <select class="form-control" name="level">
                        <option value=""> - Pilih Level - </option>
                        <option value="administrator"> Administrator </option>
                        <option value="manajemen"> Manajemen </option>
                    </select>
                </div>


                <div>

                    <label for="foto">Foto</label>
                    <input type="file" name="foto">
                </div>

                <div>
                    <label for="agree">
                        <input type="checkbox" name="agree" id="agree" value="yes" /> I agree
                        with the
                        <a href="#" title="term of services">term of services</a>
                    </label>
                </div>
                <button type="submit" name="addregis">Register</button>
                <footer>Sudah Punya Akun? <a href="index.php">Silahkan masuk</a></footer>
        </form>
    </main>
</body>

</html>