<?php
require_once './crest.php';

if (isset($_GET['data'])) {
    $data_encrypted = urldecode($_GET['data']);
    $dataType = isset($_GET['data']);
} else {
    echo '<p>Data = null</p>';
    exit;
}

$data_decoded = base64_decode($data_encrypted);
$data = json_decode($data_decoded, true);

if ($data !== null) {
    renderForm($data, $dataType);
} else {
    echo '<p>Invalid form data</p>';
    echo '<p>Data: ' . htmlspecialchars($data_encrypted) . '</p>';
}

function renderForm($data)
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>My web page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container bg-pblue result-nip">
        <div class="row">
            <div class="col-6">
                <?php
                if (isset($data['check'])){
                    echo "<h2 class='form-title'>Firma już jest na Bitrix!</h2>";
                } else {
                    echo "<h2 class='form-title'>Firma znaleziona!</h2>";
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="form-title">Poniżej możesz zmienić dane w polach i później dodać firmę do bitrix.</p>
            </div>
        </div>
        <form role="form" action="nipAddBitrix.php" method="post">
            <div class="row row-nip">
                <div class="col-10">
                    <h5 class="form-title">Nazwa Firmy</h5>
                    <input name="name" class="form-control" type="text" value="<?php echo htmlspecialchars($data['data']['name']); ?>">
                </div>
            </div>
            <div class="row row-nip">
                <div class="col-10">
                    <h5>Adres Firmy</h5>
                    <input name="address" class="form-control" type="text" value="<?php echo htmlspecialchars($data['data']['street']); ?>">
                </div>
            </div>
            <div class="row row-nip">
                <div class="col-6">
                    <h5>NIP</h5>
                    <input name="nip" class="form-control" type="text" value="<?php echo htmlspecialchars($data['data']['nip']); ?>">
                </div>
            </div>
            <div class="row btn-group-nip">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Potwierdzić</button>
                </div>
                <div class="col-9">
                    <a class="btn btn-primary" href="index.php">Wstecz</a>
                </div>
            </div>
        </form>
    </div>
    </body>
    </html>
    <?php
}
?>
