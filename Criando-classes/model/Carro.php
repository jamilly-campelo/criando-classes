<?php

class Carro {
    private string $modelo;
    private string $marca;
    private int $ano;

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self {
        $this->modelo = $modelo;
        return $this;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function setMarca(string $marca): self {
        $this->marca = $marca;
        return $this;
    }

    public function getAno(): int {
        return $this->ano;
    }

    public function setAno(int $ano): self {
        $this->ano = $ano;
        return $this;
    }
}