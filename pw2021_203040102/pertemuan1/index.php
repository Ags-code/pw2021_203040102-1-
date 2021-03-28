<?php
// pertemuan 2 - PHP Dasar
// sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi booleh mengandung avgka
// $nama = "Agung Septiana";

// echo 'Halo, nama saya $nama';

// Operator 
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;
// Penggabung String / concatenation / concat
// .
// $nama_depan = "Agung";
// $nama_belakang = "Septiana";
// echo $nama_depan . " " . $nama_belakang;
// Assigment

// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Agung";
// $nama .= " ";
// $nama .= "Septiana";
// echo $nama;

// perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>
