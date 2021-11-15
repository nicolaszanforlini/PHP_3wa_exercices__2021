<?php
/*
function filter(array $tab, callable $fn) : array {
    $t = [];
    foreach($tab as $value) {
        if ($fn($value)) {
            array_push($t, $value);
        }
    }
    return $t;
}

function test_we_can_filter() {

    $nbs = [2,20,1,15,11];

    $result = filter($nbs,function($nb){
        return $nb<10;
    });

    assert(is_array($result));
    assert(count($result) === 2);
    assert($result[0] === 2);
    assert($result[1] === 1);
}

function test_we_can_filter_other() {

    $nbs2 = [2,20,1,15,11];

    $result = filter($nbs2, function($nb){
        return $nb>10;
    });

    assert(is_array($result));
    assert(count($result) === 3);
    assert($result[0] === 20);
    assert($result[1] === 15);
    assert($result[2] === 11);
}


testWeCanFilter();
testWeCanFilterOther();
*/

//        exemple 2
function filter(array $tab, callable $fn) : array {
    $t = [];
    foreach($tab as $value) {
        if ($fn($value)) {
            array_push($t, $value);
        }
    }
    return $t;
}

function test_we_can_filter() {

    $nbs = [2,20,1,15,11];

    $result = filter($nbs,function($nb){
        return $nb<10;
    });

    assert(is_array($result));
    assert(count($result) === 2);
    assert($result[0] === 2);
    assert($result[1] === 1);
}

function test_we_can_filter_other() {

    $nbs2 = [2,20,1,15,11];

    $result = filter($nbs2, function($nb){
        return $nb>10;
    });

    assert(is_array($result));
    assert(count($result) === 3);
    assert($result[0] === 20);
    assert($result[1] === 15);
    assert($result[2] === 11);
}


$res = get_defined_functions();
foreach($res['user'] as $el ) {
    if(str_starts_with($el, 'test')){
        $tabTest[] = $el;
    }
}
print_r($tabTest);

foreach($tabTest as $elem) {
    $elem();
}






