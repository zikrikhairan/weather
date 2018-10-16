function weather_by_city(location){
    start_loading()
    $.ajax({
        method: "GET",
        url: url_location+"/"+location,
    }).done(function(data) {
        if(data.length>0){
            $.ajax({
                method: "GET",
                url: url_weather+"/"+data[0]["woeid"],
            }).done(function(response) {
                for(var i = 0; i < response["consolidated_weather"].length; i++){
                    $("span[name='weather["+i+"][the_temp]']").text(parseInt(response["consolidated_weather"][i]["the_temp"]));
                    $("span[name='weather["+i+"][min_temp]']").text(parseInt(response["consolidated_weather"][i]["min_temp"]));
                    $("span[name='weather["+i+"][max_temp]']").text(parseInt(response["consolidated_weather"][i]["max_temp"]));
                    $("img[name='weather["+i+"][image]']").attr('src', url_image+"/"+response["consolidated_weather"][i]["weather_state_abbr"]+".svg");
                    $("h1[name='weather["+i+"][weather_state_name]']").html(response["consolidated_weather"][i]["weather_state_name"]);
                }
                $("span[name='weather[wind_speed]']").text(parseInt(response["consolidated_weather"][0]["wind_speed"]));
                finish_loading()
            });
        }
        else{
            finish_loading()
            alert("City Not Found");
        }
    });
}
function weather_by_lat_long(latitude, longitude){
    start_loading()
    $.ajax({
        method: "GET",
        url: url_location+"/"+latidude+"/"+longitude,
    }).done(function(data) {
        if(data.length>0){
            $.ajax({
                method: "GET",
                url: url_weather+"/"+data[0]["woeid"],
            }).done(function(response) {
                for(var i = 0; i < response["consolidated_weather"].length; i++){
                    $("span[name='weather["+i+"][the_temp]']").text(parseInt(response["consolidated_weather"][i]["the_temp"]));
                    $("span[name='weather["+i+"][min_temp]']").text(parseInt(response["consolidated_weather"][i]["min_temp"]));
                    $("span[name='weather["+i+"][max_temp]']").text(parseInt(response["consolidated_weather"][i]["max_temp"]));
                    $("img[name='weather["+i+"][image]']").attr('src', url_image+"/"+response["consolidated_weather"][i]["weather_state_abbr"]+".svg");
                    $("h1[name='weather["+i+"][weather_state_name]']").html(response["consolidated_weather"][i]["weather_state_name"]);
                }
                $("span[name='weather[wind_speed]']").html(response["consolidated_weather"][i]["wind_speed"]);
                finish_loading()
            });
        }
        else{
            alert("City Not Found");
            finish_loading()
        }
    });
}
function find_city(keyword){
    start_loading()
    $.ajax({
        method: "GET",
        url: url_save+"/"+keyword,
    }).done(function(data) {
        return true;
    });
    weather_by_city(keyword);
}

function start_loading(){
    $(".modal").show();
    $("body").addClass("loading")
}
function finish_loading(){
    $(".modal").hide();
    $("body").removeClass("loading")
}