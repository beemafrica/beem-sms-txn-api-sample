from flask import Flask,request,jsonify,Response
 import json
 import requests
 
 #import pyodbc;
 app = Flask(__name__)
 
 @app.route('/',methods=['GET','POST'])
 def send_twoway_sms():
 URL = 'https://api.blsmsgw.com:8443/bin/send'
 username = 'USERNAME'
 password = 'PASSWORD'
 content_type = 'application/json'
 
 ##### Replace username and password with your own
 ###### Send the post request to Beem !! 
 first_request = requests.post(url=URL,data={
 'USERNAME':username,
 'PASSWORD':password,
 'DESTADDR':'255762265939',
 'SOURCEADDR':'Beem',
 'CHARCODE':'0',
 'MESSAGE':'Hi there, it's Two-way SMS test from Python API'
 },
 headers = { 
 'cache-control': 'no-cache',
 'Content-Type': content_type,
 },
 verify=False)
 ####### Replace the dest_addr with your phone number
 #######***************************#######
 
 ## Return the response status code ! 200 for valid (OK) response !!
 print(first_request)
 print(first_request.__dict__)
 response_status = {'status_code': str((first_request.__dict__)['status_code'])}
 return (response_status)
 
 #####Internal  error handler
 @app.errorhandler(500)
 def server_error(e):
 errorName='Error'
 return Response(
 json.dumps(errorName),
 status=500,
 )
 
 if __name__ == '__main__':
 app.run(debug=True)