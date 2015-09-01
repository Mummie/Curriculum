var http = require('http');
var superagent = require('superagent');

var baseUrl = 'http://www.giantbomb.com/api/';

  superagent.get(baseUrl + "/games");
  superagent.query({'api_key': "123ce3f8e46f16280fb9e33555dacd12198560ca"});
  superagent.end(function(err,res){
    
    console.log("working",res,err);
    
  });