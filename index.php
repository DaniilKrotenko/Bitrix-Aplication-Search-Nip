<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1: Enter NIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="row domain-search bg-pblue" id="nipForm" method="post" action="/searchNipGus.php">
    <div class="container">
        <div class="row">
            <div class="col-md-12 top-cover center-block">
                <h2 class="form-title top-name center-block text-center mb-5">Dodaj firmę do Bitrixa za pomocą NIP</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>Wprowadź numer NIP firmy, którą chcesz dodać.</p>
            </div>
            <div class="col-md-9">
                <div class="input-group">
                    <input required type="search" class="form-control" name="nip" id="nip-input" aria-describedby="nipHelp" placeholder="Wprowadź NIP">
                    <span class="input-group-addon"><input type="submit" value="Szukaj" class="btn btn-primary"></span>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
