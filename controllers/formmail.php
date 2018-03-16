<?php
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}


session_start();

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: http://www.r-freelance.com/projet8/index.php?action=contact');
}
else{
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $headers = 'FROM: ';
    mail('romy972@gmail.com', 'Formulaire de contact', $message, $headers);
    header('Location: http://www.r-freelance.com/projet8/index.php?action=contact');
}

?>
