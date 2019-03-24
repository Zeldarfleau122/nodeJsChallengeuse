<html>
<head>
<title>PHP Traps #2</title>
</head>
<body>
<h1>#2 Still possible</h1>
<?php
$nice = 1;

if (!isset ($_POST['u'])) $nice = 0;
if (ereg ('\.', $_POST['u'])) $nice = 0;
if (ereg ('%', $_POST['u'])) $nice = 0;
if (ereg ('[0-9]', $_POST['u'])) $nice = 0;
if (ereg ('http', $_POST['u']) ) $nice = 0;
if (ereg ('https', $_POST['u']) ) $nice = 0;
if (ereg ('ftp', $_POST['u'])) $nice = 0;
if (ereg ('telnet', $_POST['u'])) $nice = 0;
print($nice) ;
if ($nice) {
 if (@file_exists ($_POST['u'])) $nice = 0;
 }
print($nice) ;
if ($nice) {
 $nice = @file_get_contents ($_POST['u']);
 if ($nice === 'Good Work!') nextpart ();
 }
print($nice) ;
?>
<form method="post">
u: <input type="text" name="u" /><br />
<input type="submit" value="Trap!" />
</form>
</body>
</html>
