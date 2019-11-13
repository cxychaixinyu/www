## 一、链接数据库

```
mysqli_connect('主机地址','用户名','密码');
mysqli_connect_errno();
返回错误号码，如果错误号码为0表示没有错误
mysqli_connect_error();
返回的错误信息
mysqli_set_charset(链接对象,'utf8');
设置链接、通信的字符集
```

## 二、选择数据库

```
 mysqli_select_db(链接的对象,'选择哪个数据库');
```

## 三、准备SQL语句

## 四、执行SQL语句

```
 mysqli_query(链接的对象,'SQL语句的字符串');
```

## 五、处理结果

> 有结果集\(select\)

```
mysqli_fetch_assoc(结果集);
    每次从结果集中拿一条数据出来。到最后返回NULL 拿成关联数组
mysqli_fetch_row(结果集);
    每次从结果集中拿出一条数据来。 到最后返回NULL 拿成一个索引数组。
 mysqli_num_rows(结果集);
    获得结果集的条数
 注意：如果说执行的是select语句那么mysqli_query()将会返回一个结果集的对象（集合）
```

> 没有结果集但是有影响函数\(insert、delete、update\)

```
mysqli_affected_rows(链接对象);
    获得影响行数，如果是大于等于1说明插入成功，如果小于1说明插入失败
mysqli_insert_id(链接对象);
    获得插入表中的auto_increment列的最大ID
```

## 六、关闭数据库

```
 mysqli_close(链接对象);
```



