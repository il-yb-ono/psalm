<?php

/**
 * @psalm-template F of int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOESCAPE, GLOB_ONLYDIR, GLOB_ERR,GLOB_NOCHECK>
 * @psalm-param F $flags
 * @psalm-return   F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOESCAPE, GLOB_ONLYDIR, GLOB_ERR>
 *             ? false|list<never>
 *         : (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOCHECK, GLOB_NOESCAPE, GLOB_ERR>
 *             ? false|list{0:''}
 *             : false|list<never>
 *           )
 * @psalm-ignore-falsable-return
 */
function test(int $flags = 0)
{
}


/** @var int-mask<GLOB_ONLYDIR> */
$maybeOnlydirFlag = 0;

/** @psalm-trace $_result */
$_result = test(0, GLOB_NOCHECK | $maybeOnlydirFlag);