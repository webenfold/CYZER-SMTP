<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" id="Montserrat-css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700"
    type="text/css" media="all" />
  <style>
    .body {
      border: 1px solid #ccc;
      border-radius: 4px;
      overflow: hidden;
      color: #555;
      font-family: "Montserrat", sans-serif;
      max-width: 800px;
      margin: 20px auto;
    }

    .header img {
      width: 100%;
    }

    .content h1 {
      text-align: center;
      margin: 50px 10px;
      color: #444;
      font-size: 28px;
    }

    .content p {
      text-align: center;
      margin: 20px 10px;
      font-size: 16px;
    }

    .content>div {
      display: block;
      text-align: center;
      padding: 20px 0 50px;
    }

    .content>div a {
      display: inline-block;
      text-align: center;
      padding: 10px 40px;
      background-color: #0485A4;
      color: #fff;
      text-decoration: none;
      border-radius: 100px;
    }

    .footer {
      background-color: #344146;
    }

    .footer p {
      margin: 0;
      line-height: 50px;
      text-align: center;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="body">
    <div class="header"><img src="https://imgur.com/download/fVoz4Ge/" /></div>
    <div class="content">
      <h1>{{heading}}</h1>
      <p>{{content}}</p>
      <div><a href="{{link}}" target="_blank">{{link_name}}</a></div>

    </div>
    <div class="footer">
      <p>Copyright © 2019 Lazarus Network.</p>
    </div>
  </div>
</body>

</html>
