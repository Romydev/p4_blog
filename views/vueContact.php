<h1>Contact us</h1>

<p>Contact us using the form below.</p>

<form method="post" id="form-email">
        Your email<br />
        <input type="email" name="email" required="required" value="<?php if (isset($_POST['email'])) echo(htmlspecialchars($_POST['email'])); ?>" /><br />
        Antispam - enter the current year<br />
        <input type="text" name="abc" required="required" /><br />
        <textarea name="message"><?php if (isset($_POST['message'])) echo(htmlspecialchars($_POST['message'])); ?></textarea><br />
        <input type="submit" value="Send" />
</form>