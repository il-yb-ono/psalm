<?php
/**
* @psalm-template P of string
* @psalm-template F of int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOCHECK, GLOB_NOESCAPE, GLOB_ONLYDIR, GLOB_ERR>
* @psalm-param P $pattern
* @psalm-param F $flags
* @psalm-return (
*     P is ''
*       ? (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOESCAPE, GLOB_BRACE, GLOB_ONLYDIR, GLOB_ERR>
*             ? false|list<never>
*         : (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOCHECK, GLOB_NOESCAPE, GLOB_BRACE, GLOB_ERR>
*             ? false|list{0:''}
*             : false|list<never>
*           )
*         )
*       : (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOESCAPE, GLOB_BRACE, GLOB_ONLYDIR, GLOB_ERR>
*             ? false|list<non-empty-string>
*         : (F is int-mask<GLOB_MARK, GLOB_NOSORT, GLOB_NOCHECK, GLOB_NOESCAPE, GLOB_BRACE, GLOB_ERR>
*             ? false|list{0:non-empty-string, ...<non-empty-string>}
*             : false|list<non-empty-string>
*           )
*         )
* )
* @psalm-ignore-falsable-return
*/
function glob_test (string $pattern, int $flags = 0): array|false {
    return [];
}


/** @var int-mask<GLOB_NOCHECK> */
$maybeOnlydirFlag = 0;


/** @psalm-trace $_result */
$_result = glob_test('',$maybeOnlydirFlag);