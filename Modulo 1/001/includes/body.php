<body>
    <?php include 'exercicio.php' ?>
    <header class="title">
        <h1>Funções para as 4 operações aritméticas</h1>
    </header>

    <article>
        <section class="ex">
            <p class="ex">
            Escreva uma função para cada uma das quatro operações matemáticas simples.
            </p>
            <hr>
            <p>
                <h2>Exercício de lógica de programação</h2>
                Escreva uma função para cada uma das quatro operações matemáticas simples:
                <div>
                <ul class="list">
                    <li>adição</li>
                    <li>subtração</li>
                    <li>multiplicação </li>
                    <li>dividisão</li>
                </ul>
                </div>
            </p>
        </section>
        
    </article>
    <main>
        <section class="form">
            <form action="" method="get">
                <legend>Operações aritiméticas</legend>
                <section class="imputs">
                    <label for="">Primeiro Número:
                        <input type="text" name="numeroUm" id="">
                    </label><br>
                    <label for="">Segundo Número:
                        <input type="text" name="numeroDois" id="">
                    </label><br>
                    <input type="submit" value="Calcular" class="btn">
                </section>
            </form>
        </section>
        <section class="resultado">
            <p>
                Adição  
                <?= $somar ?>
            </p>
            <p>
                Subtração  
                <?= $diminuir ?>
            </p>
            <p>
                Multiplicação  
                <?= $vezes ?>
            </p>
            <p>
                Divisão  
                <?= $dividir ?>
            </p>
        </section>
    </main>

