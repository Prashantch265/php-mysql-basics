<?php
// the readfile() function returns the number of bytes read on success
echo readfile("d:/Assignment/readFile.txt");

echo "<br/>";

// first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened
$file = fopen("d:/Assignment/readFileSync.txt", "r");
print(fread($file, filesize("d:/Assignment/readFileSync.txt")));
fclose($file);

echo "<br/>";

// fgets() function is used to read a single line from a file
$myfile = fopen("d:/Assignment/readFile.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
// fgetc() function is used to read a single character from a file
echo "<br/>";
echo fgetc($myfile);
fclose($myfile);

echo "<br/>";

$file1 = fopen("d:/Assignment/file1.txt", "r") or die("Unable to open file");
// Output one line until end-of-file
while(!feof($file1)){
    echo fgetc($file1) ;
}
fclose($file1);

echo "<br/>";

// create file and write
$newFile = fopen("d:/Assignment/newFile.txt", "w") or die("Unable to create file");
$txt = "Hello World\n";
fwrite($newFile, $txt);
fclose($newFile);

$newFile = fopen("d:/Assignment/newFile.txt", "a") or die("Unable to create file");
$txt = "My name is Prashant\n";
fwrite($newFile, $txt);
fclose($newFile);

$data = file_get_contents("d:/Assignment/testcopy.txt", false, null, 5, 14);
file_put_contents("d:/Assignment/test.txt", $data);
?>