<?php

    //======================================================================
    // Classe responsável pela função do aplicativo
    //======================================================================

    class IMCModel {

        public float $peso; # Constante informada pelo usuário
        public float $altura; # Constante informada pelo usuário
        private float $imc; # Váriávei calculada pelo sistema
        private string $mensagem; # Descrição do IMC calculado

        /* Construtor da classe setando suas váriáveis globais necessárias */
        public function __construct($parPeso, $parAltura) {
            $this->peso = $parPeso;
            $this->altura = $parAltura;
        }

        /* Função responsável por realizar o calculo */
        public function calcular_imc() {
            $this->altura = bcpow($this->altura, 2, 2);
            $this->imc = $this->peso / $this->altura;
            $this->imc = number_format($this->imc, 2, '.', '');

            if ($this->imc <= 0) {
                $this->mensagem = "Valor do resultado inválido. Favor, repita a operação!";
            }
            elseif ($this->imc <= 18.5) {
                $this->mensagem = "Você está abaixo do peso ideal!";
            }
            elseif ($this->imc > 18.0 && $this->imc <= 24.9) {
                $this->mensagem = "Meus parabéns! Você está no peso ideial!";    
            }
            elseif ($this->imc > 24.9 && $this->imc <= 29.9) {
                $this->mensagem = "Cuidado! Você está acima do peso!";    
            }
            elseif ($this->imc > 29.9 && $this->imc <= 34.9) {
                $this->mensagem = "Cuidado! Você está com obesidade de grau I!";    
            }
            elseif ($this->imc > 34.9 && $this->imc <= 39.9) {
                $this->mensagem = "Cuidado! Você está com obesidade de grau II!";    
            }
            elseif ($this->imc > 39.9) {
                $this->mensagem = "Cuidado! Você está com obesidade de grau III!";    
            }
        }

        /* Retorna o IMC calculado */
        public function get_imc() {
            return $this->imc;
        }

        /* Retona a mensagem da descrição do IMC calculado */
        public function get_mensagem() {
            return $this->mensagem;
        }

    }

?>