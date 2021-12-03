<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <div class="w-96 mx-auto text-center  rounded-md shadow-lg mt-28">
    <div class=" flex justify-center">
      <img width="80%" src="image/c.png" alt="">
    </div>
    <div>
      <form action="login_submit.php" method="POST">
        <div class="text-center text-blue-500 font-bold">
          Tên đăng nhập
        </div>
        <input type="text" name="username"
          class="w-80 mx-auto mt-2 border border-blue-400 rounded-md h-10 text-center focus:outline-none focus:ring-2 focus:border-blue-500"
          placeholder="Tên đăng nhập">
        <div class="text-center  text-blue-500 font-bold mt-4">
          Mật khẩu
        </div>
        <input type="password" name="password"
          class="w-80 mx-auto mt-2 border border-blue-400 rounded-md h-10 text-center focus:outline-none focus:ring-2 focus:border-blue-500"
          placeholder="Mật khẩu">
        <div>
          <button class="px-4 py-2 bg-blue-400 rounded-full text-white mt-4 hover:bg-blue-500" type="submit">
            Đăng nhập
          </button>
        </div>
      </form>
    </div>
    <div class="py-6 text-gray-600">
        <a href="###">Quên mật khẩu</a> <br>
        <a href="###">Bạn chưa có tài khoản? Đăng kí ngay!</a>
    </div>
  </div>
</body>

</html>