<?php

    //======================================================================
    // Calculadora de IMC (Jorge Augusto Theodoro Júnior)
    //======================================================================

    /*
    * Este aplicativo tem como função básica e única de realizar o cálculo do
    * índice de massa corporal através da entrada dos valores de peso e altura
    * informadas pelo usuário e apresentar o resultado e a descrição da situação.
    */

    /* Verifica se foi passado por POST dados para disparar funções do controller */
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $controller = new IMCController();

        $controller->realizar_calculo($_POST);
        $controller->apresentar_resultado();
    }

    class IMCController {

        private float $imc;
        private string $mensagem;

        /* Responsável por chamar a interface inicial do app */
        public function index() {
            require_once 'app/views/IMCCalcView.php';

            $objCalc = new IMCCalcView();
            $objCalc->mostrar_calculadora();
        }

        /* Dispara as funções responsáveis por calcular o IMC */
        # $dados(parâmetro) = informações como altura e peso
        public function realizar_calculo($dados) {
            require_once '../models/IMCModel.php';

            $objImc = new IMCModel($dados['peso'], $dados['altura']);
            $objImc->calcular_imc();

            $this->imc = $objImc->get_imc();
            $this->mensagem = $objImc->get_mensagem();
        }

        /* Pega o resultado dos cálculos e chama a interface de apresentação */
        public function apresentar_resultado() {
            require_once '../views/IMCResultView.php';

            $objResult = new IMCResultView($this->imc, $this->mensagem);
            $objResult->mostrar_resultado();
        }

    }   

?>