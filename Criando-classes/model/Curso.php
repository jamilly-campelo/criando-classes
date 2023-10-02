<?php
// o arquivo de classe só vai ter código php, não sendo necessário fechar a tag php

class Curso {
    private string $nome;
    private string $nivel;
    private string $modalidade;
    private float $duracao; // semestres

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome($nome): Curso {
        $this->nome = $nome;
        return $this;
    }

    public function getNivel(): string {
        return $this->nivel;
    }

    public function setNivel($nivel): Curso {
        $this->nivel = $nivel;
        return $this;
    }

    public function getModalidade(): string {
        return $this->modalidade;
    }

    public function setModalidade($modalidade): Curso {
        $this->modalidade = $modalidade;
        return $this;
    }

    public function getDuracao(): float {
        return $this->duracao;
    }

    public function setDuracao($duracao): Curso {
        $this->duracao = $duracao;
        return $this;
    }
}