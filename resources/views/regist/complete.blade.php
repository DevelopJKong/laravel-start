<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete</title>
</head>
<body>
    {{ $user->name }} 님을 등록하였습니다
    <div class="redirect">
        <p><span class="text">5</span>초 뒤에 홈으로 이동 됩니다</p>
    </div>
</body>
<script>
    const redirect = document.querySelector(".redirect");
    const span = redirect.querySelector(".text");
    setInterval(() => {
        span.innerText = parseInt(span.innerText) -1;
    },1000);

    setTimeout(() => {
        window.location.href= "/home";
    },5000);
</script>
</html>
