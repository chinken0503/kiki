<?php
echo '<button id = "read">Read</button><br><br>';
echo 
"<script type=\"text/javascript\">
$(\"#read\").click(function()
{
alert(\"<?php display(); ?>\");
});
</script>";

function display()
{
    echo "2021新年快乐";
}
?>
