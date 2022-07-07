<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: white ">
    <header>
        @include('./components/Navbar')
        <main class="text-center py-5 mt-3">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea voluptates dignissimos incidunt
                            vero cum voluptate, odit vitae eos aliquam ad eum, porro nam mollitia atque recusandae
                            ipsam. Fuga blanditiis consequuntur, consectetur vitae neque autem aspernatur at, dolorem
                            voluptate facilis corrupti repudiandae! Nobis cum quod dignissimos dolorum! Blanditiis id
                            earum alias. Voluptatum nostrum ipsam accusamus quo, necessitatibus amet facere? Odit
                            accusamus iure dolorum eos possimus, repudiandae tempora, soluta delectus natus cupiditate
                            quae est eum, excepturi nemo eaque reprehenderit! Soluta deserunt veniam, praesentium,
                            dolores aut possimus illo veritatis inventore accusamus ipsam alias corrupti suscipit,
                            distinctio incidunt deleniti? Error suscipit obcaecati doloremque rem!</p>

                    </div>
                </div>
            </div>

        </main>

        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        @stack('script')
</body>

</html>