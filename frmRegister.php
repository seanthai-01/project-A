<?php include('funHeader.php');?>
<fieldset>
    <legend align="center"><h1>Register</h1></legend>
    <form action="insRegister.php" method="post" target="_self">
        <table align="center">
            <tr>
                <td>
                    <label for="txtCompanyName">Company Name</label>
                </td>
                <td>
                    <input type="text" name="txtCompanyName" id="txtCompanyName" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtFirstname">Firstname</label>
                </td>
                <td>
                    <input type="text" name="txtFirstname" id="txtFirstname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtSurname">Surname</label>
                </td>
                <td>
                    <input type="text" name="txtSurname" id="txtSurname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtUsername">Username</label>
                </td>
                <td>
                    <input type="text" name="txtUsername" id="txtUsername" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtPass">Password</label>
                </td>
                <td>
                    <input type="password" name="txtPass" id="txtPass" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tytPassword">Confirm Password</label>
                </td>
                <td>
                    <input type="password" name="txtPassword" id="txtPassword" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtEmail">E-mail</label>
                </td>
                <td>
                    <input type="email" name="txtEmail" id="txtEmail" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="left">
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>
</fieldset>
<?php include('funFooter.php'); ?>