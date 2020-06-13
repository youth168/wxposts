<?php 
    define("ZN_URL","http://search.youth168.com/cse/search?s=16759258441332649207&q=");
    
    if(isset($_GET['key'])) {
        $keyword=htmlentities($_GET['key']);
        if(isset($keyword)) {//right keyword
            $search_url=ZN_URL.$keyword;
            header("Location: ".$search_url);
        }else {//empty
            header("Location: http://www.youth168.com");
        }
    }
    exit;
?>