<?php
class Example699 {
    public $p1;
    public function init() {
        $this->p1 = null;
    }

    public function modify() {
        if (!isset($this->p1)) {
            $this->p1 = 'other';  // TODO: Don't emit PhanTypeMismatchProperty
        }
    }
}
