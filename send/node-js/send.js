const qs = require("qs");
const axios = require("axios");
const https = require("https");
function sendTest() {
  axios
    .post(
      "https://api.blsmsgw.com:8443/bin/send?",
      qs.stringify({
        "USERNAME":"<ENTER USERNAME>",
        "PASSWORD":"<ENTER PASSWORD>",
        "DESTADDR":"<ENTER DESTINATION NUMBER>",
        "SOURCEADDR":"<ENTER YOUR SOURCE ADDRESS>",
        "CHARCODE":"0",
        "MESSAGE":"<ENTER MESSAGE TO SEND>"
      }),
      {
        headers: { "cache-control": "no-cache" },
        httpsAgent: new https.Agent({
          rejectUnauthorized: false,
        }),
      }
    )
    .then(
      (response) => {
        console.log(response);
        return response;
      },
      (error) => {
        console.log(error);
      }
    );
}
sendTest();