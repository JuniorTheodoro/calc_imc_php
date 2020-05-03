<?php

    //======================================================================
    // Classe responsável por criar a interface do resultado calculado
    //======================================================================

    class IMCResultView {

        private float $imc; # Constante com resultado do IMC
        private string $mensagem; # Constante da descrição do IMC calculado

        /* Construtor da classe setando suas váriveis globais necessária */
        public function __construct($parImc, $parMensagem) {
            $this->imc = $parImc;
            $this->mensagem = $parMensagem;
        }

        /* Função responsável por criar e apresentar a interface */
        public function mostrar_resultado() {     
            echo '<!DOCTYPE html>';
            echo '<html lang="pt-br">';
            echo '<head>';
            echo '<meta charset="utf-8">';
            echo '<title>IMC</title>';
            echo '<link href="../css/styles.css" rel="stylesheet">';
            echo '<link rel="shortcut icon" href="../favicon.ico" />';
            echo '</head>';
            echo '<body>';
            echo '<div class="container">';
            echo '<div class="content">';
            echo '<p>' . $this->mensagem . '</p>';
            echo '<form>';
            echo '<label for="resultado">RESULTADO</label>';
            echo '<input name="resultado" style="text-align: center" value=' . $this->imc . ' disabled />';
            echo '</form>';
            echo '<button class="btn" onclick="window.location.href=\'../index.php\'">Voltar</button>';
            echo '</div>';
            echo '</div>';
            echo '</body>';
            echo '</html>';
        }

    }
    
?>