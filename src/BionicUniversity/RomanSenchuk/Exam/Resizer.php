<?php
/**
 * Created by PhpStorm.
 * User: bionic
 * Date: 5/14/14
 * Time: 8:45 PM
 */

namespace BionicUniversity\RomanSenchuk\Exam;


class Resizer extends AbstractResizer {

    /*
     * @var BionicUniversity\RomanSenchuk\Exam\ImageInterface
     */
    private $pict;

    const THUMB_WIDTH = 100;
    const THUMB_HEIGHT = 100;

    function __construct(ImageInterface $image){
        $this->pict = $image;
    }

    public function thumbnail(){
        $pointToStrtCutting = $this->getPoint();
        $this->pict->trim($pointToStrtCutting, self::THUMB_WIDTH, self::THUMB_HEIGHT);
    }

    private function getPoints(){
        $xCenter = $this->pict->getHeight()/2;
        $yCenter = $this->pict->getWeight()/2;
        $xToStartCut = $xCenter - self::THUMB_WIDTH/2;
        $yToStartCut = $yCenter - self::THUMB_HEIGHT/2;
        return new Point($xToStartCut, $yToStartCut);

    }


} 