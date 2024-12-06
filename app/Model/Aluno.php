<?php

class Aluno
{
    private string $matricula;
    private string $nome;
    private float $p1;
    private float $p2;

    public function setMatricula($matricula)
    {
        $this->nome = $matricula;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function setP1($p1)
    {
        $this->p1 = $p1;
    }

    public function setP2($p2)
    {
        $this->p2 = $p2;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getP1()
    {
        return $this->p1;
    }

    public function getP2()
    {
        return $this->p2;
    }

    public function calcularMedia()
    {
        if (!isset($this->p1) || !isset($this->p2)) {
            return "Não há como calcular a média, há prova sem nota.";
        }
        $media = ($this->p1 + $this->p2) / 2;

        return $media;
    }

    public function verificarSePassou()
    {
        if ($this->calcularMedia() >= 5) {
            return "Aprovado";
        }
        return "Reprovado";
    }
}
