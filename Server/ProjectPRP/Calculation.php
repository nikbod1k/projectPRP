<?php
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/calculation.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
<header>
    <?php require "header.php";?>
</header>
<main role="main">
    <div class="container">
<div class="card mt-5 ">
    <h5 class="card-header">ЗВО</h5>
    <div class="card-body">
        <h5 class="card-title">Оберіть ЗВО із запропонованого списку</h5>
        <div class="input-group mb-3">
            <input class="select" type="text" name="city" list="inputGroupSelect01">
            <datalist class="select" id="inputGroupSelect01">
                <!--  ЦИКЛЫ  -->
                <option value="dtgj"></option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="33"></option>
            </datalist>
            <div class="input-group-append">
                <input type="button" class="input-group-text" for="inputGroupSelect02" value="Обрати"/>
            </div>
        </div>
    </div>
</div>
<div class="card mt-5">
    <h5 class="card-header">Спеціальності</h5>
    <div class="card-body">
        <h5 class="card-title">Оберіть спеціальність із запропонованого списку</h5>
        <div class="input-group mb-3">
            <input class="select" type="text" name="city" list="inputGroupSelect02">
            <datalist class="select" id="inputGroupSelect02">
                <!--  ЦИКЛЫ  -->
                <option value="dtgj"></option>
                <option value="111"></option>
                <option value="02"></option>
                <option value="3"></option>
                <option value="303"></option>
            </datalist>
            <div class="input-group-append">
                <input type="button" class="input-group-text" for="inputGroupSelect02" value="Обрати"/>
            </div>
        </div>
    </div>
</div>
        <div class="card mt-5 mb-5">
            <h5 class="card-header">Ваші бали ЗНО</h5>
            <div class="card-body">
                <h5 class="card-title">Предмети для розрахунку</h5>
                <div class="row">
                    <div class="col">
                        <label>srtgdsr</label>
                    </div>
                    <div class="col">
                        <p>100</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>srtgdsr</label>
                    </div>
                    <div class="col">
                        <p>100</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>srtgdsr</label>
                    </div>
                    <div class="col">
                        <p>100</p>
                    </div>
                </div>
                <input type="button" id="btn" class="btn btn-primary" value="Розрахувати вірогідність" />
            </div>
        </div>
    </div>

</main>
    <footer>
        <?php require "footer.php";?>
    </footer>
</body>

</html>