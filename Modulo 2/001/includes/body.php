<body>
    <header class="title">
        <h1>Valor par ou ímpar</h1>
    </header>

    <article>
        <section class="ex">
            <p class="ex">
            <p>
                Exercício de lógica de programação para descobrir se um número é par ou ímpar.
            </p>
            <hr style="margin-bottom: 16px;">
            <p>
                Crie uma função que descubra se um valor é par ou ímpar. <br>
            </p>
            <p>
                Neste exercício nós utilizarmos o operador módulo %. <br>
            </p>
            <p>
                A operação módulo encontra o resto da divisão de um número por outro.<br>
            </p>
            <p>
                Dados dois números a (o dividendo) e b o divisor, a modulo b (a mod b) é o resto da divisão de a por b.<br>
            </p>
            <p>
                Por exemplo, 7 mod 3 seria 1, enquanto 9 mod 3 seria 0.<br>
            </p>
            <p>
                Portanto sua função deve…
            <section class="list">
                <ul>
                    <li>
                        retornar 1 ou mais caso negativo (é ímpar) e
                    </li>
                    <li>
                        retornar 0 caso positivo (é par)
                    </li>
                </ul>
            </section>
            </p>
            </p>
        </section>

    </article>
    <main>
        <section class="form">
            <form action="" method="post">
                <input type="text" name="numero" id="numero">
                <input type="submit" value="Enviar">
        </form>
        </section>
    <?php include 'exercicio.php' ?>
        <section class="resultado">
            <p>
                <?= $impar ?>
            </p>
        </section>
    </main>