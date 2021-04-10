<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackaton";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing Page</title>
        <meta name="description" content="description">
        <meta name="keywords" content="keywords">
        <meta name="author" content="Kozzuro">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js" integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A==" crossorigin="anonymous"></script>
        </head>
    <body>


            <div class="m-3">
                <div class="container text-center blue-grey lighten-5 rounding rounded_one">
                    <h1 class="welcome">WELCOME BACK: ADMIN !</h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ripe-malinka-gradient">
                            <div class="card-body">  
                                <h4 class="card-title"><a id="month">MONTH</a></h4>
                                <h2 class="card-title"><a id="day">DAY</a></h2>
                                <h4 class="card-title"><a id="year">YEAR</a></h4>
                                <div class="pb-3"></div>
                            </div>
                        </div>             
                    </div>
                    <div class="col-md-4">
                        <div class="card peach-gradient">
                            <div class="card-body text-center">  
                                <a id="currentTime"></a>
                            </div>
                            <div class="row m-3">
                                <div class="col-md-12">
                                    <div class="btn btn-block success-color" onclick="add_one();"><a>+1</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ripe-malinka-gradient">
                            <div class="card-body">  
                                <img id="icon_weather" src="icons/sun.png" style="width: 30%;"/>
                                <div class="pt-3"></div>
                                <h4 class="card-title"><a id="city">Jamajca</a><a id="temperature_out"></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5"></div>


            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card ripe-malinka-gradient">
                            <div class="card-body">  
                            <h4 class="card-title"><a>Battery Buffor</a></h4>
                                <h3 id="battery_voltage"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card ripe-malinka-gradient">
                            <div class="card-body">  
                            <h4 class="card-title"><a>Photo. Buffor</a></h4>
                                <h3 id="power_foto"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card ripe-malinka-gradient">
                            <div class="card-body">  
                            <h4 class="card-title"><a>Boiler Buffor</a></h4>
                                <h3 id="boiler_buffor"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card ripe-malinka-gradient">
                            <div class="card-body">  
                            <h4 class="card-title"><a>Money Saved</a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pt-5"></div>

            <div class="paddinkton">
            <div class="row">
                <div class="col-md-3">
                    <button class="button-1">use photovoltaic and excess use to charge battery</button>
                </div>
                <div class="col-md-3">
                    <button class="button-1">use photovoltaic and excess returned to network</button>
                </div>
                <div class="col-md-3">
                    <button class="button-1">use photovoltaic and charge battery using network</button>
                </div>
                <div class="col-md-3">
                    <button class="button-1">use battery and photovoltaics, shortage get from network</button>
                </div>
            </div>
        </div>

            <div class="pt-5"></div>

                <div class="flip">
                    <div class="front" style="background-image: url('kiczen.png')">
                    <h1 class="text-shadow">KITCHEN</hi>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_kitchen">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip">
                    <div class="front" style="background-image: url('leaving.png')">
                    <h1 class="text-shadow">LIVING ROOM</hi>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_livingroom">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip">
                    <div class="front" style="background-image: url('bathroom.png')">
                    <h1 class="text-shadow">BATHROOM</hi>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_bathroom">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip">
                    <div class="front" style="background-image: url('eating.png')">
                    <h1 class="text-shadow">DINING ROOM</h1>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_diningroom">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip">
                    <div class="front" style="background-image: url('study.png')">
                    <h1 class="text-shadow">STUDY ROOM</hi>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_studyroom">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip">
                    <div class="front" style="background-image: url('badroom_1.png')">
                    <h1 class="text-shadow">BEDROOM 1</hi>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_bedroom_1">0</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip">
                    <div class="front" style="background-image: url('batroom.png')">
                    <h1 class="text-shadow">BEDROM 2</hi>
                    </div>
                    <div class="back">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="icon_weather" src="icons/thermometer.png" style="width: 90%;"/>
                            </div>
                            <div class="col-md-6">
                                <div class="pt-5"></div>
                                <h1 id="temperature_inside_bedroom_2">0</h1>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="pt-5"></div>

<script>


</script>

<script>
    function change_icon(){
        $("#icon_weather").attr("src","icons/tunder.png");
    }
</script>

<script>
    var temperatura_oczekiwana = 0;
    $(document).ready(function(){
        var now = new Date();

        //dni roboczne 24-5
        if((now.getHours() >= 0) && (now.getHours() <= 4 && now.getMinutes() <= 59) && (now.getDay() < 6) && (now.getMonth() != 7) && (now.getMonth() != 8)){
            temperatura_oczekiwana = 20;
        }
        //dni roboczne 5-24
        if((now.getHours() >= 5) && (now.getHours() <= 23 && now.getMinutes() <= 59 && (now.getDay() < 6) && (now.getMonth() != 7) && (now.getMonth() != 8))){
            temperatura_oczekiwana = 23;
        }
        //dni wolne od pracy
        if((now.getHours() >= 0) && (now.getHours() <= 7 && now.getMinutes() <= 59 && (now.getDay() > 5) && (now.getMonth() != 7) && (now.getMonth() != 8))){
            temperatura_oczekiwana = 20;
        }
        //dni wolne od pracy
        if((now.getHours() >= 8) && (now.getHours() <= 23 && now.getMinutes() <= 59 && (now.getDay() > 5) && (now.getMonth() != 7) && (now.getMonth() != 8))){
            temperatura_oczekiwana = 23;
        }
        //wakacje
        if((now.getHours() >= 0) && (now.getHours() <= 23 && now.getMinutes() <= 59 && (now.getMonth() >= 7) && (now.getMonth() <= 8))){
            temperatura_oczekiwana = 12;
        }

        console.log(temperatura_oczekiwana);
        Cookies.set("ciastko_temperatura_oczekiwana", temperatura_oczekiwana);

    });


</script>



<script>
    function srednia_moc(){
        var srednia_moc_zużycia = 0;

    var now = new Date();
    
    var cieplo_urzadzen = srednia_moc_zużycia * 0.7 * 1000;
    console.log(cieplo_urzadzen);

    }
</script>


<script>
    $(document).ready(function() {
            var now = new Date(); 
            var year = now.getFullYear();
            var month = now.getMonth()+1; 
            var day = now.getDate();
            var hour = now.getHours();
            var minute = now.getMinutes();
            var second = now.getSeconds();

            var weekday = new Array(7);
            weekday[0] = "Sunday";
            weekday[1] = "Monday";
            weekday[2] = "Tuesday";
            weekday[3] = "Wednesday";
            weekday[4] = "Thursday";
            weekday[5] = "Friday";
            weekday[6] = "Saturday";
            var day_of_week = weekday[now.getDay()];

            var mothday = new Array(11);
            mothday[0] = "January";
            mothday[1] = "February";
            mothday[2] = "March";
            mothday[3] = "April";
            mothday[4] = "May";
            mothday[5] = "June";
            mothday[6] = "July";
            mothday[7] = "August";
            mothday[8] = "September";
            mothday[9] = "October";
            mothday[10] = "November";
            mothday[11] = "December";
            var day_of_month = mothday[now.getMonth()];

            console.log(hour + ":" + minute + ":" + second);
            console.log(day + "/" + month + "/" + year);
            console.log(day_of_week);

            $('#month').text(day_of_month);
            $('#day').text(day);
            $('#year').text(year);

            Cookies.set('hour', hour);
            Cookies.set('month', month);

            var srednia_moc_zużycia = 0;

            if(now.getDay() < 6 && now.getHours() >= 0 && now.getHours() <= 4 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
            srednia_moc_zużycia = 0.5;
            }
            if(now.getDay() < 6 && now.getHours() >= 5 && now.getHours() <= 7 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 3;
            }
            if(now.getDay() < 6 && now.getHours() >= 8 && now.getHours() <= 9 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 2;
            }
            if(now.getDay() < 6 && now.getHours() >= 10 && now.getHours() <= 15 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 1;
            }
            if(now.getDay() < 6 && now.getHours() >= 16 && now.getHours() <= 19 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 2;
            }
            if(now.getDay() < 6 && now.getHours() >= 20 && now.getHours() <= 23 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 1;
            }
            //Dni wolne
            if(now.getDay() > 5 && now.getHours() >= 0 && now.getHours() <= 7 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 0.5;
            }
            if(now.getDay() > 5 && now.getHours() >= 8 && now.getHours() <= 11 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 3;
            }
            if(now.getDay() > 5 && now.getHours() >= 12 && now.getHours() <= 16 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 1;
            }
            if(now.getDay() > 5 && now.getHours() >= 17 && now.getHours() <= 23 && now.getMinutes() <= 59 && now.getMonth() != 7 && now.getMonth() != 8){
                srednia_moc_zużycia = 2;
            }
            //Wakacje
            if(now.getHours() >= 0 && now.getHours() <= 23 && now.getMinutes <= 59 && now.getMonth() >= 7 && now.getMonth() <= 8){
                srednia_moc_zużycia = 0.5;
            }
 
            console.log("SREDNIA MOC ZUZYCIA " + srednia_moc_zużycia);
            var heat_cieplo = 0.7 * srednia_moc_zużycia;
            console.log("CIEPELKO " + heat_cieplo);
            Cookies.set('sr_moc_zuz', srednia_moc_zużycia);


    });
</script>


<script>

    var moc_srednia_na_podtrzymanie_all_zrodla = 0;
    var podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 0;
    var czas_spadku_temp_o_1c_bez_ogrzewania = 0;

    $(document).ready(function() {
        var city = "Mielno"
        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + city + "&APPID=ed8384a309dc786e26638d4f92a5860e",function(json){
            var obj = JSON.parse(JSON.stringify(json));
            console.log(obj);
            console.log(obj.main.temp - 273.15 + "°C"); //get temperature
            console.log("Current clouds visible: " + obj.clouds.all + "%"); //get clouds

            var temp_city = obj.main.temp - 273.15;

            Cookies.set('temp', temp_city.toFixed());
            Cookies.set('clouds', obj.clouds.all);

            $('#city').text(city);
            $('#temperature_out').text(" " + temp_city.toFixed() + "°C");

            if(obj.clouds.all <= 90){
                $("#icon_weather").attr("src","icons/sun.png");

            }

            if(obj.clouds.all >= 60 && obj.clouds.all <= 89){
                $("#icon_weather").attr("src","icons/klauds.png");
            }

            if(obj.clouds.all > 59){
                $("#icon_weather").attr("src","icons/cloudy.png");
            }


            if((obj.main.temp - 273.15) > 20){
            moc_srednia_na_podtrzymanie_all_zrodla = 0;
            podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 0;
            czas_spadku_temp_o_1c_bez_ogrzewania = 0;
            }
            if((obj.main.temp - 273.15) > 15 && (obj.main.temp - 273.15) <= 20){
                moc_srednia_na_podtrzymanie_all_zrodla = 0.5;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 2;
                czas_spadku_temp_o_1c_bez_ogrzewania = 6;
            }
            if((obj.main.temp - 273.15) > 5 && (obj.main.temp - 273.15) <= 15){
                moc_srednia_na_podtrzymanie_all_zrodla = 1;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 4;
                czas_spadku_temp_o_1c_bez_ogrzewania = 4;
            }
            if((obj.main.temp - 273.15) > 0 && (obj.main.temp - 273.15) <= 5){
                moc_srednia_na_podtrzymanie_all_zrodla = 2;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 5;
                czas_spadku_temp_o_1c_bez_ogrzewania = 3;
            }
            if((obj.main.temp - 273.15) > -5 && (obj.main.temp - 273.15) <= 0){
                moc_srednia_na_podtrzymanie_all_zrodla = 3;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 6;
                czas_spadku_temp_o_1c_bez_ogrzewania = 2;
            }
            if((obj.main.temp - 273.15) > -10 && (obj.main.temp - 273.15) <= -5){
                moc_srednia_na_podtrzymanie_all_zrodla = 5;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 7;
                czas_spadku_temp_o_1c_bez_ogrzewania = 1;
            }
            if((obj.main.temp - 273.15) > -20 && (obj.main.temp - 273.15) <= -10){
                moc_srednia_na_podtrzymanie_all_zrodla = 7;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 10;
                czas_spadku_temp_o_1c_bez_ogrzewania = 0.5;
            }
            if((obj.main.temp - 273.15) <= -20){
                moc_srednia_na_podtrzymanie_all_zrodla = 9;
                podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h = 12;
                czas_spadku_temp_o_1c_bez_ogrzewania = 0.25;
            }

            Cookies.set("czas_spadku_o_1_s_C", czas_spadku_temp_o_1c_bez_ogrzewania);

            console.log(moc_srednia_na_podtrzymanie_all_zrodla);

            var now = new Date(); 
            var koszt_1kw_pobrane = 0;
            var koszt_1kw_oddane = 0;
            //Miesiace 1-3 i 10-12
            if(now.getDay() < 6 && now.getHours() >= 6 && now.getHours() <= 12 && now.getMinutes() <= 59 && (now.getMonth() >= 1 && now.getMonth() <= 3) || (now.getMonth() >= 10 && now.getMonth() <= 12)){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 6 && now.getHours() <= 12 && now.getMinutes() <= 59 && (now.getMonth() >= 1 && now.getMonth() <= 3) || (now.getMonth() >= 10 && now.getMonth() <= 12)){
                koszt_1kw_pobrane = 2;
                koszt_1kw_oddane = 2.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 6 && now.getHours() <= 12 && now.getMinutes() <= 59 && (now.getMonth() >= 1 && now.getMonth() <= 3) || (now.getMonth() >= 10 && now.getMonth() <= 12)){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 1;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 6 && now.getHours() <= 12 && now.getMinutes() <= 59 && (now.getMonth() >= 1 && now.getMonth() <= 3) || (now.getMonth() >= 10 && now.getMonth() <= 12)){
                koszt_1kw_pobrane = 2;
                koszt_1kw_oddane = 2.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 6 && now.getHours() <= 12 && now.getMinutes() <= 59 && (now.getMonth() >= 1 && now.getMonth() <= 3) || (now.getMonth() >= 10 && now.getMonth() <= 12)){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() > 5 && now.getHours() >= 6 && now.getHours() <= 12 && now.getMinutes() <= 59 && (now.getMonth() >= 1 && now.getMonth() <= 3) || (now.getMonth() >= 10 && now.getMonth() <= 12)){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            //Miesiace 4-9
            if(now.getDay() < 6 && now.getHours() >= 0 && now.getHours() <= 5 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >=  6 && now.getHours() <= 14 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 2;
                koszt_1kw_oddane = 2.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 15 && now.getHours() <= 16 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 1;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 17 && now.getHours() <= 21 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 2;
                koszt_1kw_oddane = 2.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() < 6 && now.getHours() >= 22 && now.getHours() <= 23 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() > 5 && now.getHours() >= 0 && now.getHours() <= 11 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() > 5 && now.getHours() >= 12 && now.getHours() <= 14 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 0.5;
                koszt_1kw_oddane = 0.25;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }
            if(now.getDay() > 5 && now.getHours() >= 15 && now.getHours() <= 23 && now.getMinutes() <= 59 && now.getMonth() >= 4 && now.getMonth() <= 9){
                koszt_1kw_pobrane = 1;
                koszt_1kw_oddane = 0.5;
                Cookies.set("koszt_pobranego", koszt_1kw_pobrane);
            }

            console.log(koszt_1kw_pobrane);
            console.log(koszt_1kw_oddane);
            var zmienna_lokalna_1 = Cookies.get('sr_moc_zuz');
            if(temp_city < 20){
                var total_waste = Number(zmienna_lokalna_1) + 12 + podtrzymanie_plus_podniesienie_temp_o_1c_w_ciągu_1h;
            }
            if(temp_city > 20){
                var total_waste = Number(zmienna_lokalna_1) + 12;
            }
            console.log("Total wasted: " + total_waste);
            Cookies.set("total_waste", total_waste);

        });
    });
</script>




<script>
    let temperatura_inside = 0;
     $(document).ready(function() {
    ///////////LOSOWANKO kV na akumulatorze
    var battery_buffor = Math.floor(Math.random() * (7 - 0) ) + 0;
       $('#battery_voltage').text(battery_buffor + "kWh");

    ///////////LOSOWANKO L na boilerze
    var battery_buffor = Math.floor(Math.random() * (150 - 0) ) + 0;
       $('#boiler_buffor').text(battery_buffor + "L");
       Cookies.set("boiler_buffor_cookie", battery_buffor);

    ///////////LOSOWANKO temperatury wewnętrznej
    temperatura_inside = Math.floor(Math.random() * (23 - 12) ) + 12;
       $('#temperature_inside_kitchen').text(temperatura_inside + "°C");
       $('#temperature_inside_livingroom').text(temperatura_inside + "°C");
       $('#temperature_inside_bathroom').text(temperatura_inside + "°C");
       $('#temperature_inside_diningroom').text(temperatura_inside + "°C");
       $('#temperature_inside_studyroom').text(temperatura_inside + "°C");
       $('#temperature_inside_bedroom_1').text(temperatura_inside + "°C");
       $('#temperature_inside_bedroom_2').text(temperatura_inside + "°C");


       window.onload = function() {
        clock();  
            function clock() {
            var now = new Date();
            var TwentyFourHour = now.getHours();
            var hour = now.getHours() + inc;
            var min = now.getMinutes();
            var sec = now.getSeconds();
            var mid = 'pm';
            if (min < 10) {
            min = "0" + min;
            }    
        document.getElementById('currentTime').innerHTML =     hour+':'+min+':'+sec;
            setTimeout(clock, 1000);
            }
        }

        });

