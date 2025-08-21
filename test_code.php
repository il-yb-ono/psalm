<?php

/**
 * 
 * @template F of int
 * @param string $pattern
 * @param F $flags
 * @return (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOESCAPE, GLOB_ONLYDIR, GLOB_ERR>
 *             ? false|list<never>
 *         : (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOCHECK, GLOB_NOESCAPE, GLOB_ERR>
 *             ? false|list{0:''}
 *             : false|list<never>
 *           )
 *         )
 */
function testGlobFunction(string $pattern, int $flags) {

}

/** @var int-mask<GLOB_ONLYDIR,GLOB_NOCHECK> */
$maybeOnlydirFlag = 0;


/** @psalm-trace $_result */
$_result = testGlobFunction('',$maybeOnlydirFlag|GLOB_NOCHECK);