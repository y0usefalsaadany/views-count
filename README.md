# views-count
this php script to website's views count

# usage

go to home page in your project then put this code:
```
@php
$file = 'f.txt';
$ip = $_SERVER['REMOTE_ADDR'] . "\n";
@endphp
```

then go to dashboard file then put this code:
```
@php
$f = file_put_contents('f.txt',$ip, FILE_APPEND);
$views = count(file($f));
echo $views
@endphp
```
