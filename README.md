# php_study
2학년 겨울방학 방과후 PHP


## 2020.01.07.

#### 웹서버 + 프로그래밍 언어 + 데이터 베이스
가장 최적화 된 ) Apache + php + mysql (+ Linux)  => APM
* 윈도우에서 APM을 한 번에 설치(세팅) 할 수 있게 만든 것

#### PHP 공부할 수 있는 사이트
* www.phpschool.com
* https://www.php.net/manual/en/function.file-get-contents.php

#### 준비
1. 에디터, 사용환경 : vscode, bitnami

2. 웹서버
Domain : localhost<br/>
Id : 127.0.0.1

** htdocs/test.php => localhost/test.php

#### php 문법
1. 기본<br/>
```php
<?php
echo "Hello new world!";
?>
```
2. echo : 출력
3. 한 줄이 끝나면 세미콜론 찍는다.
4. 주석 : //, /* *.
5. 변수선언시 : 타입선언 안 함. String s => s
6. 변수 앞에 $붙음
	&name = 'kim';
7. 연결 연산자 .
8. 태그를 섞어 사용할 때에는 echo와 ""로 둘러싸야 한다.

--JAVA랑 같음.

#### php.ini
- php 설정 파일

#### Array
1) 구버전 : $arr = array('a', 'b', 'c', 'd', 'e');
2) 새로운 버전 : $arr2 = ['a', 'b', 'c', 'd', 'e'];
* 둘 다 많이 씀

#### 파일 읽기/쓰기
1. 파일 열기 fopen(파일 이름, "r"/"w")
2. 파일 작업
[파일 읽기]
1) fgetc() : 한 글자
2) fgets() : 한 줄
3) fread($fp, 파일사이즈)
4) file_get_contents()

[파일 쓰기]
1) fwrite()
2) file_put_contents()

3. 파일 닫기 fclose()

4. 파일 삭제 unlink()


#### form 태그
- 사용자가 입력할 수 있는 폼을 제공하는 태그
<form method="post/get" action="..."> 
ex) <form method="post" action="test.php">
*action에 처리할 파일 이름
* post : url에 아묻것도 나오지 않음 / get : url에 뭐가 나옴 => post가 보안에 강함.<br/><br/>

1) 한줄 텍스트 입력
```html
<input type="text" name="txt">
```

2) 비밀번호 입력
```html
<input type="password" name="">
```

3) 여러 줄 입력
```html
<textarea rows="30" cols="20">초기값</textarea>
```

4) 선택하기
```html
<input type="checkbox" name= value="">
<input type="radio" name="1" value="">
<input type="radio" name="1" value="">
```

* radio에서는 name이 동일해야 함
```html
<select name="sel">
	<option value="">서울</option>
	<option value="">부산</option>
	<option value="">대전</option>
<select/>
```

5) 파일 업로드/파일 선택
```html
<input type="file" name="">
```

6) 화면에는 나타나지 않지만 값이 넘어가야됨.
```html
<input type="hidden" value="값">
```
