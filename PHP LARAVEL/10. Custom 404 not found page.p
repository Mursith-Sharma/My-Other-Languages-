website il ivvaru unwanted link access pannal 404 page varum. athai naam eppadi custom design pannuvatu
go to this path  -->>   resources/views/errors/   , create -> 404.blade.php
like this -->>   resources/views/errors/404.blade.php
upload your custom code ---------------------------------------------------------------------------------------------------------------------------------------------------->>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body >
    <div class="container-fluid bg-secondary">
       
        <div class="d-flex flex-column   justify-content-center align-items-center vh-100">
            <div class="text-light">
                <h1 class="fw-bold text-center text-dark">404</h1>
                <h1>Sorry Page Does not Exist!</h1>
                <p class="fs-3">Please check the url</p>
            </div>
            <div>
                <a class="text-dark fw-bold" href="/">Go to Home Page</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

now type any url -->> http://127.0.0.1:8000/index/abcd1234
after work agum .
ithu evvaru work aagirathu?? naamthan ethaium link pannavillaiye ??------------>>>>>>>
/127.0.0.1:8000/index/abcd1234    <<<<---------    இந்த URL-க்கு எந்த route match ஆகவில்லையென்றால்
அது resources/views/errors/404.blade.php page-ஐ load பண்ணும். athaavathu errors il enna file irukkiratho athai load pannum.

