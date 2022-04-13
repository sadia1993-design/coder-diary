@extends('layouts.dashboard')

@section('content')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <div class="grid grid-cols-1 gap-6 xl:col-span-1">
            <div class="card col-span-2 xl:col-span-1">
                <div class="card-header  font-bold text-teal-600">
                    <h1>Create a Problem</h1>
                </div>

                <div class="card-body">

                    {{-- form start --}}
                    <form action="" class="mb-0 space-y-6" method="POST">

                        <div class=" grid grid-cols-2 gap-4">
                            <div class="col-md-6 ">

                                <div class="form-outline">
                                    <label class="font-bold  " for="title">Enter Title</label>
                                    <input type="text" id="title" name="title"
                                        class="border mt-2 w-full border-slate-300 py-2 px-3 shadow-sm  focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                                        placeholder="Title" />
                                </div>


                            </div>
                            <div class="col-md-6 ">

                                <div class="form-outline">
                                    <label class="font-bold " for="slug">Slug</label>
                                    <input type="text" readonly id="slug" name="slug"
                                        class="border bg-gray-100 mt-2 w-full border-slate-300 py-2 px-3 shadow-sm  focus:outline-none " />
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-outline">
                                    <label class="font-bold " for="description">Describe Problem</label>
                                    <textarea class="shadow-sm  focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                                        name="ckEditor" id="description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-outline">
                                    <label class="font-bold " for="tags">Tags</label>
                                    <input type="text" id="tag" name="tag"
                                        class="border mt-2 w-full border-slate-300 py-2 px-3 shadow-sm  focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                                        placeholder="Tags" />
                                </div>
                            </div>
                        </div>

                        <div class=" grid grid-cols-2 gap-4">
                            <div class="col-md-6 ">

                                <div class="form-outline">
                                    <label class="font-bold ">Created By</label>
                                    <select
                                        class="border mt-2 w-full border-slate-300 py-2 px-3 shadow-sm  focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                        <option value="1" disabled>Choose option</option>
                                        <option value="2">Subject 1</option>
                                        <option value="3">Subject 2</option>
                                        <option value="4">Subject 3</option>
                                    </select>
                                </div>


                            </div>
                            <div class="col-md-6 ">

                                <div class="form-outline">
                                    <label class="font-bold ">Select Category</label>
                                    <select
                                        class="border mt-2 w-full border-slate-300 py-2 px-3 shadow-sm  focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                        <option value="1" disabled>Choose option</option>
                                        <option value="2">Subject 1</option>
                                        <option value="3">Subject 2</option>
                                        <option value="4">Subject 3</option>
                                    </select>
                                </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">

                                <div class="form-outline">
                                    <label class="font-bold ">Visibility</label>
                                    <div class=" flex mt-3">
                                        <div class="form-check form-check-inline">
                                            <input
                                                class="form-check-input form-check-input  rounded-full h-4 w-4 border border-gray-800 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="test" id="flexRadioDefault10" value="option1">
                                            <label class="form-check-label inline-block text-gray-800"
                                                for="flexRadioDefault10">Public</label>
                                        </div>
                                        <div class="form-check form-check-inline ml-2">
                                            <input
                                                class="form-check-input  rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                type="radio" name="test" id="inlineRadio2" value="option2">
                                            <label class="form-check-label inline-block text-gray-800"
                                                for="inlineRadio20">Private</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <input class="btn-shadow cursor-pointer" type="submit" value="Submit" />
                        </div>

                    </form>
                    {{-- form end --}}
                </div>
            </div>
        </div>
    </div>
@endsection
