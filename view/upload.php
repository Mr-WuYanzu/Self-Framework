<!DOCTYPE html>
<html>
<head>
    <title>文件上传</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="http://upload.qiniup.com"
      enctype="multipart/form-data">
    <input name="key" type="hidden" value="">
    <input name="token" type="hidden" value="<?=$token?>">
    <input name="accept" type="hidden" />
    <input name="file" type="file" />
    <input type="submit" value="上传文件" />
</form>
</body>
</html>