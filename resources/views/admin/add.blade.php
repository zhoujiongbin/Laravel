@include("header")
<link href="/css/dashboard.css" rel="stylesheet">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="/admin/user">用户管理 </a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/admin/book">小说管理<span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/admin/booklist">书单管理</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/admin/tag">分类管理</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <div class="max-width mg-center" style="margin-top:2em">
          <form  method="post"  name="form" id="form" class="form-horizontal">
          {!! csrf_field() !!}
          <p class='bg-info' style="padding:15px;margin-bottom:15px;">添加小说</p>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">小说名:</label>
              <div class="col-sm-10">
                <input type="tetxt" class="form-control" id="name" name="name" placeholder="小说名" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">作者:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="author" name="author" placeholder="作者" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">分类:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="tag" name="tag" placeholder="分类" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">来源网站:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="source" name="source" placeholder="来源网站" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">来源网址:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="source_url" name="source_url" placeholder="来源网址" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">小说封面地址:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="img_url" name="img_url" placeholder="小说封面地址" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">章节数:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="chapter" name="chapter" placeholder="章节数" value=""/>
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">字数:</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="word" name="word" value="" />
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">更新时间:</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="updatetime" name="updatetime" value="" />
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">最新章节:</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="lastest" name="lastest" value="" />
              </div>
            </div>
            <div class="form-group">
              <label for="updatetime" class="col-sm-2 control-label">简介:</label>
              <div class="col-sm-10">
              <textarea type="textarea" style="min-height:80px;" class="form-control" placeholder="简介" id="intro" name="intro"></textarea>
              </div>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-info btn-primary">保存设置</button>
            </div>
          </form>
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
