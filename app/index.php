<!DOCTYPE html>
<html>
    <head>
        <title>Query openweateather API with PHP</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>Query openweateather API with PHP</h1>
        <?php
            $city = "Ushuaia";

            // Create an openweathermap.com account and API Keys and paste it here.
            $appid = "";
            
            if (!empty($appid)) {
                
                $response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&units=metric&APPID=' . $appid);
                $json = json_decode($response);
                
                // Uncomment this line to see more information of the API content
                // var_dump($json);

                if ($json->cod == 200) {
                    $icon = $json->weather[0]->icon;
                    echo '<img src="http://openweathermap.org/img/w/' . $icon . '.png" style="vertical-align:middle"> Now in ' . $city . ': ' . $json->main->temp . 'C&deg; ' . $json->weather[0]->description;
                }
            }
            else {
                echo '<h3>Please, create an openweathermap.com account and API Keys.</h3>';
            }
            
        ?>
    </body>
</html>
