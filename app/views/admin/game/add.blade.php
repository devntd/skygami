@extends('admin.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Game Form validations
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post"
                          action="{{Asset('add-game')}}">
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Title</label>

                            <div class="col-lg-10">
                                <input class=" form-control" id="title" name="title" type="text"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-2">Content</label>

                            <div class="col-lg-10">
                                <input class=" form-control" id="content" name="content"
                                       type="text"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Slug</label>

                            <div class="col-lg-6">
                                <input class="form-control " id="slug" name="slug" type="text"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-2">Excerpt</label>

                            <div class="col-lg-10">
                                <input class="form-control " id="excerpt" name="excerpt"
                                       type="text"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-2">Guid</label>

                            <div class="col-lg-6">
                                <input class="form-control " id="guid" name="guid"
                                       type="text"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">URL</label>

                            <div class="col-lg-10">
                                <input class="form-control " id="url" name="url" type="text"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-danger">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection