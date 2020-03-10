<?php
/**
 * Created by PhpStorm.
 * User: lakie
 * Date: 2020/3/10
 * Time: 11:57
 */
class IndexCreate
{
    private $root;
    private $text;
    public function __construct()
    {
        $this->root = '.';
        $this->text = "";
    }

    public function makeIndex()
    {
        $this->text = $this->LoopDir($this->root);
        $readme = 'SUMMARY.md';
        $file = fopen($readme, 'w+');
        fwrite($file, $this->text);
        fclose($file);
    }

    public function LoopDir($dir)
    {
        $tierNum = substr_count($dir, '/');
        $retract = '';
        if ($tierNum > 0) {
            for ($n = 0; $n < $tierNum; $n++) {
                $retract .= "  ";
            }
            $retract .= '+ ';
        }
        $dirList = scandir($dir);
        array_multisort($dirList, SORT_NATURAL);
        for ($i = 0; $i < count($dirList); $i++) {
            if (is_dir($dir . '/' . $dirList[$i]) && substr($dirList[$i], 0, 1) != '.') {
                $this->text .= $retract . '[' . $dirList[$i] . ']' . '(' . $dir . '/' . $dirList[$i] . ')' . "\n\n";
                $this->LoopDir($dir. '/' . $dirList[$i]);
            }
        }
        return $this->text;
    }
}
$I = new IndexCreate();
$I->makeIndex();