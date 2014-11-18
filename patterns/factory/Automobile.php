<?php

/**
 * Description of Automobile
 *
 * @author kafka
 */
class Automobile {

    private $vehicule_make;
    private $vehicule_model;

    public function __construct($make, $model) {
        $this->vehicule_make = $make;
        $this->vehicule_model = $model;
    }

    public function getMakeModel() {
        return $this->vehicule_make . ' ' . $this->vehicule_model;
    }

}
