<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ch10-使用ORM進行資料存取</title>
</head>
<body>
      <h1>ch10-4</h1>
      <h2>使用Eloquent ORM操作資料庫</h2>
      <ul>
            <li>select 搜尋
                  <ul>
                        <li><a href="{{('/api/select/all')}}" target="_blank">
                              搜尋全部資料(回傳所有欄位)
                              <br>(URL:{{url('/api/select/all')}})</a>
                        </li>
                  </ul>
            </li>

            <li>Insert 新增
                  <ul>
                        <li><a href="{{('/api/insert/Tomato/5')}}" target="_blank">
                              新增一筆資料(name=Tomato,price=5)
                              <br>(URL:{{url('/api/insert/Tomato/5')}})</a>
                        </li>
                  </ul>
            </li>

            <li>Update 更新
                  <ul>
                        <li><a href="{{('/api/update/1/Apple/2')}}" target="_blank">
                              更新一筆資料(id=1,name=Apple,price=2)
                              <br>(URL:{{url('/api/update/1/Apple/2')}})</a>
                        </li>
                  </ul>
            </li>

            <li>Delete 刪除
                  <ul>
                        <li><a href="{{('/api/delete/1')}}" target="_blank">
                              刪除一筆資料(id=1)
                              <br>(URL:{{url('/api/delete/1')}})</a>
                        </li>
                  </ul>
            </li>
      </ul>
</body>
</html>