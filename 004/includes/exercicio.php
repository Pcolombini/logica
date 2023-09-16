<section class="forms">

    <form action="" method="get">

        <section class="input">

            <label for="numero">Número qualquer:
                <input type="text" name="numero" id="numero">
            </label><br>

        </section>
        <section class="btn center">
            <input type="submit" value="Calcular" class="btn">
        </section>
    </form>
    
</section>

<?php 

$numero = intval($_GET['numero']);

function sucessor($numero)
{
    $sucessor = $numero + 1;
    $antecessor = $numero - 1;

    return "Sucessor: $sucessor<br> Antecessor: $antecessor";
}

$sucessor = sucessor($numero);
