<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ZuriBoard PHP Form Task</title>

    <style type="text/css">

    h1{
        color: navy;
        margin-left:30px;
        text-decoration:underline;
    }
    form{
        margin-left:30px;
    }

    label{
        font-weight:600;
    }

    input,select{
        margin-bottom:15px;
        padding:5px;
        
        
    }

    input[type="submit"]{
        margin-left:100px;
        padding:8px;
        width:100px;
        background:navy;
        color:#fff;
        border:0;
        outline:0;
        border-radius:5px;
    }
</style>

</head> 

<body>
    <h1>Form</h1>
    <form action="user_data.php" method="POST">
        <label for="name">
            Name:

            <input type="text" name="name" >
        </label>
        <br>

        <label for="email">
            Email:

            <input type="email" name="email" >
        </label>
        <br>

        <label for="dob">
            Date of Birth:

            <input type="date" name="dob" >
        </label>
        <br>

        <label for="gender">
            Gender:
        </label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        
        <br>

        <label for="country">
           Country:

            <input type="text" name="country" >
        </label>
        <br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>