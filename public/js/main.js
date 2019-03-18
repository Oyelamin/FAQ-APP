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
                
                $(".boxes").not("." + optionValue).hide('slow');
                $("." + optionValue).show('slow');
                
            } else{
                
                $(".boxes").hide('slow');
                
            }
        });
    }).change();
});

setTimeout(function() {
    $('.notification').slideUp()
}, 5000);

function showAttachment(){

    document.getElementById('attachment').style.display='block';
    document.getElementById('attach-fetcher').style.display='none';

}
//Contact Options
function showOpt(){

    document.getElementById('showOpt').style.display='none';
    document.getElementById('hideOpt').style.display='block';
    document.getElementById('opt-content').style.display='block';

}

function hideOpt(){

    document.getElementById('showOpt').style.display='block';
    document.getElementById('hideOpt').style.display= 'none';
    document.getElementById('opt-content').style.display='none';

}

// Phone Number
$(function() {

    $(".number_input").keyup(function () {

        if (this.value.length == this.maxLength) {
            $(this).next('.number_input').focus();
        }
        
    });

});
