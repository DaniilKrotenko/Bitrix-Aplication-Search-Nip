<?php
session_start();
$_SESSION['auth_id'] = $_REQUEST['AUTH_ID'];
$_SESSION['domain'] = $_REQUEST['DOMAIN'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1: Enter NIP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form id="nipForm">
        <div class="form-group pb-5">
            <label for="nip-input">NIP number</label>
            <input type="text" class="form-control" name="nip" id="nip-input" aria-describedby="nipHelp" placeholder="Enter NIP">
        </div>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
    </form>
</div>
<script>
    function submitForm() {
        var nipValue = $('#nip-input').val();

        $.ajax({
            type: "POST",
            url: "searchNip.php",
            data: { nip: nipValue, auth_id: '<?php echo $_REQUEST['AUTH_ID'] ?>', domain: '<?php echo $_REQUEST['DOMAIN'] ?>' },
            success: function (response) {
                response = JSON.parse(response);

                if (response.success) {
                    // Redirects to the confirmation page
                    window.location.href = 'nipSuccessSearched.php?data=' + encodeURIComponent(response.data);
                } else {
                    // Error handling
                    console.error('Error:', response.error);
                }
            },
            error: function (error) {
                // Error handling
                console.error('Error:', error);
            }
        });
    }
</script>
</body>
</html>
