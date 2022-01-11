<?php
namespace classes;

class Views {
    public function header() {
        include(BASE_DIR."/Views/Header.php");
    }
    public function footer() {
        include(BASE_DIR."/Views/Footer.php");
    }
}