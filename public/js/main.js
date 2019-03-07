function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-orange", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-border-orange";
    document.getElementById('showing').style.display = "none";

}
function showMore(){
  document.getElementById('more').style.display='block';
  document.getElementById('less').style.display='block';
  document.getElementById('hide').style.display='none';
}
function showLess(){
  document.getElementById('more').style.display='none';
  document.getElementById('less').style.display='none';
  document.getElementById('hide').style.display='block';
}

$(document).ready(function(){
    $("select").change(function(){
        
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                
                $(".boxes").not("." + optionValue).hide();
                $("." + optionValue).show();
                
            } else{
                
                $(".boxes").hide();
                
            }
        });
    }).change();
});