
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Encontrar pessoas</title>
</head>
<body class="bg-dark">

<div class="container mt-5">
    <h2 class="mb-4 text-light text-center">Eles estão com a gente!</h2>

    <div class="row p-5">
        <php 
        for(i=0; i<user.length; i++){
            echo "
           <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php
                    echo "<pre>";
                    print_r($users);
                    echo "
                    </pre>";
                    ?>
                    </h5>
                    <p class="card-text">Aqui vai alguma bio ou algo assim</p>
                    <a href="#" class="btn btn-primary">Ver mais</a>
                </div>
            </div>
        </div> 
        "
        }
        
        ?>


    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
