<?php
// contoh controller
$title = "Halaman Beranda";
$content = "views/home.php";


//variable components
$carousel = "views/components/carousel.php";
$modal = "views/components/modal.php";
$toast = "views/components/toast.php";
$footer = "views/components/footer.php";
$navbar = "views/components/navbar.php";
$sidebar = "views/components/sidebar.php";
$form = "views/components/form.php";

$fields = [
    [
      'name' => 'username',
      'label' => 'Username',
      'type' => 'text',
      'placeholder' => 'Choose a username',
      'required' => true,
    ],
    [
      'name' => 'email',
      'label' => 'Email Address',
      'type' => 'email',
      'placeholder' => 'Enter your email',
      'required' => true,
    ],
    [
      'name' => 'password',
      'label' => 'Password',
      'type' => 'password',
      'placeholder' => 'Create a password',
      'required' => true,
    ]
  ];

  $submitText = "Login"; 

include 'views/layout/layout.php';
