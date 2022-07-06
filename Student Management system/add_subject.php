<html>
    <head>
    <style>
			fieldset{
		border: 1px solid black;
		width: 50%;
		margin:auto;
		}
	a{
		color:inherit;
		text-decoration:none;
	}
	</style>
    </head>
    <body>
        <fieldset>
        <legend>Subjects</legend>
        <table>
        <form action="add_subjectprocess.php" method = "post">
            <tr><th>Subject Code</th><td>:</td><td> <input type="text" name="sub_code"></td></tr>
            <tr><th>Subject Name</th><td>:</td><td> <input type="text" name="sub_name"></td></tr>
            <tr><th>Subject Description</th><td>:</td><td> <textarea  name="sub_desc"></textarea></td></tr>
            <tr><th>Subject Credit</th><td>:</td> <td><input type="number" name="sub_cred"></td></tr>
            <input type="submit" value="Register">
        </form>
        </table>
        </fieldset>
    </body>
</html>
