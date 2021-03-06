<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 25/06/2017
 * Time: 16:27
 */
?>
@extends('admin.layouts.layout')
@section('page','Craete Post')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create</h3>
            <a href="{{url('/admin/post/postlist')}}" class="btn pull-right"><i class="fa fa-location-arrow"></i> Back Post List</a>
        </div>
        <form  action="/admin/post/create" method="post" enctype="multipart/form-data" >
            <div class="box-body">
                <div class="form-group">
                    <label>Header Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Header Name">
                </div>
                <div class="form-group">
                    <label>Header Image</label>
                    <input type="file" name="image">

                    <p class="help-block">Plase only .jpg .png image files.</p>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content"  rows="10"> </textarea>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            aria-hidden="true">
                        <option selected="selected">Select Category</option>
                        @foreach($category as $cat)
                            <option>{{$cat['name']}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                            aria-hidden="true">
                        <option selected="selected">Draft</option>
                        <option>Publish</option>
                    </select>

                </div>
            </div>

            <div class="box-footer">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection