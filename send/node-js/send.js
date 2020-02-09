
var request = require("request");

url: 'http://api.blsmsgw.com:8080/bin/send?',
qs:{
        USERNAME: 'Enter your username',
        PASSWORD: 'Enter your password',
        DESTADDR: 'Enter your Destnation address',
        MESSAGE: 'Enter your message',
        format: 'json' 
    },
headers: {
    'cache-control': 'no-cache'
    } 
};

request(options, function (error, response, body) {
    if (error) throw new Error(error);
        console.log(body);
    }
);