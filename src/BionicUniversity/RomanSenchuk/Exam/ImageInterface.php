<?php
namespace BionicUniversity\RomanSenchuk\Exam;

interface ImageInterface {
    function getHeight();
    function getWeight();
    function trim(Point $point, $newWidth, $newHeight);
} 