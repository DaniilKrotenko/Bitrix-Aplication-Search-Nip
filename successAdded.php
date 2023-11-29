<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Thank You Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="vh-100 d-flex justify-content-center align-items-center bg-pblue domain-search">
    <div>
        <div class="mb-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg"  width="75" height="75"
                 fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
        </div>
        <div class="text-center form-title">
            <h1>Success !</h1>
            <p>Firma została pomyślnie dodana do Bitrix!</p>
            <a onclick="redirectToDetails()" class="btn btn-primary">Przejdź do firmy</a>
            <a href="index.php" class="btn btn-primary">Wstecz</a>
        </div>
    </div>
    <script>
        function redirectToDetails() {
            var companyId = <?php echo json_encode($_GET['id']); ?>;
            var redirectUrl = 'https://itrix-serwer.ddns.net/crm/company/details/' + companyId + '/';

            window.open(redirectUrl, '_blank');
        }
    </script>
</body>
</html>