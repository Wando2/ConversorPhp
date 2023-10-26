<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor KM/Anos-luz</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <section>
            <form action="conversor.php" method="post">
                <div>
                    <label for="km_to_ly">Kilômetros:</label>
                    <input type="number" name="km_to_ly" id="km_to_ly" placeholder="Entre aqui com um valor em KM"
                        required>
                </div>

                <input type="submit" value="Converter">
            </form>
            <div id="km_to_ly_result" class="resposta">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["km_to_ly"])) {
                    $kilometros = floatval($_POST["km_to_ly"]); 
                    if ($kilometros < 1) {
                        echo "<p>Valor invalido. Insira um numero >=1.</p>";
                    } else {
                        $anosLuz = $kilometros / 9.461e+12; 
                        echo "<p>$kilometros quilômetros equivalem a aproximadamente $anosLuz anos-luz.</p>";
                    }

                }
                ?>
            </div>
        </section>

        <section>
            <form action="conversor.php" method="post">
                <div>
                    <label for="ly_to_km">Anos-luz:</label>
                    <input type="number" name="ly_to_km" id="ly_to_km" placeholder="Entre aqui com um valor em anos-luz"
                        required>
                </div>

                <input type="submit" value="Converter">
            </form>
            <div id="ly_to_km_result" class="resposta">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ly_to_km"])) {
                    $anosLuz = floatval($_POST["ly_to_km"]); 
                    if ($anosLuz < 1) {
                        echo "<p>Valor inválido. Insira um número >= 1.</p>";
                    } else {
                        $quilometros = $anosLuz * 9.461e+12; 
                        echo "<p>$anosLuz anos-luz equivalem a aproximadamente $quilometros quilômetros.</p>";
                    }
                }
                ?>
            </div>
        </section>

    </main>
</body>

</html>