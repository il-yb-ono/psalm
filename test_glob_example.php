<?php

/**
 * @psalm-template P of string
 * @psalm-template F of int-mask<GLOB_NOCHECK,GLOB_MARK>
 * @psalm-param P $pattern
 * @psalm-param F $flags
 * @psalm-return (
 *       
 *       (F is int-mask<GLOB_MARK>
 *             ? false|'GLOB_MARK'
 *         : (F is int-mask<GLOB_NOCHECK>
 *             ? false|'GLOB_NOCHECK'
 *             : false|'Other'
 *           )
 *         )
 * )
 * @psalm-ignore-falsable-return
 */
function glob_test(string $pattern, int $flags = 0)
{
    return false;
}



/** @psalm-trace $_result */
$_result = glob_test('', GLOB_NOCHECK);