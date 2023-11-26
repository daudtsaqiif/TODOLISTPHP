
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<!-- GET DATA -->
<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabeltodo` WHERE `ID`= '$id'");
$data = mysqli_fetch_array($sql);
?>

<body class="bg-success-subtle" >
    <div class="up">
    <form action="update.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-6">
                <h2 class="text-center text-warning font-monospace ">UPDATE YOUR ACTIVITY!</h2>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['List'] ?>" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></button>
                    <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
                </div>
            </div>
        </div>
    </form> 
    </div>

    <nav class="navbar bg-body-tertiary py-3">
        <div class="container-fluid">
            <a class="navbar-band" href="#">
                <h1 class="d-inline-block align-text-top " style="color: red;" >Our Activity </h1>
            </a>
        </div>
    </nav>

    

    <!-- Get data from localhost -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT `ID`, `List` FROM `tabeltodo`");

    $i = 1;
    ?>
    <!-- Tampilkan data -->
    <div class="container">

    <form id="isi" action="insert.php" method="post">
        <div class="container contents">
            <div class="row justify-content-center bg-white m-auto shadow mt-3 py-3 col-md-9">
                <h2 class="text-center text-warning font-monospace " id="inputList">ADD LIST</h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow" placeholder="Write down the activities you want to do...">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <h2 class="to">TODO LIST</h2>

        <div class="warapper">
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <div class="box">
                            <div class="nomor"><?php echo $i++ ?></div>
                            <div class="act"><?php echo $row['List'] ?></div>
                            <div class="button">
                                <div class="update"><a href="halaman-update.php? ID=<?php echo $row['ID'] ?>" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square fa-beat-fade"></i>UPDATE?</a></div>
                                <div class="delete"><a href="delete.php? ID=<?php echo $row['ID'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can fa-bounce"></i></i>DELETE?</a></div>
                            </div>
                            <marquee class="smngt" behavior="" direction="right">don't forget to do it!</marquee>
                            </div>
                    <?php
                    }
                    ?>
        </div>
                </div>
    <marquee class="blink" behavior="scrool" scrollamout="30" direction="right">KEEP SPIRIT!! KEEP SPIRIT!! KEEP SPIRIT!! KEEP SPIRIT!! KEEP SPIRIT!! KEEP SPIRIT!! </marquee>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
