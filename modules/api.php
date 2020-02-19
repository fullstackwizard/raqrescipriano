<?php 
  
  $link = "https://reqres.in/api/users?page=1";
  $ch = curl_init($link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($ch);
  curl_close($ch);

  $link_2 = "https://reqres.in/api/users?page=2";
  $ch_2 = curl_init($link_2);
  curl_setopt($ch_2, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch_2, CURLOPT_SSL_VERIFYPEER, false);
  $response_2 = curl_exec($ch_2);
  curl_close($ch_2);


  $users = json_decode($response, true);
  $users2 = json_decode($response_2, true);

  $merge = array_merge_recursive($users, $users2);
  
  $lists = $merge['data'];


?> 