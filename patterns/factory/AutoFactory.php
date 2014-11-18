<?php

/**
 * Description of AutoFactory
 *
 * @author kafka
 */
class AutoFactory {

    public static function create($make, $model) {
        return new Automobile($make, $model);
    }

}
