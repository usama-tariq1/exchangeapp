<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/a9a7f52753.js"></script>

    <!-- simple bar -->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@5.1.0/dist/simplebar.css" />

    <meta name="mobile-web-app-capable" content="yes">






    <title>Exchange </title>
    <link rel="shortcut icon" href="assets/icons/titlelogo.png" />


    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/welcome.css">
    <link rel="stylesheet" href="/assets/css/signin-signup.css">
    <link rel="stylesheet" href="/assets/css/dock.css">
    <link rel="stylesheet" href="/assets/css/functionpage.css">
    <link rel="manifest" href="/assets/js/manifest.json">
    <script src="/assets/js/app.js"> </script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"> </script>


</head>

<body>

    <script src="https://unpkg.com/simplebar@5.1.0/dist/simplebar.min.js"></script>
    <script src="https://unpkg.com/pulltorefreshjs@0.1.20/dist/index.umd.js"></script>





    <div class="cover"><img src="assets/images/backdrop2.png" class="img"></div>
    <div class="main">


        <div class="contentbox" id="contentbox" data-simplebar>

            {block content}
            {/block}
        </div>

    </div>
    <script>
        // PullToRefresh.init({
        //     mainElement: '#feeds',
        //     onRefresh: function() {
        //         loadpage('feeds.php');
        //     }
        // });

        if ('serviceWorker' in navigator) {
            console.log("Will the service worker register?");
            navigator.serviceWorker.register('/assets/js/service-worker.js')
                .then(function(reg) {
                    console.log("Yes, it did.");
                }).catch(function(err) {
                    console.log("No it didn't. This happened:", err)
                });
        }
    </script>
</body>

</html>