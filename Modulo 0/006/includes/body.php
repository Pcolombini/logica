<?php include 'exercicio.php' ?>
<body>
    <header class="title">
        <h1>Descobrir os dias de 'n' meses</h1>
    </header>

    <article>
        <section class="ex">
            <p class="ex">
            Considerando que todos os meses tenham 30 dias, calcular o total de dias de n meses
            </p>
        </section>
        
    </article>
    <main>
        <section class="form">
            <form action="" method="get">
                <legend></legend>
                <label for="">Número de meses:
                    <input type="text" name="numero" id="numero" value="0">
                </label>
                <input type="submit" value="calcular">
                </form>
        </section>
        <section class="resultado">
            <p>
                <?= "Em $meses meses, tem $totalDias dias!"?>
            </p>
        </section>
    </main>

