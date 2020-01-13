<?php include('../inc/header.inc.php') ?>

<form method='post' action='createAccount.php'>
    <label>Nom d'utilisateur</label>
    <input type="text" name='username' id='username' placeholder="Nom d'utilisateur">

    <label>Mail</label>
    <input type='email' name='mail' id='mail' placeholder="Mail">

    <label>Roles</label>
    <select name='role' id='role'>
        <option disabled selected>Choississez un role</option>
        <option>Créateur</option>
        <option>Spectateur</option>
    </select>

    <label>Mot de Passe</label>
    <input type="password" name='password' id='password' placeholder='Mot de Passe'>

    <input type='submit' value='Envoyer'>
</form>

<?php include ('../inc/footer.inc.php') ?>