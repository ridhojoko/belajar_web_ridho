<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "ppdb";
  return mysqli_connect($server, $username, $password, $database);
}

function q($data)
{
  $koneksi = koneksi();
  return mysqli_query($koneksi, $data);
}

function qs($data)
{
  return mysqli_fetch_assoc(q($data));
}

function prodi()
{
  return q("SELECT * FROM prodi");
}
