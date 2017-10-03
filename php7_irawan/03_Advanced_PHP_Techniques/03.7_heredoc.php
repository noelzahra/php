<?php
//heredoc

$int = 78;

//start heredoc with open <<<ID (identifier) and close with ID on a seperate line

$text = <<<COPY
    All text goes in this heredoc
    Which can be on multiple lines
    and include other vars: $int
    Also include 'single' and "double quotes"
    A \$ has to be escaped.
COPY;

echo $text . "\n\n";

//best use when you have html section
function printWeatherWidget($currentCity) {
    $html = 
    <<<WIDGET
    <div class="widget">
        <h4>Weather widget</h4>
        <div class="widget-body">
            Weather information for $currentCity
            <input type="text" name ="weather" placeholder="Enter city"/>
        </div>
    </div>
WIDGET;

return $html;
}

echo printWeatherWidget('California');