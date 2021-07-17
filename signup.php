<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'opentutorials');
$sql = "
  INSERT INTO topic
    (nickname,password,name,birth,month,date)
    VALUES(
        '{$_POST['nickname']}',
        '{$_POST['password']}',
        '{$_POST['name']}',
        '{$_POST['birth']}',
        '{$_POST['month']}',
        '{$_POST['date']}'
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>
