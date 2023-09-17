<section>

    <p>
        Digite 3 valores inteiros para calcular a média aritmética!
    </p>

    <form action="" method="get">

        <section class="input">

            <label for="valor1">Valor1:
                <input type="text" name="valor1" id="valor1">
                <?php $valor1 = intval($_GET['valor1']) ?>
                <?=$valor1?><br>
            </label>

            <label for="valor2">Valor1:
                <input type="text" name="valor2" id="valor2">
                <?php $valor2 = intval($_GET['valor2']) ?>
                <?=$valor2?><br>
            </label>

            <label for="valor3">Valor3:
                <input type="text" name="valor3" id="valor3">
                <?php $valor3 = intval($_GET['valor3']) ?>
                <?=$valor3?><br>
            </label>

            <section class="btn center">

                <input type="submit" value="calcular" class="btn">

            </section>

        </section>

    </form>

</section>

<?php 

function media($valor1, $valor2, $valor3)
{
    $media = ($valor1 + $valor2 + $valor3) / 3;

    return $media;
}

$media = media($valor1, $valor2, $valor3);
