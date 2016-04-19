@include("header")
<link href="/css/dashboard.css" rel="stylesheet">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="/admin/user">用户管理 <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/admin/book">小说管理</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/admin/booklist">书单管理</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/admin/tag">分类管理</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>序号</th>
                  <th>标签</th>
                  <th>排序</th>
                  <th>urlname</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                @foreach($info as $key => $val)
                <tr>
                  <td>{{ $val->id }}</td>
                  <td>{{ $val->tag }}</td>
                  <td>{{ $val->order }}</td>
                  <td>{{ $val->urlname}}
                  <td><a href="#" onclick="deleteItem('tag', {{ $val->id }});">删除</a>  <a href="#">修改</a> <a href="#">新增</a>  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/holder.js"></script>
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/ie-emulation-modes-warning.js"></script>
    <script  src="/js/popover.js"></script>
    <script src="/js/toastr.min.js?v=12"></script>
    <script  src="/js/my.js"></script>
  </body>
</html>
