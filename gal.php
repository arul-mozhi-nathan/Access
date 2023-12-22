<?php

$files = glob("*.{jpg,JPG,png,PNG}", GLOB_BRACE);

$handle = fopen("page.html", "r") or die("Unable to open file!");
$html_text = fread($handle, filesize("page.html"));
fclose($handle);

$html_lines = explode("\n", $html_text);
$found = false;
$output_html = "";
$count = 0;

foreach ($html_lines as $line)
{
    if (strpos($line, "insert images after this line in a variable called imagearr") != FALSE)
    {
        $found = true;
        $image_array = "var imagearr = [ ";
        

        foreach($files as $image)
        {
            if ($count == 0)
            {
                 $image_array .= "\"" . $image . "\"";           
            }
            else
            {
                $image_array .= ", \"" . $image . "\"";
            }
            $count += 1;
        }

        $image_array .= " ];";

        $output_html .= $image_array;
    }
    else
    {
        $output_html .= $line;
    }

    $output_html .= "\n";
}

if ($found == false)
{
    die ("Did not find javascript line to edit");
}

echo $output_html;

?>
