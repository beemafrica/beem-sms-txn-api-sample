const axios = require('axios');
 const url = `https://www.blsmsgw.com/portal/api/userAccountBalance`;
 const https = require('https');
 const btoa = require('btoa');

 const username = 'primarytest';
 const password = 'L3kPqY@k';
 
 function checkbalance() {
 axios
 .get(url, {
 headers: {
 'Content-Type': 'content_type',
 Authorization: 'Basic ' + btoa(username + ':' + password),
 },
 httpsAgent: new https.Agent({
 rejectUnauthorized: false,
 }),
 })
 .then((response) => console.log(response.data))
 .catch((error) => console.error(error));
 }
 checkbalance();