/* Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
When using double quotes, variables can be inserted to the string as in the example above.
When using single quotes, variables have to be inserted using the . operator, like this: */?

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';
?>