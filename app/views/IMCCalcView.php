<?php

    //======================================================================
    // Classe responsável por criar a interface da calculadora
    //======================================================================

    class IMCCalcView {

        /* Função responsável por criar e apresentar a interface */
        public function mostrar_calculadora() {
            echo '<!DOCTYPE html>';
            echo '<html lang="pt-br">';
            echo '<head>';
            echo '<meta charset="utf-8">';
            echo '<title>IMC</title>';
            echo '<link href="app/css/styles.css" rel="stylesheet">';
            echo '<link rel="shortcut icon" href="app/favicon.ico" />';
            echo '</head>';
            echo '<body>';
            echo '<div class="container">';
            echo '<div class="content">';
            echo '<p>Faça o cálculo de seu Índice de Massa Corporal (<b>IMC</b>) aqui</p>';
            echo '<form method="post" action="app/controllers/IMCController.php">';
            echo '<label for="peso">PESO* (kg)</label>';
            echo '<input type="number" style="text-align: center" step="0.01" name="peso" maxlength="11" placeholder="Seu peso em kilogramas ..." required />';
            echo '<label for="altura">ALTURA* (m)</label>';
            echo '<input type="number"  style="text-align: center" step="0.01" name="altura" maxlength="11" placeholder="Sua altura em metros ..." required />';
            echo '<button class="btn" type="submit">Calcular</button>';
            echo '<button class="btn"  style="margin-top: 10px" type="reset">Resetar</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</body>';
            echo '</html>';
        }

    }
    
?>