$(function(){

$('#list li').hover(
function(){
$(this).css('border-bottom','solid 4px white')
.css('background-color','gray');
},
function(){
$(this).css('background-color','black')
.css('border-bottom','solid 0px white');
});

$('#login-show').click(function(){
$('#login-modal').fadeIn();
});

$('#modal-end').click(function(){
$('#login-modal').fadeOut();
});

$('#marion').click(function(){
$('#video-modal').fadeIn();
});

});
