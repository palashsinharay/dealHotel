 <?php
/**
 * This class extends the core Encrypt class, and allows you
 * to use encrypted strings in your URLs.
 */
//class MY_Encrypt extends CI_Encrypt
//{
    /**
     * Encodes a string.
     * 
     * @param string $string The string to encrypt.
     * @param string $key[optional] The key to encrypt with.
     * @param bool $url_safe[optional] Specifies whether or not the
     *                returned string should be url-safe.
     * @return string
     */
   function encode($str="")
    {
        return strtr(
                base64_encode($str),
                array(
                    '+' => '.',
                    '=' => '-',
                    '/' => '~'
                )
            );
    }
    function decode($str="")
    {
        return base64_decode(strtr(
                $str, 
                array(
                    '.' => '+',
                    '-' => '=',
                    '~' => '/'
                )
            ));
    }
    
    function getCountryName()
    {
            
	    
             //echo $SqlInfo="SELECT  country_name FROM  countries_ip  WHERE ('".str_replace(".", "", getenv("REMOTE_ADDR")) ."' BETWEEN ip_from AND ip_to)";
              echo $SqlInfo="SELECT  country_name FROM  countries_ip  WHERE ('".str_replace(".", "", getenv("REMOTE_ADDR")) ."' BETWEEN ip_from AND ip_to)";
             $query = $this->db->query($SqlInfo);
             $this->result = $query->result();             
		//echo $this->db->last_query();
                echo "<pre>";
		print_r($this->result);
		echo "</pre>";
                //die();
	       //return $this->result;

    }
    
//    function test()
//    {
//        echo "hii";
//    }
    
//}

// End of file: MY_Encrypt.php
// Location: ./system/application/helpers/MY_Encrypt.php  