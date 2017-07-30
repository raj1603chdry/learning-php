<?php
    // creating variables
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    // creating static variables
    $fromaddress = "From: webserver@example.com";
    $toaddress = "feedback@example.com";    //  default value
    $subject = "Feedback from website";
    $mailcontent = "Customer name: ".str_replace("\r\n","",$name)."\n"."Customer email: ".str_replace("\r\n","",$email)."\nCustomer comments: \n".str_replace("\r\n","",$feedback)."\n";

    if(preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email) === 0) {
        echo '<p>That is not a valid email address.<br />Please fill in correct details.</p>';
        exit;
    }

    //  changing the $toaddress if the criteria are met
    if(stristr($feedback, 'shop')) {
        $toaddress = 'retail@example.com';
    } else if(stristr($feedback, 'delivery')) {
        $toaddress = 'fulfillment@example.com';
    } else if(stristr($feedback, 'bill')) {
        $toaddress = 'account@example.com';
    }

    // using Regular Expressions to do the above checking.
    if(preg_match('/shop|customer service|retail/', $feedback)) {
        $toaddress = 'retail@example.com';
    } else if(preg_match('/deliver|fulfill/', $feedback)) {
        $toaddress = 'fulfillment@example.com';
    } else if(preg_match('/bill|account/', $feedback)) {
        $toaddress = 'account@example.com';
    }

    if(preg_match('/bigcustomer\.com/', $email)) {
        $toaddress = 'bob@example.com';
    }

    echo '<br /><br />';
    $address = preg_split('/\.|@/', $email);
    while (list($key, $value) = each($address)) {
        echo $value.'<br />';
    }

    // strstr is case sensitive while stristr is case insensitive.
    // strrchr is similar to strstr but it returns the string from the last occurence of the haystack.


    // invoking mail() to send email.
    // TODO enable mailing facility setup i.e. SMTP in windows.
    mail($toaddress, $subject, $mailcontent, $fromaddress);

    $price = 12.4;
    printf("The total amount is %.2f", $price);

    echo '<br />';
    $email_array = explode('@', $email);
    if(strtolower($email_array[1] == 'gmail.com')) {
        echo 'You use a gmail account<br />';
    } else {
        echo 'You do not use a gmail account<br />';
    }

    // $new_email = implode('@', $email_array);
    // echo $new_email;

    echo '<br /><b>Using strtok() for extracting the data<br /></b>';

    // using strtok()
    $token = strtok($feedback, " ");
    while($token != "") {
        echo $token.'<br />';
        $token = strtok(" ");
    }

    // strcasecmp is similar to strcmp except for the fact that it is case insensitive like strcmp.
    // strnatcmp doesn't compare the strings in lexicographical order but orders it in terms of human ordering and strnatcasecmp is the case insensitive version of it.
    // strpos return the position of the first occurence of the needle in the haystack and the strrpos returns the position of the last occurence of the needle in the haystack.
    // strpos returns false if the needle is not present in the haystack and false is treated as 0 in PHP. Therefore we should compare it with false using === .

    // Regular Expression in PHP.
    // regex are enclosed within single quotes in PHP.
    // forward slash (/) is the most commonly but other characters like # can also be used provided that the starting and ending delimiter are same used delimiter in regexes of PHP like /shop/.
    // if we want to execute the search in a case insensitive manner then the last delimiter should be written with i as a pattern modifier.
    // /.at/ represents any single character except newline(\n).
    // /[a-z]at/ represents that a single character be present before at provided that it lies between a and z inclusive of both.
    // for specifying a particular set of characters write as follows [aeiou].
    // and for set of ranges use [a-zA-Z].
    // for representing the set of characters not to be included use [^a-z] where ^represents NOT.
    // * - 0 or more times, + - one or more times, ? - 0 or 1 appearance. It appears after the part of the expression it applies to.
    // we can use parenthesis to form subexpressions.
    // numeric enclosed by {} specify the number of times the characters can be repeated.
    // ^ represents that the expression should appear at the beginning of the string and $ represents that the expression should appear at the end of the string. Both of these can be used at the same time.
    // | is used to represent choice of expression.
    // if we want to search for a special character used in regex, then we have to escape it using (\).


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Feedback Submitted</title>
    </head>
    <body>
        <h1>Feedback submitted</h1>
        <p><b>Your feedback (shown below with nl2br) has been sent</b></p>
        <p><?php echo nl2br(htmlspecialchars($feedback)); ?></p>
        <p><b>Your feedback (shown below without nl2br)</b></p>
        <p><?php echo htmlspecialchars($feedback) ?><p>
        <!-- if we change the order of nl2br and htmlspecialchars than there will be no effect in the output as the effect of nl2br will be reversed by htmlspecialchars -->

</html>
