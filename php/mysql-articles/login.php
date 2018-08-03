<?php

require_once "init.php";

//   eğer kullanıcı adı ve parola geldiyse bu bilgilere sahip bir kullanıcı var mı diye bakarız ve varsa o kullancının adını ve id'sini SESSION'a ekleriz

if (isset($_POST['username']) && isset($_POST['password'])) {
    $check = $connection->prepare("SELECT * FROM users WHERE username = :username AND password = :pass_hash");
    $check->execute(
        array(
            'username' => $_POST['username'],
            'pass_hash' => hash('sha256', $_POST['password']),
        )
    );
    $user = $check->fetch(PDO::FETCH_OBJ);
    if (isset($user->id)) {
        //   kullacını adı ve parolanın eşleştiği bir satır var, giriş yaptırıp ana sayfaya atalım
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['is_admin'] = $user->is_admin;
        header("Location: index.php");
        die();
    }
}

?>
<form method="post">
  <input type="text" name="username">
  <input type="password" name="password"><br>
  <button type="submit">gir</button>
</form>
