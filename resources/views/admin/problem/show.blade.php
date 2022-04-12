@extends('layouts.dashboard')

@section('content')
    <style>
        .problem-desc blockquote {
            position: relative;
        }

        .problem-desc blockquote:before {
            position: absolute;
            content: '';
            width: 8px;
            height: 111px;
            background: #6f8fab;
            border-radius: 5px;
        }

        .problem-desc blockquote:after {
            position: absolute;
            content: '';
            width: 8px;
            height: 90px;
            background: #6f8fab;
            left: 15px;
            top: 11px;
            border-radius: 5px;
        }

        .icons i {
            font-size: 20px;
            color: ghostwhite;
            background: teal;
            padding: 10px;
            border-radius: 4px;
        }


        ul.answer-list li {
            border-bottom: 2px solid #efefef;
            padding-bottom: 13px;
            padding-top: 14px;
            width: 50%;
        }

        ul.answer-list li:last-child {
            border-bottom: 0;
        }

        ul.answer-list li:first-child {
            padding-top: 0;
        }

        .problem-desc p {
            padding: 40px;
        }

    </style>


    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="grid grid-cols-3 gap-6  xl:grid-cols-1">

            <!-- Start problem details -->
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header border-transparent">
                    <h2 class="text-teal-600 font-bold">{{ isset($problem->title) ? $problem->title : 'Problem Title' }}
                    </h2>
                    <div class="meta mb-5">
                        <span>Asked By <a href="" class="underline">{{ $problem->user_id }}</a></span>,
                        <span>Created At: {{ $problem->created_at }}</span>
                    </div>
                    <div class="icons flex gap-2 align-content-center mb-5">
                        <i class="fa fa-eye "></i>
                        <div class="icon-cont ">
                            <p>Visibility</p>
                            <p>{{ $problem->visibility }}</p>
                        </div>
                    </div>

                    <hr>
                    <div class="problem-desc mt-5">
                        <h3 class="font-bold mb-3">Description</h3>
                        <blockquote>
                            <p>{{ $problem->description }}</p>
                        </blockquote>
                    </div>
                </div>
                <!-- End problem details -->
            </div>

            <!-- tags -->
            <div class="card  px-3">
                <div class="card-header border-transparent">
                    <div class="tags mb-5">
                        <h2 class="text-teal-600 font-bold mb-4">Tags</h2>
                        <hr>
                        <ul class="flex gap-2 flex-wrap mt-4">
                            <li><a href="" class="btn-shadow ">Tag 1</a></li>
                            <li><a href="" class="btn-shadow">Tag 2</a></li>
                            <li><a href="" class="btn-shadow">Tag 3</a></li>
                            <li><a href="" class="btn-shadow">Tag 4</a></li>
                            <li><a href="" class="btn-shadow">Tag 5</a></li>
                            <li><a href="" class="btn-shadow">Tag 6</a></li>
                            <li><a href="" class="btn-shadow">Tag 7</a></li>
                        </ul>
                    </div>
                    <div class="category">
                        <h2 class="text-teal-600 font-bold mb-4">Category</h2>
                        <hr>
                        <ul class="flex gap-2 flex-wrap mt-4">
                            <li><a href="" class="btn-shadow ">Category 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- tags -->


        </div>




        <div class="grid grid-cols-1 gap-6 xl:col-span-1 mt-5">
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header font-bold">View All Answers</div>


                <div class="card-body">
                    <ul class="answer-list  w-50">
                        <li>Answer 1</li>
                        <li>Answer 2</li>
                        <li>Answer 3</li>
                    </ul>
                </div>

            </div>
        </div>


    </div>
@endsection
