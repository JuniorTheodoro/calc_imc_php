<?php 

    //======================================================================
    // Calculadora de IMC (Jorge Augusto Theodoro Júnior)
    //======================================================================

    /*
    * Este aplicativo tem como função básica e única de realizar o cálculo do
    * índice de massa corporal através da entrada dos valores de peso e altura
    * informadas pelo usuário e apresentar o resultado e a descrição da situação.
    */
    
    $app = new App(); 
    $app->iniciar(); // Starta o app

    class App {

        /* Inicia o aplicativo */
        function iniciar() {
            require_once 'controllers/IMCController.php';

            $controller = new IMCController();
            $controller->index();
        }

    }
    
?>