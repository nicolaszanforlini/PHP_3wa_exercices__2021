<?php

// search sequence

class Search
{
    public function __construct(
        public string $seq,
        public array $pos = []
    ) {
    }
}



function search_seq($tab, $seq) {

    $activeSearch = 0;
    $pos = 0;

    for($i=0;$i<sizeof($tab);$i++) {

        if($activeSearch == sizeof($seq)-1) {
            $result[] = "sequence find to position : ".$i - $activeSearch;
        }
        if( $tab[$i] == $seq[$activeSearch] ) {
            $activeSearch++;
        }else {
            $activeSearch = 0;
        }
    }
    foreach($seq as $el) {
        $str .= $el;
    }
    $str = "'".$str."'";
    $search = new Search ($str, $result);
    return $search;
}

$content = [2,1,4,2,6,1,2,3,7,1,2,3,9];
$seq = [1,2,3];

$res = search_seq($content, $seq);
print_r($res);











