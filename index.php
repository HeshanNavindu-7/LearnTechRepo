

    <!-- <input method="get" type="text" name="username" />
    <input method="get" type="submit" name="submit" /><br/> -->
    <?php 
    //variable
    // $variable_name = "value";
    // echo $variable_name; 
    // //Strings
    // $first_name =" anamda";
    // echo $first_name;
    // echo "<br/>";
    // $last_name='saman';
    // echo $last_name;   
    // echo $first_name . " " . $last_name;

    // String Funtion
    $first = " The five boxing wizard";
    $second = " jumps quickly";
    $sentence = $first;
    $sentence .= $second;

    echo $sentence;
    ?>

<br/>
ALL Simple : <?php echo strtolower($sentence)  ?><br/>
ALL Capital : <?php echo strtoupper($sentence)  ?><br/>
First Letter Capital : <?php echo ucfirst($sentence)  ?><br/>
Number of characters : <?php echo strlen($sentence)  ?><br/>