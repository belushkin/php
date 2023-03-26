<?php

echo "I am included<br/>";

/**
 * Function returns random integer number between 5 and 15
 *
 * @param Place   $where  Where something interesting takes place
 * @param integer $repeat How many times something interesting should happen
 * 
 * @throws Some_Exception_Class If something interesting cannot happen
 * @author Monkey Coder <mcoder@facebook.com>
 * @return Status
 */
function random()
{
    return rand(5, 15);
}
