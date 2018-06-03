<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-md-offset-2">
          <div>
            <h3>ĐĂNG NHẬP TÀI KHOẢN</h3>
          </div>
          <form action="dashboard" method="post">
            <div class="form-group">
              <label>Email:</label>
              <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control" placeholder="Enter email" name="emailAd">
            </div>
            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control" placeholder="Enter password" name="passwordAd">
            </div>
            <div class="pull-xs-left" style="margin-bottom: 25px">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
