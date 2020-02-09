import requests
import urllib.request
import urllib.parse
  
            USERNAME:Enter your user name,
            PASSWORD: Enter your apssword,
            SOURCEADDR: Enter your sourceaddress,
            DESTNUM:Enter your Destnationaton number,
            MESSAGE:Enter your Message

req = sendSMS(
            USERNAME:USERNAME,
            PASSWORD: PASSWORD,
            SOURCEADDR: SOURCEADDR,
            DESTNUM:DESTNUM,
            MESSAGE:MESSAGE
)

def sendSMS( USERNAME, PASSWORD, SOURCEADDR, DESTNUM, MESSAGE,):
        params = 
        {
            'USERNAME':USERNAME,
            'PASSWORD': PASSWORD,
            'SOURCEADDR': SOURCEADDR,
            'DESTNUM':DESTNUM,
            'MESSAGE':MESSAGE
            
        }
        
        url = 'http://api.blsmsgw.com:8080/bin/send?{params}'.format(params=urllib.parse.urlencode(params))

        return requests.get(url, params=params)  

        print (req)