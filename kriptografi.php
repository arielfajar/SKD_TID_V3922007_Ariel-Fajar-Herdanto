<!DOCTYPE html>
<html>

<head>
    <title>Tugas Kriptografi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 200px;">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Enkripsi</h2>
                        <form action="" method="get">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="plaintext" placeholder="Masukkan teks untuk dienkripsi">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enkripsi</button>
                            </div>
                        </form>

                        <?php
                        if (isset($_GET["plaintext"])) {
                            $plaintext = $_GET["plaintext"];
                            $ciphertext = enkripsiData($plaintext);

                            echo "<h2 class='mt-4'>Hasil Enkripsi</h2>";
                            echo "Plaintext yang dienkripsi adalah ", $plaintext;
                            echo "<br>";
                            echo "Hasil enkripsi adalah ", $ciphertext;
                            echo "<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Dekripsi</h2>
                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="ciphertext" placeholder="Masukkan teks untuk didekripsi">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Dekripsi</button>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST["ciphertext"])) {
                            $ciphertext = $_POST["ciphertext"];
                            $plaintext = dekripsiData($ciphertext);

                            echo "<h2 class='mt-4'>Hasil Dekripsi</h2>";
                            echo "Ciphertext yang di-dekripsi adalah ", $ciphertext;
                            echo "<br>";
                            echo "Hasil dekripsi adalah ", $plaintext;
                            echo "<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    function enkripsiData($plaintext)
    {
        $key = array(
            'a' => '~', 'b' => '$', 'c' => '^', 'd' => '#', 'e' => '+',
            'f' => '!', 'g' => '%', 'h' => '_', 'i' => '=', 'j' => '*',
            'k' => 'P', 'l' => 'Q', 'm' => 'R', 'n' => 'S', 'o' => 'T' ,
            'p' => 'A', 'q' => 'B', 'r' => 'C', 's' => 'D', 't' => 'E',
            'u' => ')', 'v' => '(', 'w' => '{', 'x' => ',', 'y' => '`', 'z' => '"',
            '1' => 'F', '2' => 'G', '3' => 'H', '4' => 'I', '5' => 'J',
            '6' => 'U', '7' => 'V', '8' => 'W', '9' => 'X', '0' => 'Y'    
        );
        $ciphertext = str_replace(array_keys($key), $key, $plaintext);
        return $ciphertext;
    }

    function dekripsiData($ciphertext)
    {
        $key = array(
            '~' => 'a', '$' => 'b', '^' => 'c', '#' => 'd', '+' => 'e',
            '!' => 'f', '%' => 'g', '_' => 'h', '=' => 'i', '*' => 'j',
            'P' => 'k', 'Q' => 'l', 'R' => 'm', 'S' => 'n', 'T' => 'o' ,
            'A' => 'p', 'B' => 'q', 'C' => 'r', 'D' => 's', 'E' => 't',
            ')' => 'u', '(' => 'v', '{' => 'w', ',' => 'x', '`' => 'y', '"' => 'z',
            'F' => '1', 'G' => '2', 'H' => '3', 'I' => '4', 'K' => '5',
            'U' => '6', 'V' => '7', 'W' => '8', 'X' => '9', 'Y' => '0'
        );
        $plaintext = str_replace(array_keys($key), $key, $ciphertext);
        return $plaintext;
    }
    ?>

</body>

</html>