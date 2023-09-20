<form action="" method="get">
    <fieldset>
        <legend>Área quadrada</legend>
        <section class="input">
            <label for="altura">Altura: 
                <input type="text" name="altura" id="altura"> </label>
            <label for="largura">Largura: 
                <input type="text" name="lado" id="lado">
            </label>
        </section>
    </fieldset>
    <section class="btn">
        <input type="submit" value="Calcular" class="btn">
    </section>
</form>

<?php 
    $altura = intval($_GET['altura']);
    $lado = intval($_GET['lado']);
    function areaQuadrada($altura, $lado)
    {
        return  $altura * $lado;
    }
    $area = areaQuadrada($altura, $lado);
?>
