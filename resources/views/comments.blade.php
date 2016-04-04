@include("header")

<div class="container">
<div class="row">
@include("common.comments")->with(['comment' => $comment])
</div>
</div>

@include("footer")