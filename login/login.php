<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/21fc790d/ibm-sans.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/b89669df/ibm-serif.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/6b7e9946/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/a6791290/remixicon.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/9f1723ef/build/embeddables.min.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/711c50cf/css/variations/theme_apple.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/711c50cf/css/base.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/711c50cf/css/custom.css" />
<link rel="stylesheet" type="text/css" href="/limesurvey/tmp/assets/711c50cf/./css/survey-list.css" />
<link href="redirect.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 text-secondary shadow-lg" style="border-radius: 2rem; width:25rem;">
        <div class="d-flex justify-content-center">
            <img  src="data:image/png;base64,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" style="height: 7rem;">
        </div>
        <div class="text-center fs-1 fw-bold">Iniciar Sesión</div>
        <br>
        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem;">
                <span class="bg-white px-1"></span>
            </div>
        </div>
        <?php require ('redirect.php') ?>
        <a href=" <?php echo $client->createAuthUrl() ?> ">
        <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
            <img src="src/google_icon.jpeg" style="height: 1.6rem;">
            <div class="fw-bold text-secondary pt-1">Continar con Google</div>
        </div>
        </a>
        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem;">
                <span class="bg-white px-1"></span>
            </div>
        </div>
    </div>
</body>
</html>