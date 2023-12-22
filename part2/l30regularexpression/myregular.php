<?php

    class myregular{
        public function __construct(){
            $string = "We are family";
                    // preg_match(delimiter,string);
//            $result = preg_match("we are family",$string); // it's false
            $result = preg_match("/We are family/",$string); // it's true
            $result = preg_match("/family/",$string); // it's true
            $result = preg_match("/mily/",$string); // it's true

            $result = preg_match("/mily$/",$string); // it's true
            $result = preg_match("/are$/",$string); // it's false
            $result = preg_match("/we$/",$string); // it's false
            $result = preg_match("/family$/",$string); // it's true
            $result = preg_match("/Family$/",$string); // it's false

            $result = preg_match("/^mily/",$string); // it's false
            $result = preg_match("%^are%",$string); // it's false
            $result = preg_match("#^we#",$string); // it's false
            $result = preg_match("+^We+",$string); // it's true


            $result = preg_match("-^family$-",$string); // it's false NOte:: string must be excact
            $result = preg_match("!^$!",$string); // it's false NOte:: string must be empty

            $result = preg_match("/^We/",$string); // it's true
            $result = preg_match("/^we/i",$string); // it's true

            $result = preg_match("/[b-d]/",$string); // it's false
            $result = preg_match("/[a-f]/",$string); // it's true
            $result = preg_match("/[a-z]/",$string); // it's true
            $result = preg_match("/[A_Z]/",$string); // it's true
            $result = preg_match("/[0-4]/",$string); // it's true

            $string = "my lucky number is 567";

            $result = preg_match("/[0-4]/",$string); // it's false
            $result = preg_match("/[5-9]/",$string); // it's true
            $result = preg_match("/[a-z]/",$string); // it's true
            $result = preg_match("/[A-Z]/",$string); // it's false
            $result = preg_match("/[A-Z] | [a-z] /",$string); // it's true
            $result = preg_match("/^[a-z]/",$string); // it's true
            $result = preg_match("/[a-z]$/",$string); // it's false
            $result = preg_match("/^[5-9]/",$string); // it's false
            $result = preg_match("/[5-9]$/",$string); // it's true

            $result = preg_match("/[^a-z]/",$string); // it's true (it's mean not include a to z)
            $result = preg_match("/[^5-9]/",$string); // it's true (it's mean not include 5 to 9)
            $result = preg_match("/[^0-4]/",$string); // it's true (it's mean not include 0 to 4)

            $string = "admi@gmail.com";
            $result = preg_match("/@/",$string); // it's true
            $result = preg_match("/m/",$string); // it's true
            $result = preg_match("/m+/",$string); // it's true
            $result = preg_match("/b+/",$string); // it's false
            $result = preg_match("/b*/",$string); // it's true
            $result = preg_match("/b?/",$string); // it's true
            $result = preg_match("/m{1}/",$string); // it's true
            $result = preg_match("/m{2}/",$string); // it's false

            $string = "adminn@gmail.com";
            $result = preg_match("/n{1}/",$string); // it's true
            $result = preg_match("/n{2}/",$string); // it's true
            $result = preg_match("/n{3}/",$string); // it's false
            $result = preg_match("/n{2,3}/",$string); // it's true
            $result = preg_match("/n{2,}/",$string); // it's true

            $string = "admin@gmial.com";
            $result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);

            echo $result ? "It's true" : "it's false";

            echo "<hr/>";

            // preg_match(pattern,replacement,string);
            $string = "Are you ready to learn PHP Framework";
            $result = preg_replace("/php/i","javascript",$string);
            echo "$result <br/>"; // Are you ready to learn javascript Framework

            $string = "Are you ready to learn PHP Framework";
            $result = preg_replace("/\s/","",$string);
            echo "$result <br/>"; // AreyoureadytolearnjavascriptFramework

            // bracket Expressions
            $string = "admin123@gmail .com";
            $result = preg_replace("/[[:space:]]/","x",$string);
            echo "$result <br/>"; // admin123@gmailx.com

            $result = preg_replace("/[[:space:]]/","",$string);
            echo "$result <br/>"; // admin123@gmail.com

            $result = preg_replace("/[[:alpha:]]/","x",$string);
            echo "$result <br/>"; // xxxxx123@xxxxx .xxx

            $result = preg_replace("/[[:digit:]]/","x",$string);
            echo "$result <br/>"; // adminxxx@gmail .com

            $result = preg_replace("/[[:alnum:]]/","x",$string);
            echo "$result <br/>"; // xxxxxxxx@xxxxx .xxx

            $result = preg_replace("/[[:punct:]]/","x",$string);
            echo "$result <br/>"; // admin123xgmail xcom

            $result = preg_replace("/[[:lower:]]/","x",$string);
            echo "$result <br/>"; // xxxxx123@xxxxx .xxx

            $string = "Admin123@gmail.com";
            $result = preg_replace("/[[:upper:]]/","x",$string);
            echo "$result <br/>"; // xdmin123@gmail.com

            $string = "Are you ready to learn PHP Framework";
            $result = preg_replace(["/PHP/","/framework/i"],["Javascript","libraries"],$string);
            echo "$result <br/>"; // Are you ready to learn Javascript libraries

            $string = "My Lucky Number is 007 but i got ticket number 5700";
            $result = preg_replace('/[0-9]/',"x",$string);
            echo "$result <br/>"; // My Lucky Number is xxx but i got ticket number xxxx

            $result = preg_replace('/[0-9]+/',"x",$string);
            echo "$result <br/>"; // My Lucky Number is x but i got ticket number x

            //                           no limit = 0 (or) NULL
            // preg_split(pattern,string,limit,flags);

            $string = "My Lucky number is 007";
            $result = preg_split("/\s/",$string);
            echo "<pre>".print_r($result,true)."</pre>";
            echo "$result[0] <br/>"; // My
            echo "$result[1] <br/>"; // Lucky

            $result = preg_split("/\s/",$string,3);
            echo "<pre>".print_r($result,true)."</pre>";
            echo "$result[0] <br/>"; // My
            echo "$result[1] <br/>"; // Lucky

            $string = "My Lucky number is 007";
            $result = preg_split("/\s/",$string);
            echo "<pre>".print_r($result,true)."</pre>";

            $string = "My Lucky number is 007, but i got ticket number 5700";
            $result = preg_split("/\s/",$string);
            echo "<pre>".print_r($result,true)."</pre>";


            $result = preg_split("[\s]",$string);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("/\s,/",$string);
            echo "<pre>".print_r($result,true)."</pre>";



            $result = preg_split("/[\s,]/",$string);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
            echo "<pre>".print_r($result,true)."</pre>";

            $result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
            echo "<pre>".print_r($result,true)."</pre>";

            // preg_quote();

            $string = "He\'s my father, do you know him?";

            $result = preg_quote($string);
            echo $result."<br/>";

            $result = preg_quote($string,"o");
            echo $result."<br/>";

            // preg_match_all(pattern,string,result,flags);

            $string = "Winning numbers are 227-000 & 002-777 , but my ticket number is 007-222";

            preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
            echo "<pre>".print_r($result,true)."</pre>";

            preg_match_all("/\d-\d/",$string,$result,PREG_PATTERN_ORDER);
            echo "<pre>".print_r($result,true)."</pre>";

            // lookahead & lookbehind
            // (?=) regax lookhead (or) positive lookahead  = right hand side
            // (?!) negative lookahead                      = left hand side

            // (?<=) regax lookbehind (or) positive lookbehind
            // (?<!) negative lookahead

            $string = "aungkyaw@cisco.com";
            $result = preg_match("/@(?=cisco)/",$string,); // it's true ( positive lookahead )
            $result = preg_match("/(?<=@)cisco/",$string,); // it's true ( positive lookbehind )

            $result = preg_match("/@(?!cisco)/",$string,); // it's false ( negative lookahead )
            $result = preg_match("/(?<!@)cisco/",$string,); // it's false ( negative lookbehind )


            echo $result ? "it's true" : "it's false";

            echo "<br/>";

            $strongpassword = "abc77#D";

            $result = preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*([[:punct:]]))/",$strongpassword);
            echo $result ? "it's true" : "it's false";

        }
    }

    echo "This is Regular Expression <br/>";
    $obj = new myregular();

    echo "<hr/>";


?>

<!-- $ must be in end ( case sensitive )  -->
<!-- ^ creat or must be in start (case sensitive) -->
<!-- i no case sensitive -->
<!-- [] range a-z A-Z 0-9 -->
<!-- m+  must be contain m and more -->
<!-- b* contain or not and more -->
<!-- b? contain or not and more -->
<!--m{nth} contain same place m as per nth and more-->
<!--m{nth,nth} contain same place m as per nth and more-->
<!--m{nth,} contain same place m as per nth and more-->
<!-- [[:space:]] mean space -->
<!-- [[:alpha:]] alpha -->
<!-- [[:digit:]] mean digit -->
<!-- [[:alnum:]] alphanumeric characters -->
<!-- [[:punct:]] Punctuation characters -->
<!-- [[:loewr:]] lower-case characters -->
<!-- [[:upper:]] upper-case characters -->
