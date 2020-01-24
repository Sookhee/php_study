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

## 2020.01.07.

#### Database
* Oracle, Mysql, MongoDB ==> DBMS
	: 사용자와 DB의 중간 역할

1) DB 생성
2) 계정 생성
3) 권한 부여 (grant)

#### mysql 
1. 접속 : mysql -uroot -p<패스워드> 사용할 DB명

2. 계정 추가 방법
	1) 사용할 데이터베이스 생성(testDB)
	2) 계정 생성
```mysql
create user 'test'@'%' identified by '1111';
Query OK, 0 rows affected (0.00 sec)

mysql> grant all privileges on testdb.* to 'test'@'localhost';
Query OK, 0 rows affected (0.00 sec)

mysql> grant all privileges on testdb.* to 'test'@'%';
Query OK, 0 rows affected (0.01 sec)
```
#### mysql query
1. 데이터 삽입 : insert
insert into 테이블이름 (필드, 필드..) values (값, 값..);
```mysql
insert into login (id, name, addr) values(1, 'kim', 'seoul');
```

2. 데이터 수정 : update
update 테이블명 set 변경필드=변경할값 where 조건;
```mysql
update login set addr='busan' where id=1;
```

3. 테이블 구조 변경 : alter
	1) 테이블 이름 변경
	alter table 원래 테이블 이름 rename 바꿀 테이블 이름;
	```mysql
	alter table login rename login1;
	```

	2) 칼럼 추가
	alter table 테이블이름 add column 이름 타입;
	```mysql
	alter table login add column hp char(15);
	alter table login add column hobby varchar(20) after name;
	```

	3) 컬럼 타입 변경
	alter table 테이블이름 modify column 컬럼이름 변경할 타입;

	4) 컬럼 이름 변경
	alter table 테이블이름 change column 원래칼럼이름 바꿀칼럼이름 타입;
	```mysql
	alter table login change column hp tel varchar(15);
	```

	5) 컬럼 삭제
	alter table 테이블이름 drop column 이름;
	```mysql
	alter table login drop column tel;
	```

4. select
	1) 모든 데이터 검색
	```mysql
	select * from login;
	```
	2) id가 2번인 데이터 검색
	```mysql
	select * from login where id=2;
	```
	3) 이름이 kim이거나 seoul에 사는 사람 검색
	```mysql
	select * from login where name='kim' or addr='seoul';
	```
	4) 이름이 kim이고 seoul에 사는 사람 검색
	```mysql
	select * from login where name='kim' and addr='seoul';
	```
	5) 이름이 k로 시작하는 데이터 검색
	```mysql
	select * from login where name like 'k%';
	```
	6) 이름이 m으로 끝나는 데이터 검색
	```mysql
	select * from login where name like '%m';
	```
	7) 이름에 i가 들어가는 데이터 검색
	```mysql
	select * from login where name like '%i%';
	```
	==> 검색할 때 사용 됨
	8) 이름의 글자수가 3자인 데이터 검색
	```mysql
	select * from login where char_length(name)=3;
	select * from login where name like '___';
	```
	9) 서울에 사는 사람 검색
	```mysql
	select * from login where addr='seoul';
	```
	10) id 기준으로 내림차순 검색
	```mysql
	select * from login order by id desc;
	```
	==> 게시판에 자주 사용됨
	11) 서울에 사는 사람 수 검색 
	```mysql
	select count(*) from login where addr='seoul';
	```

<< php에서 mysql 연동하기
1. mysql 접속 - mysqli_connect()
```php
$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');
```
=> $conn = mysqli_connect(호스트이름, 유저, 비밀번호, 사용할 데이터베이스);

2. 쿼리 사용하기<br>
mysqli_query(쿼리, $conn);
```php
$query = 'insert into login values ('$id', '$passwd');
mysqli_query($query, $conn);
mysqli_close($conn);
```

3. 목록 가져오기
	1) select 해서 데이터 가져오기 mysqli_query()
	```php
	$query = "select * from login";
	$result = mysqli_query($conn, $query);
	```

	2) 데이터 갯수 구하기 mysql_num_rows()
	```php
	$num = mysqli_num_rows($result);
	```

	3) 한 줄 씩 가져오기 mysql_fetch_rows() / mysql_fetch_array()
	```php
	for($i = 0; $i < $num; $i++){
		$re = mysqli_fetch_array($result);
		echo $re[0];
		echo $re['user_id'];
	}
	```
	
## 2020.01.08.

#### write_pro.php - 게시물 작성
1) 입력한 값이 bbs 테이블에 insert
- 현재 시각 구하는 함수 now()
2)
```html
<meta http-equiv='refresh' content="0;url='list.php'">
```

#### File upload
```php
$_FILES['user-file']
```
*['name'], ['type'], ['size'] 자동 생성

#### IP 주소 구하기
```php
$_SERVER['REMOTE_ADDR']
```

#### 앞으로 공부 해야할 것
1. 파일 업로드
2. 이미지 저장 (blob)
* 요즘은 서버에 이미지를 올리고 주소로(text) 저장함
3. 다운로드하기
4. 엑셀파일로 다운로드 하기
5. 페이징 알고리즘 구현
6. 답글 달기
7. 쇼핑몰 제작
