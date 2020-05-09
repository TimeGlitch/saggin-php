<?=$this->layout?>
<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/#">Sagg.in</a>
        <ul class = "navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Discord!</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="discord/view/invitelist"> All People!</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">My Minecraft Shanngins</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/mc/econ/rich">Top Richest!</a>
                    <a class="dropdown-item" href="mc/view/players">All Players</a>
                    <a class="dropdown-item" href="mc/view/shops">All Shops</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page/view/contact">Contact</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="page/view/about">About</a>
            </li>
        </ul>
    </nav>
<?=$this->section('content')?>

</body>
<footer>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</footer>
</html>
