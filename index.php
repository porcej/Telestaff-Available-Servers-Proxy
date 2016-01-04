<?php
/*
 * Author - Joe Porcelli <porcej@gmail.com>
 *
 *The MIT License (MIT)
 *
 *Copyright (c) 2016 Joe Porcelli
 *
 *Permission is hereby granted, free of charge, to any person obtaining a copy
 *of this software and associated documentation files (the "Software"), to deal
 *in the Software without restriction, including without limitation the rights
 *to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *copies of the Software, and to permit persons to whom the Software is
 *furnished to do so, subject to the following conditions:
 *
 *The above copyright notice and this permission notice shall be included in all
 *copies or substantial portions of the Software.

 *THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *SOFTWARE.
  *
  *
 */

session_start();

/* config settings */
$url = "https://www.telestaff.net/web/availableServers/";  //set this to the url you want to scrape

// Open the cURL session
$curlSession = curl_init();

curl_setopt ($curlSession, CURLOPT_URL, $url);
curl_setopt ($curlSession, CURLOPT_HEADER, 0);

//curl_setopt($curlSession, CURLOPT_RETURNTRANSFER,1);
curl_setopt($curlSession, CURLOPT_TIMEOUT,30);
curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 1);


//Send the request and store the result in an array
$response = curl_exec ($curlSession);

// Check that a connection was made
if (curl_error($curlSession)){
        // If it wasn't...
        print "<center>Oh no, something went wrong....: </center><br><hr>";
        print curl_error($curlSession);
        print "<hr>";
} else {
  print $respone;
}

curl_close ($curlSession);


?>
