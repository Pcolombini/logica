<section class="input">
    <form action="" method="get">
        <label for="numero">Número:
            <input type="number" name="numero" id="numero">
        </label>
        <input type="submit" value="Calcular">
    </form>
    <?php
    $numero = $_GET['numero'];

    function dobro($numero)
    {
        if (is_string($numero)) {
            $num = intval($numero);
        }

        $dobro = $num * 2;

        return $dobro;
    }

    ?>
</section>