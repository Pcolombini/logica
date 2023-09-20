<body>
    <header class="title">
        <h1>Juros simples</h1>
    </header>

    <article>
        <section class="ex">
            <p class="ex">
            Exercício de lógica de programação para calcular o juros simples.
            </p>
            <hr style="margin-bottom: 22px;" >
            <p>
                <h2>Exercício de lógica de programação</h2>
                <p>
                Faça um programa para calcular o juros simples segundo a fórmula abaixo.
                </p>
                <p style="border: 1px solid black;font-weight: 700px;margin-bottom: 8px;">
                J = C.i.n
                </p>
                <p style="border: 1px solid black;font-weight: 700px;">
                J = juros,<br>
                C = capital,<br>
                i = taxa de empréstimo<br>
                n = períodos<br>
                </p>
                <p>
                Vamos imaginar o seguinte cenário: um empréstimo de R$ 16.000,00 sobre a taxa de 4% durante 4 meses.
                </p>
            </p>
        </section>
        
    </article>
    <main>
        <section class="form">
            <form action="" method="post">
                <p>
                    Informe o valor pretendido e o prazo do empréstimo.
                </p>
                <center>
                <label for="">Valor: 
                    <input type="text" name="valor" id="valor">
                </label>
                <select name="meses" id="meses">
                    <option value="">Quantos meses</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <input type="submit" value="Simular" class="btn" style="margin-top: 8px;">
                </center>
            </form>
        </section>
        <section class="resultado">
            <p style="font-weight: 700;">
                <?php include 'exercicio.php' ?>
            </p>
        </section>
    </main>

