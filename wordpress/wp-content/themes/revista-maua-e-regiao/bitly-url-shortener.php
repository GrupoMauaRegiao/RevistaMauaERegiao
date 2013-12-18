<?php
  /**
  * 
  * Gera uma url curta (short url) a partir de uma longa (long url) 
  * utilizando a API do bit.ly
  *
  * @author marcker <marckfree@gmail.com>
  *
  * @param string $url A URL longa
  * @param string $apiToken Seu API Token
  *
  * @return string
  *
  */
  function urlShortBitly($url, $apiToken) {
    $urlAPI = "https://api-ssl.bitly.com/v3/shorten?access_token=$apiToken&longUrl=";
    $request = file_get_contents($urlAPI . $url);
    $request = json_decode($request, true);
    return $request[data][url];
  }
?>