<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayePerGliAmici</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>

    <main>

        <div class="container text-center">
            <div class="row">
                <div class="col6">
                    <h1>Benvenuto {{ $nome }} {{ $cognome }}</h1>
                    <div class="">
                        <img class="centrale" src="https://as1.ftcdn.net/v2/jpg/03/97/99/86/1000_F_397998682_VVju5QL3HbumzZztaByVcBqKyODL4EYQ.jpg"
                            alt="">
                        <p class="fs-2">Per favore premi il pulsante</p>
                        <a type="button" class="btn btn-primary" href="1">
                                QUI Onii Chan
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>






    </main>

    <script src=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
