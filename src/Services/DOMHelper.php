<?php


namespace AndrewSvirin\Ebics\Services;

use DOMNodeList;
use RuntimeException;

class DOMHelper
{
    /**
     * @param DOMNodeList|false $domNodeList
     *
     * @return string
     */
    public static function safeItemValue($domNodeList): string
    {
        if ($domNodeList === false) {
            throw new RuntimeException('DOM Node List should not be empty.');
        }

        $domNode = $domNodeList->item(0);

        if ($domNode === null) {
            throw new RuntimeException('DOM Node List should have an item.');
        }

        return $domNode->nodeValue;
    }
}