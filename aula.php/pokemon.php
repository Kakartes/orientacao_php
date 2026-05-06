<?php

class Pokemon {
    public $nome;
    public $tipo;
    public $experiencia;
    public $pontos_vida;
    public $ataque;
    public $defesa;
    public $velocidade;
    public $nivel;

    public function __construct($nome, $tipo, $experiencia, $pontos_vida, $ataque, $defesa, $velocidade, $nivel) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->experiencia = $experiencia;
        $this->pontos_vida = $pontos_vida;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
        $this->nivel = $nivel;
    }

    public function batalhar($oponente) {
        echo "Batalha entre " . $this->nome . " e " . $oponente->nome . "!\n";
        $hp_jogador = $this->pontos_vida;
        $hp_oponente = $oponente->pontos_vida;
        
        while ($hp_jogador > 0 && $hp_oponente > 0) {
            echo "\nSua vez! Escolha uma ação:\n";
            echo "1. Atacar\n";
            echo "2. Defender\n";
            echo "3. Fugir\n";
            $acao = trim(readline("Digite o número da ação: "));
            
            if ($acao == "1") {
                $dano = $this->ataque - $oponente->defesa;
                if ($dano < 0) $dano = 0;
                $hp_oponente -= $dano;
                echo $this->nome . " atacou e causou " . $dano . " de dano! " . $oponente->nome . " tem " . max(0, $hp_oponente) . " HP restantes.\n";
            } elseif ($acao == "2") {
                echo $this->nome . " defendeu!\n";
 
            } elseif ($acao == "3") {
                echo $this->nome . " fugiu da batalha!\n";
                return;
            } else {
                echo "Ação inválida!\n";
                continue;
            }
            
            if ($hp_oponente <= 0) {
                echo $oponente->nome . " foi derrotado! Você venceu!\n";
                $this->experiencia += 20;
                break;
            }
            
            $dano_oponente = $oponente->ataque - $this->defesa;
            if ($dano_oponente < 0) $dano_oponente = 0;
            $hp_jogador -= $dano_oponente;
            echo $oponente->nome . " atacou e causou " . $dano_oponente . " de dano! " . $this->nome . " tem " . max(0, $hp_jogador) . " HP restantes.\n";
            
            if ($hp_jogador <= 0) {
                echo $this->nome . " foi derrotado! Você perdeu!\n";
                break;
            }
        }
    }

    public function aumentar_nivel() {
        $this->nivel += 1;
        echo $this->nome . " subiu para o nível " . $this->nivel . "!\n";
    }

    public function aumentar_pontos_vida() {
        $this->pontos_vida += 20;
        echo $this->nome . " aumentou pontos de vida para " . $this->pontos_vida . "!\n";
    }

    public function aumentar_experiencia() {
        $this->experiencia += 5;
        echo $this->nome . " ganhou experiência! Agora tem " . $this->experiencia . "!\n";
    }

    public function imprimir_dados() {
        echo "Nome: " . $this->nome . "\n";
        echo "Tipo: " . $this->tipo . "\n";
        echo "Experiência: " . $this->experiencia . "\n";
        echo "Pontos de Vida: " . $this->pontos_vida . "\n";
        echo "Ataque: " . $this->ataque . "\n";
        echo "Defesa: " . $this->defesa . "\n";
        echo "Velocidade: " . $this->velocidade . "\n";
        echo "Nível: " . $this->nivel . "\n";
        echo "\n";
    }
}

//Pokémons favoritos
$pikachu = new Pokemon("Pikachu", "Elétrico", 0, 35, 55, 40, 90, 5);
$charizard = new Pokemon("Charizard", "Fogo/Voador", 0, 78, 84, 78, 100, 36);

//dados iniciais
echo "Dados iniciais:\n";
$pikachu->imprimir_dados();
$charizard->imprimir_dados();

//métodos
$pikachu->batalhar($charizard);
$pikachu->aumentar_nivel();
$pikachu->aumentar_pontos_vida();
$pikachu->aumentar_experiencia();

$charizard->aumentar_nivel();
$charizard->aumentar_pontos_vida();
$charizard->aumentar_experiencia();

//dados finais
echo "Dados finais:\n";
$pikachu->imprimir_dados();
$charizard->imprimir_dados();

?>

