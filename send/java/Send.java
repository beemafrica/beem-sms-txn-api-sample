
    import java.io.BufferedReader;
    import java.io.IOException;
    import java.io.InputStreamReader;
    import java.net.HttpURLConnection;
    import java.net.URL;
    import java.net.URLEncoder;
    import java.net.UnknownHostException;
    .@SuppressWarnings("unused")
    public class Sending 
    {

        private static boolean result;
        
        private static HttpURLConnection con;
        
        public Sending() {
            // TODO Auto-generated constructor stub
        }
        
        public static void main(String[] args) throws IOException {
            // TODO Auto-generated method stub
            
            String username = "&USERNAME=" + URLEncoder.encode("Enter your username", "UTF-8");
            String password = "&PASSWORD=" + URLEncoder.encode("Enter your password", "UTF-8");
            String destnum = "&DESTADDR=" + URLEncoder.encode("Enter your destination number", "UTF-8");
            String source_address = "&SOURCEADDR=" + URLEncoder.encode("Enter your sourcr address", "UTF-8");
            String message = "&MESSAGE=" + URLEncoder.encode("Enter your message here", "UTF-8");

		    String url = "http://api.blsmsgw.com:8080/bin/send?USERNAME=" + username + "&PASSWORD=" + password + "&DESTADDR=" + destnum + "&SOURCEADDR=" + source_address + "&MESSAGE=" + message;
	
        try 
        {

            URL myurl = new URL(url);
            con = (HttpURLConnection) myurl.openConnection();

            con.setRequestMethod("GET");

            StringBuilder content;

        try (BufferedReader in = new BufferedReader(
                new InputStreamReader(con.getInputStream()))) {

            String line;
            content = new StringBuilder();

        while ((line = in.readLine()) != null) {
                content.append(line);
                content.append(System.lineSeparator());
            }
        }
            System.out.println(content.toString());
        } finally {
            
            con.disconnect();
        }
    }
}