<?php
session_start();
if (isset($_GET['data'])) {
    $data_encrypted = urldecode($_GET['data']);

    $data_decoded = base64_decode($data_encrypted);

    $data = json_decode($data_decoded, true);

    if ($data !== null) {
        renderForm($data);
    } else {
        echo '<p>Invalid form data</p>';
        echo '<p>Data: ' . htmlspecialchars($_GET['data']) . '</p>';
    }
} else {
    echo '<p>Data = null</p>';
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
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5>Firma znaleziona!</h5>
                <p>Poniżej możesz zmienić dane w polach i później dodać firmę do bitrix.</p>
            </div>
        </div>
        <form role="form" action="nipAddBitrix.php" method="post">
            <div class="row">
                <div class="col-10">
                    <h5>Nazwa Firmy</h5>
                    <input name="name" class="form-control" type="text" value="<?php echo htmlspecialchars($data['allData']['name']); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <h5>Adres Firmy</h5>
                    <input name="address" class="form-control" type="text" value="<?php echo htmlspecialchars($data['allData']['street'].', '.$data['allData']['postCode'].' '.$data['allData']['city']); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>NIP</h5>
                    <input name="nip" class="form-control" type="text" value="<?php echo htmlspecialchars($data['allData']['nip']); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>REGON</h5>
                    <input name="regon" class="form-control" type="text" value="<?php echo htmlspecialchars($data['allData']['regon']); ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <button class="btn btn-primary" onclick="window.history.back()">Go back</button>
    </body>
    </html>
    <?php
}
?>
