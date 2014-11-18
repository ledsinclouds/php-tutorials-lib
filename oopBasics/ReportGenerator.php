<?php

/**
 * Description of ReportGenerator
 *
 * @author kafka
 */
abstract class ReportGenerator {

    public function generateReport($resultArray) {
        //code to process the multidimensional array and generate HTML Report
    }
    
    abstract public function connectDB();

}

