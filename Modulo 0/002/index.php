<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O dobro de um número qualquer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mirza:wght@400;700&family=Roboto:wght@100;300;500;700&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="title">
        <h1>O dobro de um número qualquer</h1>
    </header>

    <article>
        <section class="ex">
            <p class="ex">
                <br>
                Faça uma função para calcular o dobro de um número qualquer.
                <br>
            </p>
        </section>
        <?php include 'exercicio.php' ?>
    </article>
    <main>
        <section class="resultado">
            <p>
                <?=dobro($numero)?>
            </p>
        </section>
    </main>

</body>

</html>