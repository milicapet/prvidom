<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Prijava/Registracija</title>
</head>

<body>
    <div class="form">

        <ul class="tab-group">
            <li class="tab"><a href="#signup">Registracija</a></li>
            <li class="tab active"><a href="#login">Prijava</a></li>
        </ul>

        <h1>Tango Natural</h1>
        <img src=http://tangonatural.com/wp-content/uploads/2016/10/bte-logo.svg class="center"><br>

        <div class="tab-content">

            <div id="login">
                <h1>Dobrodošli!!!</h1>
                <form action="index.php" method="post" autocomplete="off">

                    <div class="field-wrap">
                        <label>
                            Email<span class="req">*</span>
                        </label>
                        <input type="email" required autocomplete="off" name="email" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Lozinka<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="password" />
                    </div>

                    <button class="button button-block" name="loginbtn">Prijava</button>

                </form>
            </div>


            <div id="signup">
                <h1>Registracija</h1>

                <form action="index.php" method="post" autocomplete="off">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Ime<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name='firstname' />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Prezime<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name='lastname' />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email<span class="req">*</span>
                        </label>
                        <input type="email" required autocomplete="off" name='email' />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Lozinka<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name='password' />
                    </div>

                    <button type="submit" class="button button-block" name="registerbtn">Registracija</button>

                </form>
            </div>

        </div>

    </div>


</body>

</html>