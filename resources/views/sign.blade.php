
@include("header")

<div class="container">
	<div class="max-width mg-center" style="margin-top:2em">
	<form action="" method="post" class="form-horizontal">
	{!! csrf_field() !!}
		<p class='bg-success' style="padding:15px;margin-bottom:15px;">欢迎注册游书网</p>
		<div class="form-group">
			<label for="userName" class="col-sm-2 control-label">用户名:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="用户名"/>	
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">密码:</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="password1" name="password1" placeholder="请输入密码"/>
			</div>
		</div>
		<div class="form-group">
			<label for="cofimPassword" class="col-sm-2 control-label">重复密码:</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="password2" name="password2" placeholder="重复密码"/>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">邮箱:</label>
			<div class="col-sm-10">
			<input type="eamil" class="form-control" id="email" name="email" placeholder="请输入注册邮箱"/>
			</div>
		</div>
		<div class="form-group">
			<label for="code" class="col-sm-2 control-label">验证码:</label>
			<div class="col-sm-6">
			<input type="code" class="form-control" id="code" name="code" placeholder="请输入验证码"/>
			</div>
			<div class="col-sm-4">
			<input type="code" class="form-control" id="codeVaulue" name="codeValue" readonly value="1234" />
			</div>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-success btn-primary">注册</button>
		</div>
	</form>
	</div>
</div>

@include("footer")