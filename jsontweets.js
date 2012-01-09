$.getJSON("http://otter.topsy.com/searchcount.json?q=%23misc12&type=tweet&callback=?",
function(response){
$('#UpEpice').append(response.response.a);
});

$.getJSON("http://otter.topsy.com/searchcount.json?q=%23misc11&type=tweet&callback=?",
function(response2){
$('#UpDouceur').append(response2.response.a);
});
