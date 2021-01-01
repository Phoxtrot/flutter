<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>DONATE</h2>
                <div class="underline-title"></div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam possimus reiciendis non id ullam, magni nulla numquam! Illum, et autem quia reprehenderit impedit fuga, dolores error soluta dicta perferendis omnis totam, temporibus ullam accusamus praesentium ad doloremque nemo id consequatur in adipisci rerum veniam sunt. Possimus consequuntur distinctio error eligendi!</p>
            <form action="pay.php" method="post" class="form">
                <label for="name" style="padding-top: 13px;">
                    &nbsp; Name
                </label>
                <input type="text" id="name" name="name" class="form-content"required />
                <div class="form-border"></div>
                <label for="email" style="padding-top: 22px;">
                    &nbsp; Email
                </label>
                <input type="email" id="email" name="email" class="form-content"required />
                <div class="form-border"></div>
                <label for="amount" style="padding-top: 22px;">
                    &nbsp; Amount
                </label>
                <input type="text" id="amount" name="amount" class="form-content"required  placeholder="NGN"/>
                
                <div class="form-border"></div>
                <input type="submit" id="submit-btn" name="submit" value="DONATE" placeholder="DONATE">
            </form>
        </div>
    </div>
</body>
</html>
