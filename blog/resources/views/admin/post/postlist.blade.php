<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 24/06/2017
 * Time: 21:56
 */

?>
@extends('admin.layouts.layout')
@section('page','Post List')
@section('content')

    <div class="row">


        <div class="col-xs-12">
            @if ($status !=null)
                <div class="alert alert-warning">
                    <strong>{{$status}}</strong>
                </div>
            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Post List</h3>
                    <a href="{{url('/admin/post/create')}}" class="btn pull-right"><i class="fa fa-plus-circle"></i>
                        New
                        Post</a>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Author Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Publish Date</th>
                            <th>View</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <img class="img-responsive" src="{{$post['header_img']}}"
                                         alt="{{$post['name']}}"
                                         width="100" height="100">
                                </td>
                                <td>{{$post['name']}}</td>
                                <td>
                                    <a href=""> <img src="{{asset('admintemplate/dist/img/avatar04.png')}}"
                                                     alt="{{$post['user_name']}}"
                                                     class="img-circle" width="45" height="45">
                                        <span>{{$post['user_name']}}</span> </a>
                                </td>
                                <td>
                                    <?php $status = $post['status']; ?>
                                    @if($status == 'publish')
                                        <?php $statusClassName = 'success'; ?>
                                    @elseif($status  =='draft')
                                        <?php $statusClassName = 'warning'; ?>
                                    @endif
                                    <span class="label label-{{$statusClassName}}">{{$status}}</span>
                                </td>
                                <td>{{$post['created_date']}}</td>
                                <td>{{$post['publish_date']}}</td>
                                <td>{{$post['view']}}</td>
                                <td>
                                    <a href="{{url('/yazi/'.$post['seo_url'])}}" target="_blank"><i
                                                class="btn fa fa-eye"></i></a>
                                    <a href=""><i class="btn fa fa-edit"></i></a>
                                    <a href="{{url('/admin/post/delete/'.$post['id'])}}"><i
                                                class="btn fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
