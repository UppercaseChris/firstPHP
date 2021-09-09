<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP Script</title>
</head>
<body>
    <?php   //This segment here (<?php and it's respective closing tag below ) allows access to the php. Anything within this tag must be valid php. Everything else must be HTML or CSS.
        echo "<h1>Hello World Wide Web!</h1>"; //This echo is a PHP method of displaying information to the screen. The text or characters shown on the screen will be indicated by what is inbetween the quotation marks. That being said you can also include HTML elements such as in this case h1 simply by placing the tags within the qoutation marks.
        print "<p>This is my first PHP program.</p>"; #The pound sign is a secondary method of commenting in php. In this line we explore a second way of displaying information to the screen using php which is using a print function rather than an echo. They both at the surface level do the same thing. If the website were to be displayed now, the text above and the text within this print statement would display next to eachother. To cancel that out we placed a <p tag within the quotation marks. The HTML tags still follow the rules of HTML even though they are located within a php script. In this case the <p tag moves the text provided to the next line.
        echo "It is often said, \"The truth is rarely pure\""; //Now we want to include text that includes quotation marks. Both the print and echo functions in php operating by reading the code between quatation marks. However when there are two sets the function stops early. To avoid this we can use what is known as an escape. It is placed directly before the character you want the function to ignore and is represented with a backslash(\). In the case of two addiation quotation marks, you'd need to use an escape twice so the function reads the code correctly.
        
        /*
            WE can also use an comment out a larger section of code in php using this method here :D. The browser will ignore all this text! 
        */
    ?>
    

</body>
</html>