<?php
class Book {
    private $code_book;
    private $name;
    private $qty;

    public function __construct($code_book, $name, $qty) {
        $this->setCodeBook($code_book);
        $this->name = $name;
        $this->setQty($qty);
    }

    private function setCodeBook($code_book) {
        if (preg_match('/^[A-Z]{2}\d{2}$/', $code_book)) {
            $this->code_book = $code_book;
        } else {
            throw new InvalidArgumentException("Error: Code book harus dalam format BB00 (2 huruf besar diikuti 2 angka)");
        }
    }

    private function setQty($qty) {
        if (is_int($qty) && $qty > 0) {
            $this->qty = $qty;
        } else {
            throw new InvalidArgumentException("Error: Qty harus berupa integer positif");
        }
    }

    public function getCodeBook() {
        return $this->code_book;
    }

    public function getQty() {
        return $this->qty;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}