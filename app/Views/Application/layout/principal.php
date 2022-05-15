<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?></title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <?=$this->renderSection('estilos')?>
</head>

<body>
    <?php echo $this->include('application/layout/navbar'); ?>

    <div class="container-xxl bd-gutter mt-3 my-md-4 bd-layout">
        <?php echo $this->include('application/layout/sidebar'); ?>
        <?=$this->renderSection('contents')?>
    </div>

    <?php echo $this->include('application/layout/footer'); ?>    

    <script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>
    <script src="https://cdn.jsdelivr.net/npm/@stackblitz/sdk@1/bundles/sdk.umd.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <?=$this->renderSection('scripts')?>
</body>












</html>