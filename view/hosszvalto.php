<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Hosszvalto</title>
</head>

<body>
    <div class="d-flex flex-column mt-3">
                   <a href="/projektek/06_Mertekegysegvalto" class="btn btn-secondary">Vissza a főoldalra</a>
               </div>
    <div class="container mt-5 d-flex justify-content-center">

    <!-- link a fomenure -->


        <div class="card" style="width: 28rem;">
            <div class="card-body">
                <h1 class="card-title mb-3">Hosszvalto</h1>
                <form action="">

                <!-- milyen mennyseg hossz tomeg tergogat -->

                <!-- lista, amiben kivalasztod hogy melyiket akarod -->

                    <!-- Mennyit -->
                    <div class="mt-3 d-flex align-items-center">
                        <label for="mennyit" class="form-label m-0">Mennyi: </label>
                        <input type="number" class="form-control ms-2" name="mennyit" id="mennyit" value="<?php echo $mennyit ?>">
                    </div>
                    <!-- Miről -->
                    <div class="mt-2 d-flex align-items-center">
                        <label for="mirol" class="form-label m-0">Miről:</label>
                        <select class="form-select ms-2" aria-label="Default select example" id="mirol" name="mirol">
                            <?php foreach ($hosszok as $hossz) { ?>
                                <option
                                    value="<?php echo $hossz['id'] ?>"
                                    <?php echo ($mirol === $hossz['id'] ? "selected" : "") ?>>
                                    <?php echo $hossz['id'] ?>

                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- Mire -->
                    <div class="mt-2 d-flex align-items-center">
                        <label for="mire" class="form-label m-0">Mire:</label>
                        <select class="form-select ms-2" aria-label="Default select example" id="mire" name="mire">
                            <?php foreach ($hosszok as $hossz) { ?>
                                <option
                                    value="<?php echo $hossz['id'] ?>"
                                    <?php echo ($mire === $hossz['id'] ? "selected" : "") ?>>
                                    <?php echo $hossz['id'] ?>
                                </option>
                            <?php } //end for 
                            ?>
                        </select>
                    </div>

                    <!-- Kiszámol gomb -->
                    <div class="d-flex flex-column">
                        <button type="sumbit" class="btn btn-primary mt-3">Kiszámol</button>
                    </div>
                </form>

                <h5 class="mt-3"><?php
                echo number_format($mennyit, 2, ',', ' ') . " " . $mirol . " = " .
                    number_format($vegeredmeny, 3, ',', ' ') . " " . $mire
                ?> </h5>
            </div>
            
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>