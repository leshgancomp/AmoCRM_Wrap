<?php
/**
 * Created by PhpStorm.
 * User: leshgancomp
 * Date: 07.04.2018
 * Time: 15:28
 */

namespace leshgancomp\AmoCRM_Wrap;


/**
 * Class AmoWrapException
 * @package AmoCRM
 */
class AmoWrapException extends \Exception
{
    /**
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }
}