</script>

<script>
    var value_plus_minus = 0;
    var temp_ocz = Cookies.get('ciastko_temperatura_oczekiwana');
    var czastspadku = Cookies.get('czas_spadku_o_1_s_C');
    let inc = 0
    function add_one(){
        console.log(temp_ocz);
            if(temp_ocz < temperatura_inside){
                temperatura_inside = -- temperatura_inside;
                $('#temperature_inside_kitchen').text(temperatura_inside + "°C");
                $('#temperature_inside_livingroom').text(temperatura_inside + "°C");
                $('#temperature_inside_bathroom').text(temperatura_inside + "°C");
                $('#temperature_inside_diningroom').text(temperatura_inside + "°C");
                $('#temperature_inside_studyroom').text(temperatura_inside + "°C");
                $('#temperature_inside_bedroom_1').text(temperatura_inside + "°C");
                $('#temperature_inside_bedroom_2').text(temperatura_inside + "°C");
            }
            
            if(temp_ocz > temperatura_inside){
                temperatura_inside = ++ temperatura_inside;
                $('#temperature_inside_kitchen').text(temperatura_inside + "°C");
                $('#temperature_inside_livingroom').text(temperatura_inside + "°C");
                $('#temperature_inside_bathroom').text(temperatura_inside + "°C");
                $('#temperature_inside_diningroom').text(temperatura_inside + "°C");
                $('#temperature_inside_studyroom').text(temperatura_inside + "°C");
                $('#temperature_inside_bedroom_1').text(temperatura_inside + "°C");
                $('#temperature_inside_bedroom_2').text(temperatura_inside + "°C");
            }

            if(temp_ocz == temperatura_inside){
                $('#temperature_inside_kitchen').text(temperatura_inside + "°C");
                $('#temperature_inside_livingroom').text(temperatura_inside + "°C");
                $('#temperature_inside_bathroom').text(temperatura_inside + "°C");
                $('#temperature_inside_diningroom').text(temperatura_inside + "°C");
                $('#temperature_inside_studyroom').text(temperatura_inside + "°C");
                $('#temperature_inside_bedroom_1').text(temperatura_inside + "°C");
                $('#temperature_inside_bedroom_2').text(temperatura_inside + "°C");
            }
            inc++;
            console.log(temperatura_inside);
            let total_waste_cookies = Cookies.get("total_waste");
            console.log(total_waste_cookies);

            let generator_cookies = Cookies.get("power_genertor");
            console.log(generator_cookies);

            total_waste_cookies = total_waste_cookies - generator_cookies;
            console.log(total_waste_cookies);

            let koszt_pobranego_go = Cookies.get("koszt_pobranego");
            console.log(koszt_pobranego_go);

            var total_costs = total_waste_cookies * koszt_pobranego_go;
    }
</script>

<script>
</script>



<?php
$month_photo = $_COOKIE["month"];
$hours_photo = $_COOKIE["hour"];
$clouds_photo = $_COOKIE["clouds"];

$sql = "SELECT POWER_GEN, ID FROM efficiency_of_panels WHERE ( IF (CLOUDS_TO = 90, 1, 0) = 0 AND MONTHS = '$month_photo' AND HOURS_FROM <= '$hours_photo' AND HOURS_TO >= '$hours_photo' AND CLOUDS_FROM <= '$clouds_photo' AND CLOUDS_TO >= '$clouds_photo') OR (HOURS_FROM - HOURS_TO > 0 AND MONTHS = '$month_photo' AND HOURS_FROM >= '$hours_photo' AND HOURS_TO >= '$hours_photo' AND CLOUDS_FROM <= '$clouds_photo' AND CLOUDS_TO >= '$clouds_photo')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
    <script>
        $(document).ready(function() {
        var power_gen = <?php echo $row['POWER_GEN']; ?>;
        $('#power_foto').text(power_gen + "kW");
        Cookies.set("power_genertor", power_gen);
        });
    </script>

<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>




    </body>

</html>