Ext.setup({
    tabletStartupScreen: 'tablet_startup.jpg',
    phoneStartupScreen: 'phone_startup.jpg',
    tabletIcon: 'icon-ipad.png',
    phoneIcon: 'icon-iphone.png',
    glossOnIcon: false,
    onReady: function() {
 
/$.ajax({
    type: 'GET',
    url: 'http://otter.topsy.com/searchcount.json?q=%23misc12&type=tweet',
    async: false,
    jsonpCallback: 'jsonCallback',
    contentType: "application/json",
    dataType: 'jsonp',
    success: function(data)
    {
 var textejson = JSON.stringify(data.response.a)
alert(textejson);
        
    },
    error: function(e)
    {
       alert(e.message);
    }
});


var store3 = new Ext.data.JsonStore({
    fields: ['name', 'data1'],
    data: [
        {'name':'#UpDouceur', 'data1':res},
        {'name':'#UpEpice', 'data1':res2},

    ]
});

Ext.get('misc11').setWidth(res*10);
Ext.get('misc12').setWidth(res2*10);


    }
});
